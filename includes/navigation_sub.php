<?php
	$sqlMain = "SELECT * FROM mainmenu WHERE parent = 0";
	$pqueryMain = $db->query($sqlMain);
?>

<?php
	$sql = "SELECT * FROM categories WHERE parent = 0";
	$pquery = $db->query($sql);
?>

<?php
	$sqlInterview = "SELECT * FROM interviews WHERE featured = 1";
	$featured = $db->query($sql);
?>

					<?php
						$sql = "SELECT * FROM interviews WHERE featured = 1";
						$featured = $db->query($sql);
						$count=mysqli_num_rows($featured);
					?>	

<!--------BELOW MENU-------->
<?php
session_start();
  include '../../includes/register_bar.php';
?>
	<nav class="nav-belowmenu">
		<h1>Video Library</h1>
	</nav>


	