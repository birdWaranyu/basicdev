<?php 

$connect = mysqli_connect("localhost", "root", "Con2DB", "wesslesson");
$Id = $_POST['id'];
$Name = $_POST['name'];
$Message = $_POST['message'];
echo $Id;
echo $Name;
echo $Message;
// $sql = "UPDATE tbl_sample SET ".$column_name."='".$text."' WHERE id='".$id."'";  
// if(mysqli_query($connect, $sql))  
// {  
// 	echo 'Data Updated';  
// } 

?>