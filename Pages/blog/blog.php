<?php
	require_once '../../core/init.php';
	include '../../includes/navigationBlog.php';
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

<div class="header">
</div>
<div class="main">
	<div class="content">
		<div class="wrapper">
			<div class="main-content">

		        <?php 
		        $blogs = "";

		                $sql2 = "SELECT * FROM blog ORDER BY id DESC";
		                $res2 = mysqli_query($db,$sql2) or die(mysqli_error($db));
		                if(mysqli_num_rows($res2) > 0){
		                 
		                  while($row2 = mysqli_fetch_assoc($res2)){
                           	 $cid = $row2['blogcategories'];
		                     $tid = $row2['id'];
		                     $title = $row2['title'];
		                     $image = $row2['image'];
                       $excerpt = substr(iconv(mb_detect_encoding($row2['excerpt'], mb_detect_order(), true), "UTF-8", $row2['excerpt']),0,250);

				             $blogs .= "
				                	<hr>
									<h1>".$title."</h1>   
				                    <img src=".$image." alt=".$title.">
				                    <p class='description'>".$excerpt."</p>
									<div id='hovers'>
										<a href='blog_view.php?cid=".$cid."&tid=".$tid."' class='button' target='_blank'>
											<span class='contentbut'> Read More</span>
										</a>
									</div>";         
		            }
			echo $blogs;
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
<?php
	include '../../includes/footer2.php';
?>

</body>
</html>