<?php
  require_once '../../core/init.php';
  include '../../includes/navigationHome.php';
  session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>View Interview</title>
    <link href="http://localhost/menu/css/mainmenu.css" rel="stylesheet" type="text/css" />
    <link href="http://localhost/menu/css/buttons.css" rel="stylesheet" type="text/css" />
    <link href="http://localhost/menu/css/academy.css" rel="stylesheet" type="text/css" />
  </head>
<body>
  <?php
    include '../../includes/register_bar.php';
  ?>

<div id="wrapper">
<hr>

   		<?php
   			$cid = $_GET['cid'];
   			$tid = $_GET['tid'];
   			$sql = "SELECT * FROM interviews WHERE categories='".$cid."' AND id='".$tid."' LIMIT 1";
   			$res = mysqli_query($db,$sql) or die(mysqli_error($db));
   			if(mysqli_num_rows($res) == 1){
   				
   				if(isset($_SESSION['uid'])){
   					echo "<center><input type='submit' value='Watch The Interview' onClick=\"window.location = 'interview.php'\"/><hr></center>";
   				}else{
   					echo "<center><h2 class='intro'>Please log in to Watch The Interview</h2></center><hr>";
   				}
   				while ($row = mysqli_fetch_assoc($res)) {
  
              $image = $row['image'];
              $about = $row['description'];
   						echo "<div style='min-height: 125px;'> 

                        <nav class='nav-belowmenu'>
                              <center><h1>Secret Academy Episode - ".$row['title']."</h1><center>
                        </nav>
                        <center>   
                            <div class='mainimage'>
                              <img src=".$image.">
                            </div>
                        </center><br>

                        <nav class='main'>
                          <center>
                            <h1>Company - ".$about."</h1>
                          </center>
                        </nav>
                    </div>";           	
   				}
   			}else{
   				echo "<p>This interview does not exist.</p>";
   			}
   		?> 
</div>
<?php
    include '../../../menu/includes/footer2.php';
?>
</body>
</html>