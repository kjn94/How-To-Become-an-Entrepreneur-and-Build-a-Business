<?php
    require_once '../../core/init.php';
   include '../../includes/navigationBlog.php';
        ?>


<!DOCTYPE html>
<html>
<head>
  <title>View Blog</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf8_unicode_ci" /><link href="http://localhost/menu/css/mainmenu.css" rel="stylesheet" type="text/css" />
<link href="http://localhost/menu/css/sidebar.css" rel="stylesheet" type="text/css" />
<link href="http://localhost/menu/css/blog.css" rel="stylesheet" type="text/css" />
<link href="http://localhost/menu/css/dropdownnew.css" rel="stylesheet" type="text/css" />
<link href="http://localhost/menu/css/footer.css" rel="stylesheet" type="text/css" />
<link href="http://localhost/menu/css/buttons.css" rel="stylesheet" type="text/css" />

</head>
<body>
<!--------BLOG SECTION-------->

<div class="header">

</div>
<div class="main">
    <div class="content">
        <div class="wrapper">
            <div class="main-content">


        <?php

            include_once("../forum/connect.php");

            $blogs = "";

            $row2='';
            $cid = $_GET['cid'];
            $tid = $_GET['tid'];

            $sql = "SELECT * FROM blog WHERE blogcategories='".$cid."' AND id='".$tid."' LIMIT 1";
            $res = mysqli_query($db,$sql) or die(mysqli_error($db));


            if(mysqli_num_rows($res) == 1){

                while ($row = mysqli_fetch_assoc($res)) {
                        $title = $row['title'];
                        $image = $row['image'];
                       $excerpt = iconv(mb_detect_encoding($row['excerpt'], mb_detect_order(), true), "UTF-8", $row['excerpt']);
                    $blogs .= "
                    <hr>
                    <h1>".$title."</h1>  
                    <div class='mainimage'>
                        <img src=".$image." alt=".$title.">
                    </div>

                    <p class='description'>".nl2br($excerpt)."</p>" ; 
                }
                echo $blogs;
            }
            else
            {
                echo "<p>This Blog does not exist.</p>";
            }
        ?> 
                </div>
            </div>
        <div class="sidebar">
        <br><br>
        <img src="../../images/blog/sidebar-tct.jpg"></img><br><br><br>
        <img src="../../images/blog/sidebar-snapchat.jpg"></img><br><br><br>
        <img src="../../images/blog/sidebar-ig.jpg"></img>
    </div>
    </div>
</div>

    <!--------FOOTER-------->
<?php

    include '../../../menu/includes/footer2.php';

?>
</body>
</html>