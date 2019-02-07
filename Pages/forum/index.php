<?php
  require_once '../../core/init.php';
   include '../../includes/navigationHome.php';
   session_start(); 
?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
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
        <br>
       <center><p class="intro">We currently have two communities for our Academy members, including our Facebook Group and the portion of the forum community dedicated to the Secret Academy that's helping bring Academy members together for collaboration and more. </p></center>
    <div id="wrapper">
    <hr>
    <?php
        $sql = "SELECT * FROM categories ORDER BY category_title ASC";
        $res = mysqli_query($db,$sql) or die(mysqli_error($db));
        $categories = "";
        if(mysqli_num_rows($res) > 0){
            while($row = mysqli_fetch_assoc($res)){
              $id = $row['id'];
              $title = $row['category_title'];
              $description = $row['category_description'];
              $categories .= "<a href='view_category.php?cid=".$id."' class='cat_links'>".$title." - <font size='-1'>".$description."</font></a>";
            }
            echo $categories;
        }else{
          echo "<p> There are no categories available yet.</p>";
        }
    ?>

    </div>
</div>
<br><br>
    <!--------FOOTER-------->
<?php
    include '../../../menu/includes/footer2.php';
?>
</body>
</html>