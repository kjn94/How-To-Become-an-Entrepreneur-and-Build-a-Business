<?php
	$db = mysqli_connect('localhost','root','root','tutorial');
	if(mysqli_connect_errno()){
		echo 'errors haha: '. mysqli_connect_error();
		die();
	}
?>