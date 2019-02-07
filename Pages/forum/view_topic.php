<?php
    require_once '../../core/init.php';
   include '../../includes/navigationHome.php';
   session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>View Topic</title>
    <link href="http://localhost/menu/css/mainmenu.css" rel="stylesheet" type="text/css" />
  <link href="http://localhost/menu/css/buttons.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<br><br><br>
  <!--------BANNER-------->

  <nav class="nav-blog">
      <center><h1>Private SE Forum Area</h1><center>
  </nav>
<?php
    include '../../includes/register_bar.php';
  ?>
    </nav>


<div id="wrapper">
<hr>

   		<?php
   			$cid = $_GET['cid'];
   			$tid = $_GET['tid'];
   			$sql = "SELECT * FROM topics WHERE category_id='".$cid."' AND id='".$tid."' LIMIT 1";
   			$res = mysqli_query($db,$sql) or die(mysqli_error($db));
   			if(mysqli_num_rows($res) == 1){
   				echo "<table style='table-layout: fixed' width='100%'>";
   				if(isset($_SESSION['uid'])){
   					echo "<tr><td colspan='2'><input type='submit' value='Add Reply' onClick=\"window.location = 'post_reply.php?cid=".$cid."&tid=".$tid."'\"/><hr>";
   				}else{
   					echo "<tr><td colspan='2'><center><p class='intro'>Please log in to add a reply</p></center><hr></td></tr>";
   				}
   				while ($row = mysqli_fetch_assoc($res)) {
            $sql3 = "SELECT * FROM posts INNER JOIN users ON posts.post_creator = users.id WHERE category_id = '".$cid."' AND topic_id = '".$tid."' ORDER BY post_date DESC";
            $res3 = mysqli_query($db, $sql3) or die(mysqli_error($db)); 

   					$sql2 = "SELECT * FROM posts WHERE category_id = '".$cid."' AND topic_id = '".$tid."'";
   					$res2 = mysqli_query($db,$sql2) or die(mysqli_error($db));   

   					while($row2 = mysqli_fetch_assoc($res3)){
             
   						echo "<tr><td valign='top' style='word-wrap: break-word' style='border: 1px solid #000000;'><div style='min-height: 125px;'> Topic Title: ".$row['topic_title']."<br> by ".$row2['username']. " - ".$row2['post_date']."<hr>".$row2['post_content']."</div></td><td style='word-wrap: break-word' width='200' valign='top' align='center' style='border: 1px solid #000000;'>User<br><br><hr><br> ".$row2['username']."</td></tr><tr><td colspan='2'><hr></td></tr>";
   					}
   					$old_views = $row['topic_views'];
   					$new_views = $old_views + 1;
   					$sql3 = "UPDATE topics SET topic_views='".$new_views."' WHERE category_id='".$cid."' AND id='".$tid."' LIMIT 1";
   					$res3 = mysqli_query($db,$sql3) or die(mysqli_error($db));
   				}
   				
   				echo "</table>";

   			}else{
   				echo "<p>This topic does not exist.</p>";
   			}
   		?> 

</div>
    <!--------FOOTER-------->
<?php

    include '../../../menu/includes/footer2.php';

?>
</body>
</html>