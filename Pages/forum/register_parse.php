<?php
session_start();
    require_once '../../core/init.php';

if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['country']) && isset($_POST['type'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$country = $_POST['country'];
	$type = $_POST['type'];
	$sql = "INSERT INTO users (username, password, email, country, type) VALUES ('".$username."', '".$password."', '".$email."', '".$country."', '".$type."')";

	$res = mysqli_query($db,$sql) or die(mysqli_error($db,));

	if($res){
		header("Location: login.php");
		exit();
	}else{
		echo "Invalid Registration. Return to previous page.";
		exit();
	}
}
?>