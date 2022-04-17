<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Data</title>
    <style type="text/css">
        .cls_header { padding: 10px 12px; }
        .cls_content { padding: 6px 10px; }
        .cls_center { text-align: center; }
        .cls_centerright { text-align: right; margin-right: 18%; }
        .cls_text_linknone { text-decoration: none; }
    </style>
</head>
<body>

<?php

    include 'connect/connection.php';

    if (isset($_GET['IDDelFrmC'])) {
        $IDFramC = $_GET['IDDelFrmC'];
        echo 'IDFramC '.$IDFramC.'<br>';
        $sql_deleframeworkcode = "DELETE FROM tr_frameworkcode WHERE framework_codeid = '".$IDFramC."'; ";
        //echo 'sql_deleframeworkcode <br> '.$sql_deleframeworkcode.'<br>';
        $result_deleframeworkcode = mysqli_query($newcon,$sql_deleframeworkcode)or die(mysqli_error($newcon));
        if ($result_deleframeworkcode) {
            echo "<script>alert('ลบข้อมูลสำเร็จ');window.location='add_codeframework.php';</script>";
        }
        else {
            echo "<script>alert('ลบข้อมูลไม่สำเร็จ เกิดข้อผิดพลาด');window.location='index.php';</script>";
        }
    }

?>

</body>
</html>