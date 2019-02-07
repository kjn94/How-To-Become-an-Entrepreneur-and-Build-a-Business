<?php
session_start();
require_once '../core/init.php';

if(isset($_POST['username'])){
	$username = $db->real_escape_string($_POST['username']);
	$password = $db->real_escape_string($_POST['password']);

		$sql = "SELECT * FROM users WHERE username='".$username."' LIMIT 1";
		$res = mysqli_query($db,$sql) or die(mysqli_error($db));
		if(mysqli_num_rows($res) == 1)
		{
			$sql2 = "SELECT * FROM users WHERE username='".$username."' AND active='1' LIMIT 1";
			$res2 = mysqli_query($db,$sql2) or die(mysqli_error($db));
			if(mysqli_num_rows($res2) == 1){
				$row = mysqli_fetch_assoc($res);

				if(password_verify($_POST['password'], $row['password']))
				{
					$_SESSION['uid'] = $row['id'];
					$_SESSION['username'] = $row['username'];
					$_SESSION['message'] = "Hello $username. <br> You are successfully logged in! ";
					header("Location: success.php");
					exit();
				}else{
					$_SESSION['message'] = "Invalid Login Details. Please try again!";
					header("Location: error.php");
				}
			}
			else {
				$_SESSION['message'] = "Your account has not been activated!";
				header("Location: error.php");
			}
		}
		else{
			$_SESSION['message'] = "There is no user with that username";
			header("Location: error.php");
		}
}
?>