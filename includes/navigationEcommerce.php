<?php
	$sqlMain = "SELECT * FROM mainmenu WHERE parent = 0";
	$pqueryMain = $db->query($sqlMain);
?>

<?php
	$sql = "SELECT * FROM ecommercecategories WHERE parent = 0";
	$pquery = $db->query($sql);
?>

<!--------MAIN MENU-------->
<nav>
  <label for='show-menu' class='show-menu'>Show Menu</label>
  <input type="checkbox" id='show-menu' role='button'>

<ul id='menu'>
<div class="logoNew"></div>
		<?php while($parentMain = mysqli_fetch_assoc($pqueryMain)) : ?>

			<!-- MENU ITEMS -->
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
	<!--------BANNER-------->

	<nav class="nav-blog">
			<center><h1>Discover The Word Of <br>Entrepreneurship</h1><center>
	</nav>	
 <?php 
 session_start();
      include '../../includes/register_bar.php';
 ?>
	<!--------CATEGORIES BLOG-------->			
<div>
<ul class="nav">

		<?php while($parent = mysqli_fetch_assoc($pquery)) : ?>
				<?php
					$parent_id = $parent['id'];
					$sql2 = "SELECT * FROM categories WHERE parent = 1";
					$cquery = $db->query($sql2);
				?>	

  <li class="button-dropdown">
    <a href="<?php echo $parent['href']?>"">
      <?php echo $parent['category']?>
    </a>
   
  </li>
  <?php endwhile; ?>
</ul>
</div>




	