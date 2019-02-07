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

<?php
    $cid = $_GET['cid'];
    $tid = $_GET['tid'];
    $sql = "SELECT * FROM mastermind WHERE category_id='".$cid."' AND id='".$tid."' LIMIT 1";
    $res = mysqli_query($db,$sql) or die(mysqli_error($db));
?>

<!DOCTYPE html>
<html>
  <head>
        <title>Apply</title>
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
      <p>Register for The Course</p>
      <hr>
      </center>
      <div id="content">
          <form action="apply_parse.php" method="post">
          <?php
              $cid = $_GET['cid'];
              $tid = $_GET['tid'];
              $sql = "SELECT * FROM mastermind WHERE category_id='".$cid."' AND id='".$tid."' LIMIT 1";
              $res = mysqli_query($db,$sql) or die(mysqli_error($db));
              ?>
          <input type="hidden" name="cid" value="<?php echo $cid; ?>"/>
          <input type="hidden" name="tid" value="<?php echo $tid; ?>"/>
          <input type="submit" name="reply_submit" value="Register for The Course"/>
          </form>
      </div>
  </div>
    <!--------FOOTER-------->
<?php
    include '../../../menu/includes/footer2.php';
?>
</body>
</html>