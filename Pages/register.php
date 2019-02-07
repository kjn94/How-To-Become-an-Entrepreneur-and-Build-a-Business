<!DOCTYPE html>
<html>
<head>
	<title>Register Below</title>
	<link rel="stylesheet" type="text/css" href="forum/style.css">
    <link rel="stylesheet" type="text/css" href="style.css">
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
        <input type='text' placeholder="Username" name='username' required autocomplete="off" maxlength="10"><br>
        <input type='email' placeholder="Email" name='email' required autocomplete="off"><br>
        <input type='password' placeholder="Password" name='password' required autocomplete="off"><br>
        <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required /><br><br>
        <input type='submit' name='submit' value='Register'><br><br>

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