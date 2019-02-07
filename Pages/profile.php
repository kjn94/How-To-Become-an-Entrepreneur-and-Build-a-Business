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
      <center><h1>Profile Verification</h1><center>
  </nav>
    	<br><br><br>
    	<h1>Please check your email and Verify your account!</h1>
    	<br>
        <?php 
            if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ):
                echo $_SESSION['message'];    

            endif;
        ?>
        <br>
        <form action="<?php echo htmlspecialchars('login.php');?>">
        <br><br>
        <input type='submit' name='submit' value='Login Here'>
        <br><br><br>

    <?php
    }
    else{
$message = '';
        echo "<br><br><br>
        <nav class='nav-blog'>
      <center><h1>Profile Verification</h1><center>
  </nav><br><br><br><br>";
            if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ):
                $message .= "<h1>".$_SESSION['message']."</h1>";    
                $message .= "
            <center>
                <a href='http://localhost/menu/pages/Home/home.php'>
                    <button class='button8 button9'>Home</button>
                </a>
            </center>";
            echo $message;
            endif;

    }
    ?>
<br><br><br>
    <!--------FOOTER-------->
<?php

    include '../../menu/includes/footerlogin.php';

?>