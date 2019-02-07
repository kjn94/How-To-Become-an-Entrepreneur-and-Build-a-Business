<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<?php
	$sqlMain = "SELECT * FROM mainmenu WHERE parent = 0";
	$pqueryMain = $db->query($sqlMain);
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
	
			<li class="a">
				<a href="https://www.instagram.com" class="a">
					<div class="ig"></div>
				</a>
			</li>
			<li class="a">
				<a href="https://www.facebook.com" class="a">
					<div class="facebook"></div>
				</a>
			</li>
			<li class="a">	
				<a href="https://www.youtube.com" class="a">
					<div class="youtube"></div>
				</a>
			</li>
			<li class="a">	
				<a href="https://twitter.com" class="a">
					<div class="twitter"></div>
				</a>
			</li>			
	</ul>	
</nav>



	
	

	