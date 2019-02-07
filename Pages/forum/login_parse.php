<?php
session_start();
   require_once '../../core/init.php';

if(isset($_POST['username'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM users WHERE username='".$username."' AND password='".$password."' LIMIT 1";
	$res = mysqli_query($db,$sql) or die(mysqli_error($db));
	if(mysqli_num_rows($db,$res) == 1){
		$row = mysqli_fetch_assoc($res);
		$_SESSION['uid'] = $row['id'];
		$_SESSION['username'] = $row['username'];
		header("Location: index.php");
		exit();
	}else{
		echo "Invalid login. Return to previous page.";
		exit();
	}
}
?>