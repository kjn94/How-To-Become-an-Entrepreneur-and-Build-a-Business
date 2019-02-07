<?php 
/* Reset your password form, sends reset.php password link */
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = 'root';
$db = 'tutorial';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
session_start();

// Check if form submitted with method="post"
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) 
{   
    $email = $mysqli->escape_string($_POST['email']);
    $result = $mysqli->query("SELECT * FROM users WHERE email='$email'");

    if ( $result->num_rows == 0 ) // User doesn't exist
    { 
        $_SESSION['message'] = "User with that email doesn't exist!";
        header("location: error.php");
    }
    else { // User exists (num_rows != 0)

        $user = $result->fetch_assoc(); // $user becomes array with user data
        
        $email = $user['email'];
        $hash = $user['hash'];
        $username = $user['username'];

        // Session message to display on success.php
        $_SESSION['message'] = "<h2>Please check your email <span>$email</span>"
        . " for a confirmation link to complete your password reset!</h2>";

        // Send registration confirmation link (reset.php)

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
          $mail->setFrom('knikolov4521@gmail.com', 'Password Reset Link');
          $mail->addAddress($email, 'Password Reset Link');
          $mail->Subject = 'Password Reset Link';
          $mail->Body =  '
            Hello '.$username.',

            You have requested password reset!

            Please click this link to reset your password:

            http://localhost/menu/Pages/reset.php?email='.$email.'&hash='.$hash; 
            if($mail->send())
            {
              $_SESSION['message'] = "<h2>Password reset link has been sent to $email!</h2>";
                            header("Location: success.php");
                        }
                        else
                        {
              $_SESSION['message'] = "<h3>Password reset link failed to send!</h3>";
                            header("Location: error.php");
                        }
  }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Reset Your Password</title>
  <link rel="stylesheet" type="text/css" href="forum/style.css">
  <link href="http://localhost/menu/css/mainmenu.css" rel="stylesheet" type="text/css" />
  <link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="http://localhost/menu/css/buttons.css" rel="stylesheet" type="text/css" />
</head>

<?php
    require_once '../core/init.php';
   include '../includes/navigationHome.php';

    if(!isset($_SESSION ['uid'])){
      ?>
        <br><br><br>
          <nav class="nav-blog">
            <center><h1>Password Reset</h1><center>
          </nav>
      <br><br><br>
      
      <form action="forgot.php" method="post">
        <div class="field-wrap">
         <label>
           Email Address<span class="req">*</span>
          </label>
          <input type="email"required autocomplete="off" name="email"/>
        </div>
        <button class="button8 button9"/>Reset</button>
      </form>

<br><br><br>
    <?php
  }
?>
    <!--------FOOTER-------->
<?php

    include '../../menu/includes/footerlogin.php';

?>