<?php  

$host = "localhost";
$username = "root";
$password = "Con2DB";
$db = "basiccode";

$newcon = mysqli_connect($host,$username,$password,$db)or die(mysqli_error());
mysqli_set_charset($newcon,"utf8");

// if ($newcon)
// {
// 	echo 'true connect';
// }
// else
// {
// 	echo 'false connect';
// }

?>