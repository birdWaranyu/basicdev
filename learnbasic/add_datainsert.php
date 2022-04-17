<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Insert CodeMenu</title>
    <style type="text/css">
        .cls_header { padding: 10px 12px; }
        .cls_content { padding: 6px 10px; }
        .cls_centerright { text-align: right; margin-right: 18%; }
        .cls_text_linknone { text-decoration: none; }
    </style>
</head>
<body>

<?php

include 'connect/connection.php';

if (isset($_POST['CheckData'])) {
    //echo '<pre>'; print_r($_POST); echo '</pre>';
    $CodemunuName = $_POST['codemunu_name'];
    $StatusCode = $_POST['status_m_code'];
    $lastUpdate = date('Y-m-d H:i:s');
    //$CodetypeFrame = $_POST['codetype_frame'];
    // ,`codetype_frame`
    // '".$CodetypeFrame."',
    $sqlinsert = "INSERT INTO `menu_code` (`codemunu_name`,`codemunu_last_update`,`status_m_code`)
                VALUES ('".$CodemunuName."','".$lastUpdate."','".$StatusCode."')";
    //echo $sqlinsert;
    $resultmenucode = mysqli_query($newcon,$sqlinsert)or die(mysqli_error($newcon));
    if ($resultmenucode) {
        echo "<script>alert('เพิ่มข้อมูลสำเร็จ');window.location='add_datacode.php';</script>";
    }
    else {
        echo "<script>alert('เพิ่มข้อมูลไม่สำเร็จ เกิดข้อผิดพลาด');window.location='index.php';</script>";    
    }
}


?>

</body>
</html>