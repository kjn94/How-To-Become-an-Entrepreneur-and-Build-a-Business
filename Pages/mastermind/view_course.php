<?php
    require_once '../../core/init.php';
    include '../../includes/navigationHome.php';
    include '../../includes/navigation_sub_mastermind.php'; 
?>

<!DOCTYPE html>
<html>
    <head>
        <title>View Course</title>
        <link href="http://localhost/menu/css/mainmenumastermind.css" rel="stylesheet" type="text/css" />
        <link href="http://localhost/menu/css/buttons.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="css/stylecat.css">
        <link href="http://localhost/old/text/textadds.css" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="vendor/bootstrap-3.3.6-dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="vendor/bootstrap-3.3.6-dist/css/bootstrap-theme.min.css" />
        <link rel="stylesheet" href="vendor/scroller/jquery.fs.scroller.css" />
        <link rel="stylesheet" href="vendor/scroller/jquery.fs.selecter.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="style2.css">
    </head>
<body>

<div id="wrapper">
<hr>
        <?php
            include_once("../forum/connect.php");
            $row2='';
            $cid = $_GET['cid'];
            $tid = $_GET['tid'];

            $sql = "SELECT * FROM mastermind WHERE category_id='".$cid."' AND id='".$tid."' LIMIT 1";
            $res = mysqli_query($db,$sql) or die(mysqli_error());
         
            $cid = $_GET['cid'];
            $tid = $_GET['tid'];
            if(isset($_SESSION['uid'])){
            $sql5 = "SELECT * FROM courses WHERE category_id='".$cid."' AND topic_id='".$tid."' AND applicant='".$_SESSION['uid']."'";
            $res5 = mysqli_query($db,$sql5) or die(mysqli_error()); 
        }

        if( isset($_SESSION['uid']) && (mysqli_num_rows($res5) > 0)){
                echo "<h1>You have already applied for the course!</h1>";
            }

            if(mysqli_num_rows($res) == 1){             
                if(!isset($_SESSION['uid'])){
                     echo "<center><h2>Please log in to Apply for the Course</h2></center><hr>";        
            }    
               if (isset($_SESSION['uid']) && (mysqli_num_rows($res5) == 0)){
                    echo "<center><input type='submit' value='Apply For The Course' onClick=\"window.location = 'apply.php?cid=".$cid."&tid=".$tid."'\"/><hr></center>";                              
                    }

          while ($row = mysqli_fetch_assoc($res)) {
                    $image = $row['image'];
                        echo "
                        <hr>
                        <h2>Title: ".$row['mastermind_title']."</h2> <hr> 
                        <h3>Description: ".$row['mastermind_description']."</h3> <br><hr><br>
                        <img src=".$image."><hr>";  
                }
            }
            else
            {
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