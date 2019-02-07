<?php
    require_once '../../core/init.php';
    include '../../includes/navigationHome.php';
    session_start(); ?>

    <?php
    if((!isset($_SESSION ['uid'])) || ($_GET['cid'] == "")){
        header("Location: index.php");
        exit();
    }
    $cid = $_GET['cid'];
    ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Create Topic</title>
    <link href="http://localhost/menu/css/mainmenu.css" rel="stylesheet" type="text/css" />
    <link href="http://localhost/menu/css/buttons.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
<body>
<br><br><br>
  <nav class="nav-blog">
      <center><h1>Private SE Forum Area</h1><center>
  </nav>
<?php
    include '../../includes/register_bar.php';
  ?>

<div id="wrapper"> 
    <center> 
       <p>Create a Topic</p>
    </center>

    <hr>
    <div id="content">

    <form action="<?php echo htmlspecialchars('create_topic_parse.php');?>" method="post">
       <center> <p>Topic Title</p></center>
        <input type="text" name="topic_title" size="98" maxlength="150">
        <center><p>Topic Content</p></center>
        <textarea name="topic_content" rows="5" cols="75">        
        </textarea>
        <br><br>
        <input type="hidden" name="cid" value="<?php echo $cid; ?>">
        <input type="submit" name="topic_submit" value="Create Your Topic">
    </form>
 
    </div>
</div>
    <!--------FOOTER-------->
<?php

    include '../../../menu/includes/footer2.php';

?>
</body>
</html>