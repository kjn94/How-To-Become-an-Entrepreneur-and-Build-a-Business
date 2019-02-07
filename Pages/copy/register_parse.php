<?php
session_start();
include_once("forum/connect.php");

if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$sql = "INSERT INTO users (username, password, email) VALUES ('".$username."', '".$password."', '".$email."')";

	$res = mysql_query($sql) or die(mysql_error());

	if($res){
		header("Location: login.php");
		exit();
	}else{
		echo "Invalid Registration. Return to previous page.";
		exit();
	}
}
?>