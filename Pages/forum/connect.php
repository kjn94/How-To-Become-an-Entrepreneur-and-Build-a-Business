<?php
$host = "localhost";
$username = "root";
$password = "root";
$dbe = "tutorial";

mysqli_connect($host, $username, $password, $dbe) or die(mysqli_error($dbe));
?>