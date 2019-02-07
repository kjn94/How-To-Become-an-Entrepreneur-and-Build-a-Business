
<?php
session_start();
require_once '../core/init.php';

$_SESSION['message'] = '';

if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['confirmpassword']) && isset($_POST['email'])){
		if ($_POST['password'] == $_POST['confirmpassword']) {
			$username = $db->real_escape_string($_POST['username']);
			$password = $db->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
	        $hash = md5($_POST['password']); //md5 has password for security
			$email = $db->real_escape_string($_POST['email']);

			// Check if user with that email already exists
			$result = $db->query("SELECT * FROM users WHERE email='$email'") or die($db->error());
			// Check if user with that username already exists
			$result2 = $db->query("SELECT * FROM users WHERE username='$username'") or die($db->error());
			// We know user email exists if the rows returned are more than 0
			if ( $result->num_rows > 0 ) {
			    $_SESSION['message'] = 'User with this email already exists!';
			    header("location: error.php");	 
			}

			// We know user email exists if the rows returned are more than 0
			elseif ( $result2->num_rows > 0 ) {
			    $_SESSION['message'] = 'This username is already taken!';
			    header("location: error.php");	 
			}
			else{


			$sql = "INSERT INTO users (username, password, hash, email) VALUES ('".$username."', '".$password."', '".$hash."','".$email."')";

			$res = mysqli_query($db,$sql) or die(mysqli_error($db));

			if($res){
				$_SESSION['active'] = 0; //0 until user activates their account with verify.php
				echo "Confirmation link has been sent to $email, please verify
                 your account by clicking on the link in the message!";
        
			        // Send registration confirmation link (verify.php)

					require 'phpmailer/src/Exception.php';
					require 'phpmailer/src/PHPMailer.php';
					require 'phpmailer/src/SMTP.php';
					$mail = new PHPMailer\PHPMailer\PHPMailer();
					$mail->isSMTP();
					$mail->SMTPDebug = 2;
					$mail->Host = 'ssl://smtp.gmail.com';
					$mail->Port = 465;
					$mail->SMTPSecure = 'ssl';
					$mail->SMTPAuth = true;
					$mail->Username = "knikolov4521@gmail.com";
					$mail->Password = "K1540rznikolov";
					$mail->setFrom('knikolov4521@gmail.com', 'Secret Entourage Registration');
					$mail->addAddress($email, 'Secret Entourage Registration');
					$mail->Subject = 'Account Verification';
					$mail->Body =  '
						        Hello '.$username.',

						        Thank you for signing up!

						        Please click this link to activate your account:

						        http://localhost/menu/pages/verify.php?email='.$email.'&hash='.$hash;
						if($mail->send())
						{
							$_SESSION['message'] = "<h2>Confirmation link has been sent to $email, please verify your account by clicking on the link in the message!</h2>";
                          	header("Location: success.php");
                        }
                        else
                        {
							$_SESSION['message'] = "<h3>Confirmation link failed to send!</h3>";
                          	header("Location: error.php");
                        }

			}else{
		        $_SESSION['message'] = "Invalid Registration.";
        		header("location: error.php");
				exit();
			}
		}
	}
	else {
		$_SESSION['message'] = "Two passwords do not match! Please Try Again";
        header("location: error.php");
        }
}
?>