<?php
    session_start();

$userids = '';
$email = '';
    if($_SESSION['uid']){
        if(isset($_POST['reply_submit'])){
    require_once '../../core/init.php';

            $creator = $_SESSION['uid'];
            $cid = $_POST['cid'];
            $tid = $_POST['tid'];
            $reply_content = $db->real_escape_string($_POST['reply_content']);
            $sql = "INSERT INTO posts (category_id, topic_id, post_creator, post_content, post_date) VALUES ('".$cid."', '".$tid."', '".$creator."', '".$reply_content."', now())";
            $res = mysqli_query($db,$sql) or die(mysqli_error($db));

            $sql2 = "UPDATE categories SET last_post_date=now(), last_user_posted='".$creator."' WHERE id='".$cid."' LIMIT 1";
            $res2 = mysqli_query($db,$sql2) or die(mysqli_error($db));

            $sql3 = "UPDATE topics SET topic_reply_date=now(), topic_last_user='".$creator."' WHERE id='".$tid."' LIMIT 1";
            $res3 = mysqli_query($db,$sql3) or die(mysqli_error($db));

            if (($res) && ($res2) && ($res3)) {
                echo "<p>Your response has been successfully posted. <a href='view_topic.php?cid=".$cid."&tid=".$tid."'>Click here to return to the topic.</a></p>";
            }else{
                echo "<p>There was a problem posting your reply.</p>";
            }
        }else{
            exit();
        }
    }else{
        exit();
    }
?>