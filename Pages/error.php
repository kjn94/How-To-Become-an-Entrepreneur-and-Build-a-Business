<!DOCTYPE html>
<html>
<head>
	<title>Login Below</title>
	<link rel="stylesheet" type="text/css" href="forum/style.css">
    <link href="http://localhost/menu/css/mainmenu.css" rel="stylesheet" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="style.css">
    <link href="http://localhost/menu/css/buttons.css" rel="stylesheet" type="text/css" />

</head>

<?php
    require_once '../core/init.php';
   include '../includes/navigationHome.php';
session_start();

    if(!isset($_SESSION ['uid'])){
    	?>
        <br><br><br>
          <nav class="nav-blog">
      <center><h1>Error Page</h1><center>
  </nav>
    	<br><br><br>
    	<br>
        <?php 
        $message = '';
            if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ):
                $message .= "<h1>".$_SESSION['message']."</h1>";    
                echo $message;
            endif;
        ?>
        <br>
        <center>  
            <a href="login.php">
                <button class="button8 button9"/>Login</button>
            </a>
            <a href="register.php">
                <button class="button8 button9"/>Register</button>
            </a>
        </center>
        <br><br><br>

    <?php
    }
    else{
      echo "<p>You are logged in as ".$_SESSION['username']." &bull; <a href='logout_parse.php'> Logout</a>";
    }
    ?>

    <!--------FOOTER-------->
<?php

    include '../../menu/includes/footerlogin.php';

?>