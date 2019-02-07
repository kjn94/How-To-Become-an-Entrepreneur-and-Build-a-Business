<?php
	
	require_once '../../core/init.php';
	include '../../includes/navigationHome.php';
	
	$sql = "SELECT * FROM interviews WHERE featured = 1";
	$featured = $db->query($sql);	
?>


<head>
<link href="http://localhost/menu/css/mainmenu.css" rel="stylesheet" type="text/css" />
<link href="http://localhost/menu/css/about.css" rel="stylesheet" type="text/css" />
<link href="http://localhost/old/text/text.css" rel="stylesheet" type="text/css" />
<link href="http://localhost/old/text/textadds.css" rel="stylesheet" type="text/css" />
<link href="http://localhost/old/text/footer.css" rel="stylesheet" type="text/css" />
<link href="http://localhost/menu/css/buttons.css" rel="stylesheet" type="text/css" />
</head>



	<!--------BELOW MENU VIDEO-------->
<?php
session_start();
  include '../../includes/register_bar.php';
?>
<body>
<br><br>

		
		<center><h1>The Interview is Not Yet Available</h1></center><br><hr><br>
		<center>
		<a href='academy.php'>
			<input type='submit' name='academy' value='Return To Other Interviews'/>
		</a>
		</center>
</body>
<?php

	include '../../includes/footer2.php';

?>
