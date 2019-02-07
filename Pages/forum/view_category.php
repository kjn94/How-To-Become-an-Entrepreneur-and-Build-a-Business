<?php
    require_once '../../core/init.php';
   include '../../includes/navigationHome.php';
   session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>View Category</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="http://localhost/menu/css/mainmenu.css" rel="stylesheet" type="text/css" />
    <link href="http://localhost/menu/css/buttons.css" rel="stylesheet" type="text/css" />
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

<div id="wrapper">
<br>
<hr>
<div id="content">
    
    </div>
        <?php   
            $topics = "";
            $cid = $_GET['cid'];

            if(isset($_SESSION['uid'])){
                $logged = " | <a href='create_topic.php?cid=".$cid."'>Click here to Create a Topic</a>";
            }else{
                $logged = " | Please login to create topics in this forum.";
            }

            $sql = "SELECT id FROM categories WHERE id='".$cid."' LIMIT 1";
            $res = mysqli_query($db,$sql) or die(mysqli_error($db));
            if(mysqli_num_rows($res) == 1){

            $sql3 = "SELECT * FROM users INNER JOIN topics ON topics.topic_creator = users.id WHERE category_id = '".$cid."' ORDER BY topic_reply_date DESC";
            $res3 = mysqli_query($db,$sql3) or die(mysql_error()); 

                $sql2 = "SELECT * FROM topics WHERE category_id='".$cid."'ORDER BY topic_reply_date DESC";
                $res2 = mysqli_query($db,$sql2) or die(mysqli_error($db));
                if(mysqli_num_rows($res3) > 0){
                    $topics .= "<table width='100%' style='border-collapse: collapse;'>";
                    $topics .= "<tr><td colspan='3'><a href='index.php'>Return to Forum Index</a>".$logged."<hr></td></tr>";
                    $topics .= "<tr style='background-color: #dddddd;'><td>Topic Title</td><td width='65' align='center'>Replies</td><td width='65' align='center'>Views</td></tr>";
                    $topics .= "<tr><td collapse='3'><hr></td></tr>";
                    while($row = mysqli_fetch_assoc($res3)){
                        $tid = $row['id'];
                        $title = $row['topic_title'];
                        $replies = $row['topic_replies'];
                        $views = $row['topic_views'];
                        $date = $row['topic_date'];
                        $creator = $row['username'];
                        $topics .= "<tr> <td><a href='view_topic.php?cid=".$cid."&tid=".$tid."'>".$title."</a><br><span class='post_info'>Posted by: ".$creator." on " .$date."</span></td><td align='center'>".$replies."</td><td align='center'>".$views."</td></tr>";
                        $topics .= "<tr><td colspan='3'><hr></td</tr>";

                    }
                    $topics .= "</table>";
                    echo $topics;
                }else{
                    echo "<a href='index.php'>Return to Forum</a><hr>";
                    echo "<p>There are no topics in this category yet.".$logged."</p>";
                }
            }else{
                echo "<a href='index.php'>Return to Forum</a><hr>";
                echo "<p>You are trying to view a category that does not exist yet.";
            }
        ?>  
    </div>
</div>
<br>
    <!--------FOOTER-------->
<?php

    include '../../../menu/includes/footer2.php';

?>
</body>
</html>