<?php  
 $connect = mysqli_connect("localhost", "root", "Con2DB", "wesslesson");
 $id_emp = $_POST["employee_id"];  
 $sql = "DELETE FROM tbl_employee WHERE id = '".$id_emp."'"; 
 //echo $sql;
 $result = mysqli_query($connect, $sql);
 if ($result) {
    echo "Delete Success";
 } else {
    echo "Delete Error";
 }
 ?>  