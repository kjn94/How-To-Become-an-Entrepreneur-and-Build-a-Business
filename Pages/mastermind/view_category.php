<?php
    require_once '../../core/init.php';
    include '../../includes/navigationHome.php';
    include '../../includes/navigation_sub_mastermind.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Mastermind Category</title>

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
<body>
    <?php   
            include_once("../forum/connect.php");
            $topics = "";
            $cid = $_GET['cid'];
            $sql = "SELECT id FROM mastermindcat WHERE id='".$cid."' LIMIT 1";
            $res = mysqli_query($db,$sql) or die(mysqli_error($db));
            if(mysqli_num_rows($res) == 1){
                $sql2 = "SELECT * FROM mastermind WHERE category_id='".$cid."' ORDER BY id DESC";
                $res2 = mysqli_query($db,$sql2) or die(mysqli_error($db));
                if(mysqli_num_rows($res2) > 0){
    ?>

<div class="services-section">
        <div class="container">
          <div class="row">   
              <?php                 
                    while($row = mysqli_fetch_assoc($res2)){

                        $tid = $row['id'];
                        $title = $row['mastermind_title'];
                        $image = $row['image'];
                        $description = $row['mastermind_description'];

                        $topics .= 
                        "    
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
                        </div>
                        " ;
                    }
                    echo $topics;
                }else{
                    echo "<br>";
                    echo "<a href='mastermind.php'>Return to Courses</a><hr>";
                    echo "<p>There are no courses in this category yet.</p>";
                }
            }else{
                echo "<a href='mastermind.php'>Return to Courses</a><hr>";
                echo "<p>You are trying to view a category that does not exist yet.";
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
</body>
</html>