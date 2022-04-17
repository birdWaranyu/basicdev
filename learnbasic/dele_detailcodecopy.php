<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Delete Data</title>
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

    if (isset($_GET['IDDetailDele'])) {
        $IDDetailCode = $_GET['IDDetailDele'];
        echo 'IDDetailCode '.$IDDetailCode.'<br>';
        $sql_deleDetailCodeCopy = "DELETE FROM detail_code WHERE m_detail_id = '".$IDDetailCode."'; ";
        //echo 'sql_deleDetailCodeCopy <br> '.$sql_deleDetailCodeCopy.'<br>';
        $result_deleDetailcodecopy = mysqli_query($newcon,$sql_deleDetailCodeCopy)or die(mysqli_error($newcon));
        if ($result_deleDetailcodecopy) {
            echo "<script>alert('ลบข้อมูลสำเร็จ');window.location='add_detail_copycode.php';</script>";
        }
        else {
            echo "<script>alert('ลบข้อมูลไม่สำเร็จ เกิดข้อผิดพลาด');window.location='index.php';</script>";
        }
    }

?>

</body>
</html>