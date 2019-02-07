

<?php
	require_once '../../core/init.php';
	include '../../includes/navigationHome.php';
 session_start();
	
	$sql = "SELECT * FROM blog WHERE home = 2";
	$featured = $db->query($sql);
?>
<html>

<head>
<title> Secret Entourage </title>

<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">


<link href="http://localhost/menu/css/style.css" rel="stylesheet" type="text/css" />
<link href="http://localhost/menu/css/styleslider.css" rel="stylesheet" type="text/css" />
<link href="http://localhost/menu/css/socialmediaadds.css" rel="stylesheet" type="text/css" />
<link href="http://localhost/menu/css/banneradds.css" rel="stylesheet" type="text/css" />
<link href="http://localhost/menu/css/interviews.css" rel="stylesheet" type="text/css" />
<link href="http://localhost/menu/css/buttons.css" rel="stylesheet" type="text/css" />
</head>

<body>

<!--------BELOW MENU-------->
<?php
  include '../../includes/register_bar.php';
?>
	<nav class="nav-aboveslider">
			<center><h1>Discover The World Of <br>Entrepreneurship</h1><center>
	</nav>	


	
<!--------SLIDER-------->

<div class="slideshow-container">
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>

    <img src="view8.png" style="width:100%">

			<div class="title">David Lee Secret To Success</div>

    <div class="text">Hing Wa Lee Group - One of the largest luxury watch retailers in the US</div>
		<!--------BUTTON-------->
    <nav class="nav-button">
		<center>
			<a href="http://localhost/menu/pages/blog/blog_view.php?cid=1&tid=5" target="_blank">
        <button class="button8 button9">Read More</button>
      </a>
		</center>
    </nav>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="view9.png" style="width:100%">
	 <div class="title">How Do You Make Money Online</div>
    <div class="text">Gain Access To Weekly World Entrepreneurs and their stories to success.</div>
			<!--------BUTTON-------->
      <nav class="nav-button">
		<center>
      <a href="http://localhost/menu/pages/blog/blog_view.php?cid=2&tid=2" target="_blank">
			   <button class="button8 button9">Read More</button>
      </a>
		</center>
</nav>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="view13.png" style="width:100%">
	 <div class="title">Staying On Track With Your Health</div>

    <div class="text">Health - One of the Keys To Your Entrepreneurial Success</div>
			<!--------BUTTON-------->
      <nav class="nav-button">
	 		<center>
        <a href="http://localhost/menu/pages/blog/blog_view.php?cid=4&tid=6" target="_blank">
			     <button class="button8 button9">Read More</button>
        </a>
		</center>
</nav>
  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<div class="nav-button" style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>



	
<!--------BELOW SLIDER-------->
	<nav class="nav-belowslider">

		<center>
<div class="grid">
    <div class="module">  
      			<img src="facebook.png">
				<h1>300 FB Fans</h1>
    </div>
    <div class="module">
      			<img src="icon.png">
				<h1>2500 Members</h1>
    </div>
    <div class="module">
      			<img src="youtube.png">
				<h1>200+ Videos</h1>
    </div>
    <div class="module">
      			<img src="ig.png">
				<h1>20K Followers</h1>
    </div>
</div>
</center>
	


	</nav>

<nav class="nav-blog">

    <div class="container">
  <table class="rwd-table">
    <tbody>

      <tr>
          <?php 
              $counter = 0;
              while($blog = mysqli_fetch_assoc($featured)){
                if($counter % 3 == 0){
                    echo '</tr><tr>';
                }
                ++$counter;
           ?>
                <td>
      <center><h3><?= $blog['title']; ?></h3></center>
      <hr></hr>
        <center>
        <a href="#" target="_blank">
          <img src="<?= $blog['image']; ?>" alt="<?= $blog['title']; ?>" height="170" width= "255px">
        </a></span>
        </center>
        <br>    
                      <!--------TEXT BOX 3-------->
    <center><div id="element1"></div>
      <div id="content1"> 
        <p class="description" align="left"><?= substr(iconv(mb_detect_encoding($blog['excerpt'], mb_detect_order(), true), "UTF-8", $blog['excerpt']),0,351); ?></p> 
      </div></center>
                    
    <!--------BUTTON READ MORE-------->
    <br><br>
      <center>
      <a href="<?php echo $blog['href']?>" target="_blank">
      <button class="button8 button9">Read More</button>
      </a>
    </center><br><br>
                </td>
                <?php
            }
        ?>
      </tr>
    </tbody>
  </table>
</div>  

</nav>

	
	<!--------ABOVE FOOTER BANNER-------->
	<nav class="nav-abovefooter">

			<center>
<div class="gridnew">
    <div class="modulenew">
      			<img src="forbes.png">				
    </div>
    <div class="modulenew">
      			<img src="yes.png">				
    </div>
    <div class="modulenew">
      			<img src="fox.png">				
    </div>
    <div class="modulenew">
      			<img src="yahoo.png">				
    </div>
    <div class="modulenew">  
      			<img src="cnn.png">				
    </div>
</div>
</center>

	</nav>



<!--------FOOTER-------->
<?php

	include '../../includes/footer2.php';

?>

<!--------SLIDER ANIMATION-------->
<script type="text/javascript">
var slideIndex = 1;
showSlides(slideIndex)
setInterval(function(){ showSlides(++slideIndex); }, 5000);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}
</script>
</body>
</html>