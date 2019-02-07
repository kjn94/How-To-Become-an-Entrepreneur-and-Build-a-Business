<?php
  require_once '../../core/init.php';

    session_start();
    if($_SESSION['uid']){
        if(isset($_POST['reply_submit'])){
            $applicant = $_SESSION['uid'];
            $cid = $_POST['cid'];
            $tid = $_POST['tid'];
            $sql = "INSERT INTO courses (category_id, topic_id, applicant) VALUES ('".$cid."', '".$tid."', '".$applicant."')";
            $res = mysqli_query($db,$sql) or die(mysqli_error($db));
            if (($res)) {
                header("Location: success.php");              
            }else{
                echo "<p>There was a problem in your application. </p>";
                echo "<a href='mastermind.php'>
                    <input type='submit' value='View Other Courses'/></a>
                    </a>";
            }
        }else{
            exit();
        }
    }else{
        exit();
    }
?>