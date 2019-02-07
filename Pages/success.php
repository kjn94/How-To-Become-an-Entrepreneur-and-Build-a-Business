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

    if(isset($_SESSION ['uid'])){
    	?>
        <br><br><br>
        <nav class="nav-blog">
            <center><h1>Success</h1><center>
        </nav>
    	<br><br><br>
    	<h1>Thank you for being part of the community</h1>
    	<br>
        <?php 
        $message ='';
            if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ):
                $message .= "<h2>".$_SESSION['message']."</h2>";
                echo $message;    

            endif;
        ?>
        <br>
            <center>
                <a href="Home/home.php">  
                <button class="button8 button9"/>Home</button>
              </a>
            </center>
        <br><br><br>

    <?php
    }
    else{
        echo"<br><br><br>
        <nav class='nav-blog'>
            <center><h1>Success</h1><center>
        </nav>";
              $message ='';
            if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ):
                $message .= "<h2>".$_SESSION['message']."</h2>";
                echo $message;    

            endif;
                echo "<center>
                <a href='login.php'>  
                <button class='button8 button9'/>Login</button>
              </a>
            </center><br>";
}
?>
    <!--------FOOTER-------->
<?php

    include '../../menu/includes/footerlogin.php';

?>