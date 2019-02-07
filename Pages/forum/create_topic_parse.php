<?php
    require_once '../../core/init.php';
    session_start();
    if ($_SESSION['uid'] == "") {
        header("Location: index.php");
        exit();
    }

    if(isset($_POST['topic_submit'])){
        if(($_POST['topic_title'] == "") && ($_POST['topic_content'])){
            echo "You did not fill in both fields. Return to the previous page.";
            exit();
        }
        else{
            include_once("connect.php");
            $mysql = new mysqli("localhost", "root", "root", "tutorial");
            $cid = $_POST['cid'];
            $title = $db->real_escape_string($_POST['topic_title']);
            $content = $db->real_escape_string($_POST['topic_content']);
            $creator = $_SESSION['uid'];
            $sql = "INSERT INTO topics (category_id, topic_title, topic_creator, topic_date, topic_reply_date) VALUES ('".$cid."','".$title."', '".$creator."', now(), now())";
            $res = mysqli_query($db,$sql) or die(mysqli_error($db));
            $new_topic_id = mysqli_insert_id($db);


            $sql2 = "INSERT INTO posts (category_id, topic_id, post_creator, post_content, post_date) VALUES ('".$cid."', '".$new_topic_id."', '".$creator."', '".$content."', now())";
            $res2 = mysqli_query($db,$sql2) or die(mysqli_error($db));

            $sql3 = "UPDATE categories SET last_post_date=now(), last_user_posted='".$creator."' WHERE id='".$cid."' LIMIT 1";
            $res3 = mysqli_query($db,$sql3) or die(mysqli_error($db));

            if (($res) && ($res2) && ($res3)) {
                header("Location: view_topic.php?cid=".$cid."&tid=".$new_topic_id);
            }else{
                echo "There was a problem creating your topic. Try again.";
            }
        }
    }
?>