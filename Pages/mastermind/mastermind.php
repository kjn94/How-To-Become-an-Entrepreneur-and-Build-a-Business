<?php
  require_once '../../core/init.php';
  include '../../includes/navigationHome.php';
  include '../../includes/navigation_sub_mastermind.php';
?>

<?php
  $sql = "SELECT * FROM mastermind";
  $featured = $db->query($sql);
  $count=mysqli_num_rows($featured);
   /*echo $count;*/
?>



<html>

<head>
<title>Mastermind</title>

<link href="http://localhost/menu/css/mainmenumastermind.css" rel="stylesheet" type="text/css" />
<link href="http://localhost/menu/css/buttons.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="css/stylecat.css">
  <link href="http://localhost/menu/css/banneradds.css" rel="stylesheet" type="text/css" />



<link rel="stylesheet" href="vendor/bootstrap-3.3.6-dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="vendor/bootstrap-3.3.6-dist/css/bootstrap-theme.min.css" />
<link rel="stylesheet" href="vendor/scroller/jquery.fs.scroller.css" />
<link rel="stylesheet" href="vendor/scroller/jquery.fs.selecter.css" />
<link rel="stylesheet" href="css/style.css" />
</head>
<div id="wrapper">
 
<hr>
  <?php
        include_once("../forum/connect.php");
        $sql = "SELECT * FROM mastermindcat ORDER BY category_title ASC";
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
    <hr>
</div>
<div class="services-section">
        <div class="container">
          <div class="row">           

        <?php 
                include_once("../forum/connect.php");
                $mastermind = "";

                $sql2 = "SELECT * FROM mastermind ORDER BY id DESC";
                $res2 = mysqli_query($db,$sql2) or die(mysqli_error($db));
                if(mysqli_num_rows($res2) > 0){
                 
                  $counter = 0;
                  while($row2 = mysqli_fetch_assoc($res2)){
                     $cid = $row2['category_id'];
                     $tid = $row2['id'];
                     $title = $row2['mastermind_title'];
                     $image = $row2['image'];
                     $description = $row2['mastermind_description'];                             
              $mastermind .= "
                <div class='col-xs-12 col-sm-6 col-md-4 col-lg-3'>
                  <div class='service-item'>
                    <a href='view_course.php?cid=".$cid."&tid=".$tid."'>
                        <img src=".$image." alt=".$title.">
                    </a>
                    <h4>".$title."</h4>
                    <hr>
                    <p class='description'>".$description."</p>
                    <hr>
                </div>

            </div>";         
            }
        echo $mastermind; 
}
    ?> 
      
           
            
            </div>
          </div> 
        </div>
  <nav class="nav-abovefooter">
      <center>
      <div class="gridnew">
          <div class="modulenew">
                  <img src="../../pages/about/forbes.png">        
          </div>
          <div class="modulenew">
                  <img src="../../pages/about/yes.png">       
          </div>
          <div class="modulenew">
                  <img src="../../pages/about/fox.png">       
          </div>
          <div class="modulenew">
                  <img src="../../pages/about/yahoo.png">       
          </div>
          <div class="modulenew">  
                  <img src="../../pages/about/cnn.png">       
          </div>
      </div>
      </center>
  </nav>
        <!--------FOOTER-------->
<?php

  include '../../includes/footer2.php';

?>