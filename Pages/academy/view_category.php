<?php
    require_once '../../core/init.php';
   include '../../includes/navigationHome.php';
    include '../../includes/navigation_sub.php';
   ?>
<!DOCTYPE html>
<html>
    <head>
      <title>View Interview Category</title>
        <link href="http://localhost/menu/css/mainmenu.css" rel="stylesheet" type="text/css" />
        <link href="http://localhost/menu/css/mainmenu2.css" rel="stylesheet" type="text/css" />
        <link href="http://localhost/menu/css/buttons.css" rel="stylesheet" type="text/css" />
        <link href="http://localhost/menu/css/academy.css" rel="stylesheet" type="text/css" />
        <link href="http://localhost/menu/css/interviews.css" rel="stylesheet" type="text/css" />
    </head>
<body>
<br><br><br><hr>

<?php
    include_once("../../includes/dropdown.php");
?>
<div id="wrapper">
<br>
    <div id="content">  
    </div>
        <?php   
            $interviews = "";
            $cid = $_GET['cid'];
            $sql = "SELECT id FROM interviewscat WHERE id='".$cid."' LIMIT 1";
            $res = mysqli_query($db,$sql) or die(mysqli_error($db));
            if(mysqli_num_rows($res) == 1){
                $sql2 = "SELECT * FROM interviews WHERE categories='".$cid."'ORDER BY id DESC";
                $res2 = mysqli_query($db,$sql2) or die(mysqli_error($db));
                if(mysqli_num_rows($res2) > 0){
                   
                    ?>

              <div class='container'>
                    <table class='rwd-table'>
                        <tbody>
                        <br><br>
                        <tr>
                            <?php
                                $counter = 0;
                                while($row = mysqli_fetch_assoc($res2)){
                                    if($counter % 3 == 0){
                                       $interviews .= "</tr><tr>";
                                    }
                                ++$counter;
                                    $tid = $row['id'];
                                    $title = $row['title'];
                                    $image = $row['image'];
                                    $href = $row['href'];
                                    $description = $row['description'];
                                $interviews .= 
                                    "    
                                    <td>

                                    <div id='element1'></div>
                                     <div id='content1'>
                                        <img src=".$image." alt=".$title.">
                                        <h3>".$title."</h3>
                                        <hr>
                                        <h4>".$description."</h4>
                                    
                                        <!--------BUTTON READ MORE-------->
                                        <div id='hovers'>
                                          <a href='view_interview.php?cid=".$cid."&tid=".$tid."' class='button' target='_blank'>
                                            <span class='contentbut'> Read More</span>
                                          </a>
                                        </div>";
                                }     
                                $interviews .= "</td>";
                                $interviews .= "</tr>";
                                $interviews .= "</tbody>";
                                $interviews .= "</table>";
                                $interviews .= "</div>";
                                echo $interviews;
                            }else{
                                echo "<a href='academy.php'><input type='submit' name='academy' value='Return To Other Interviews'/></a><hr>";
                                echo "<h2>There are no interviews in this category yet.</h2>";
                            }
                        }else{
                            echo "<a href='academy.php'><input type='submit' name='academy' value='Return To Other Interviews'/></a><hr>";
                            echo "<p>You are trying to view a category that does not exist yet.";
                        }
                    ?>  
                </div>
            </div>
<br>
<?php
    include '../../../menu/includes/footer2.php';
?>
</body>
</html>