<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Insert CodeFramework</title>
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
    $FrameworkCodename = $_POST['framework_codename'];
    $FrameworkCodedetail = $_POST['framework_codedetail'];
    $FrameworkCodetype = $_POST['framework_codetype'];
    $lastUpdate = date('Y-m-d H:i:s');
    $sqlinsert = "INSERT INTO `tr_frameworkcode` (`framework_codename`,`framework_codedetail`,`framework_codetype`,`framework_lastupdate`)
                VALUES ('".$FrameworkCodename."','".$FrameworkCodedetail."','".$FrameworkCodetype."','".$lastUpdate."')";
    //echo $sqlinsert;
    $resultframework = mysqli_query($newcon,$sqlinsert)or die(mysqli_error($newcon));
    if ($resultframework) {
        echo "<script>alert('เพิ่มข้อมูลสำเร็จ');window.location='add_codeframework.php';</script>";
    }
    else {
        echo "<script>alert('เพิ่มข้อมูลไม่สำเร็จ เกิดข้อผิดพลาด');window.location='index.php';</script>";    
    }
}


?>

</body>
</html>