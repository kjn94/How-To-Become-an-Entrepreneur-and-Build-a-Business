<?php
    require_once '../../core/init.php';
   include '../../includes/navigationHome.php';
session_start(); 

?>

    <?php
    if((!isset($_SESSION ['uid'])) || ($_GET['cid'] == "")){
        header("Location: index.php");
        exit();
    }
$cid = $_GET['cid'];
$tid = $_GET['tid'];
    ?>

<!DOCTYPE html>
<html>
<head>
  <title>Create Reply</title>
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
    <p>Add a Reply</p>
    <hr>
    <p>Reply Content</p>
    </center>
<div id="content">
        <form action="post_reply_parse.php" method="post">
        
        <textarea name="reply_content" rows="5" cols="75"></textarea>    
        <br><br>
        <input type="hidden" name="cid" value="<?php echo $cid; ?>"/>
        <input type="hidden" name="tid" value="<?php echo $tid; ?>"/>
        <input type="submit" name="reply_submit" value="Post your reply"/>
        </form>
        <?php
                    $cid = $_GET['cid'];
            $tid = $_GET['tid'];
            $sql = "SELECT * FROM topics WHERE category_id='".$cid."' AND id='".$tid."' LIMIT 1";
            $res = mysqli_query($db,$sql) or die(mysqli_error($db));
                while ($row = mysqli_fetch_assoc($res)) {
                $sql2 = "SELECT * FROM posts WHERE category_id = '".$cid."' AND topic_id = '".$tid."'";
                $res2 = mysqli_query($db,$sql2) or die(mysqli_error($db)); 

                    $old_replies = $row['topic_replies'];
                    $new_replies = $old_replies + 1;
                    $sql3 = "UPDATE topics SET topic_replies='".$new_replies."' WHERE category_id='".$cid."' AND id='".$tid."' LIMIT 1";
                    $res3 = mysqli_query($db,$sql3) or die(mysqli_error($db));
                }
        ?>
    </div>
</div>
    <!--------FOOTER-------->
<?php

    include '../../../menu/includes/footer2.php';

?>
</body>
</html>