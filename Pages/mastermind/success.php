<?php
    require_once '../../core/init.php';
    include '../../includes/navigationHome.php';
    session_start(); 
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Create Reply</title>
        <link href="http://localhost/menu/css/mainmenu.css" rel="stylesheet" type="text/css" />
        <link href="http://localhost/menu/css/buttons.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="../forum/style.css">
    </head>
<body>
<br><br><br>
    <nav class="nav-blog">
        <center><h1>Private Mastermind Area</h1><center>
    </nav>
  <?php
    include '../../includes/register_bar.php';
  ?>
    <div id="wrapper">
        <center>
            <h1>Congratulations!</h1>
            <hr>
            <h2>Your have successfully registered for the course.</h2>
            <hr>
        </center>
            <a href="mastermind.php">
              <input type="submit" name="reply_submit" value="View Other Courses"/>
            </a>
    </div>
    <!--------FOOTER-------->
<?php

    include '../../../menu/includes/footer2.php';

?>
</body>
</html>