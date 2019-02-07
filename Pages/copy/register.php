<!DOCTYPE html>
<html>
<head>
	<title>Register Below</title>
	<link rel="stylesheet" type="text/css" href="forum/style.css">
    <link href="http://localhost/menu/css/mainmenu.css" rel="stylesheet" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
</head>

<?php
    require_once '../core/init.php';
   include '../includes/navigationHome.php';
session_start();

    if(!isset($_SESSION ['uid'])){
    	?>
<br><br><br>
<nav class="nav-blog">
      <center><h1>Become a Member</h1><center>
</nav>
        <br><br>
    	<p>Please Register Here</p>
    	<br>
        <form action="<?php echo htmlspecialchars('register_parse.php');?>" method='post'>
        Username: <input type='text' name='username' required autocomplete="off" maxlength="6">&nbsp;
        Password <input type='password' name='password' required autocomplete="off">&nbsp;
        Email <input type='text' name='email' required autocomplete="off">&nbsp;
        <input type='submit' name='submit' value='Register'> ;

    <?php
    }
    else{
      echo "<p>You are logged in as ".$_SESSION['username']." &bull; <a href='logout_parse.php'> Logout</a>";
    }
    ?>
    <!--------FOOTER-------->
<?php

    include '../includes/footerlogin.php';

?>