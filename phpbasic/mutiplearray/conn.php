
<?php  

$conn = mysqli_connect("localhost","root","Con2DB","devbanban")or die("connect Error".mysqli_error($conn));
$result = mysqli_query($conn, "SET NAMES 'ut8' ");

?>
