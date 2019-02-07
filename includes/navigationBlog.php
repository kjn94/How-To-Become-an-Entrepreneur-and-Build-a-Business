<?php
	$sqlMain = "SELECT * FROM mainmenu WHERE parent = 0";
	$pqueryMain = $db->query($sqlMain);
?>

<?php
	$sql = "SELECT * FROM blogcategories WHERE parent = 0";
	$pquery = $db->query($sql);
?>

  <?php
        include_once("../forum/connect.php");
        $sql = "SELECT * FROM blogcategories ORDER BY category ASC";
        $res = mysqli_query($db,$sql) or die(mysqli_error($db));
        $categories = "";
        if(mysqli_num_rows($res) > 0){
            while($row = mysqli_fetch_assoc($res)){
              $id = $row['id'];
              $title = $row['category'];
              $categories .= "<a href='blog_category.php?cid=".$id."'>".$title." <font size='-1'></font></a>";
            }
        }else{
          echo "<p> There are no categories available yet.</p>";
        }
    ?>

<!--------MAIN MENU-------->
<nav>
  <label for='show-menu' class='show-menu'>Show Menu</label>
  <input type="checkbox" id='show-menu' role='button'>

  <ul id='menu'>
  <div class="logoNew"></div>
  		<?php while($parentMain = mysqli_fetch_assoc($pqueryMain)) : ?>

  			<li>
  				<a href="<?php echo $parentMain['href']?>"><?php echo $parentMain['menu']?>
  				</a>
  			</li>

  			
  		<?php endwhile; ?>
  	
  <li class="a"><a href="https://www.instagram.com" class="a"><div class="ig"></div></a></li>
  <li class="a"><a href="https://www.facebook.com" class="a"><div class="facebook"></div></a></li>
  <li class="a"><a href="https://www.youtube.com" class="a"><div class="youtube"></div></a></li>
  <li class="a"><a href="https://twitter.com" class="a"><div class="twitter"></div></a></li>
  	
  </ul>
  	
</nav>

<?php
  session_start();
  include '../../includes/register_bar.php';
?>
	<!--------BANNER-------->

	<nav class="nav-blog">
			<center><h1>Discover The Word Of <br>Entrepreneurship</h1><center>
	</nav>	

<div>
<ul class="nav">
  <li class="button-dropdown"> 
      <?php echo $categories; ?> 
  </li> 
</ul>
</div>
	<br><br>