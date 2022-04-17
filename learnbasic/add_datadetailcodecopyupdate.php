<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Data</title>
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

    echo '<pre>'; print_r($_POST); echo '</pre>';

    if (isset($_POST['CheckDataEdit'])) { 
        $MDetailId_edit = $_POST['m_detail_id'];
        $MCodemunuId_edit = $_POST['codemunu_id'];
        $MCourseUserId_edit = $_POST['course_user_id'];
        $FrameworkCodeId_edit = $_POST['framework_codeid'];
        $MDetailSubject = $_POST['m_detail_subject'];
        $MDetailName = $_POST['m_detail_name'];
        $MDetaILTextcode = $_POST['m_detaIL_textcode'];
        $CodemunulastUpdate = date('Y-m-d H:i:s');
        $sql_updateDetailCodeCopy = "UPDATE detail_code SET codemunu_id = '".$MCodemunuId_edit."' 
                                , course_user_id = '".$MCourseUserId_edit."' , framework_codeid = '".$FrameworkCodeId_edit."'
                                , m_detail_subject = '".$MDetailSubject."'
                                , m_detail_name = '".$MDetailName."' , m_detaIL_textcode = '".$MDetaILTextcode."'
                                , m_detail_lastupdate = '".$CodemunulastUpdate."'
                                WHERE m_detail_id = '".$MDetailId_edit."'; ";
        //echo 'sql_updateDetailCodeCopy <br> '.$sql_updateDetailCodeCopy.'<br>';                     
        $result_updateDetailCodeCopy = mysqli_query($newcon,$sql_updateDetailCodeCopy)or die(mysqli_error($newcon));
        if ($result_updateDetailCodeCopy) {
            echo "<script>alert('อัพเดทข้อมูลสำเร็จ');window.location='add_detail_copycode.php';</script>";
        }
        else {
            echo "<script>alert('อัทเดทข้อมูลไม่สำเร็จ เกิดข้อผิดพลาด');window.location='index.php';</script>";
        }
    }

?>

</body>
</html>