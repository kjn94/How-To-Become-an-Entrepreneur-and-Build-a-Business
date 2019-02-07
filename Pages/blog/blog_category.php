<?php
	require_once '../../core/init.php';
	include '../../includes/navigationBlog.php';
	
	$sql = "SELECT * FROM blog WHERE featured = 1 ORDER BY id DESC";
	$featured = $db->query($sql);
?>




<html>

<head>
<title> Secret Entourage </title>
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
<link href="http://localhost/menu/css/mainmenu.css" rel="stylesheet" type="text/css" />
<link href="http://localhost/menu/css/sidebar.css" rel="stylesheet" type="text/css" />
<link href="http://localhost/menu/css/blog.css" rel="stylesheet" type="text/css" />
<link href="http://localhost/menu/css/dropdownnew.css" rel="stylesheet" type="text/css" />
<link href="http://localhost/menu/css/footer.css" rel="stylesheet" type="text/css" />
<link href="http://localhost/menu/css/buttons.css" rel="stylesheet" type="text/css" />
</head>

<body>
        <?php   
            include_once("../forum/connect.php");
            $blogs = "";
            $cid = $_GET['cid'];



            $sql = "SELECT id FROM blogcategories WHERE id='".$cid."' LIMIT 1";
            $res = mysqli_query($db,$sql) or die(mysqli_error($db));
            if(mysqli_num_rows($res) == 1){
                $sql2 = "SELECT * FROM blog WHERE blogcategories='".$cid."' ORDER BY id DESC";
                $res2 = mysqli_query($db,$sql2) or die(mysqli_error($db));
                if(mysqli_num_rows($res2) > 0){
?>

<!--------BLOG SECTION-------->

<div class="header">

</div>
<div class="main">
	<div class="content">
		<div class="wrapper">
			<div class="main-content">
				
              <?php                    
                    while($row = mysqli_fetch_assoc($res2)){

                        $tid = $row['id'];
                        $title = $row['title'];
                        $image = $row['image'];
                       $excerpt = substr(iconv(mb_detect_encoding($row['excerpt'], mb_detect_order(), true), "UTF-8", $row['excerpt']),0,250);

                    $blogs .= 
                        "

					<hr>
					<h1>".$title."</h1>   
                    <img src=".$image." alt=".$title.">
                    <p class='description'>".$excerpt."</p>

 		<!--------BUTTON READ MORE-------->

		<div id='hovers'>
			<a href='blog_view.php?cid=".$cid."&tid=".$tid."' class='button' target='_blank'>
				<span class='contentbut'> Read More</span>
			</a>
		</div>
				" ;

                    }
                    echo $blogs;
                }else{
                    echo "<br>";
                    echo "<a href='blog.php'>Return to Blogs</a><hr>";
                    echo "<p>There are no blogs in this category yet.</p>";
                }
            }else{
                echo "<a href='blog.php'>Return to Blogs</a><hr>";
                echo "<p>You are trying to view a category that does not exist yet.";
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

	include '../../includes/footer2.php';

?>


</body>
</html>