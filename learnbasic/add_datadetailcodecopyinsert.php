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

    echo '<pre>'; print_r($_POST); echo '</pre>';

    if (isset($_POST['CheckData'])) {
        $codemunu_id = $_POST['codemunu_id'];
        $course_user_id = $_POST['course_user_id'];
        $framework_codeid = $_POST['framework_codeid'];
        $m_detail_subject = $_POST['m_detail_subject'];
        //$framework_codetype = $_POST['framework_codetype'];
        $m_detail_name = $_POST['m_detail_name'];
        $m_detaIL_textcode = $_POST['m_detaIL_textcode'];
        $DetaillastUpdate = date('Y-m-d H:i:s');
        $sqlDetailCodecopy = "INSERT INTO `detail_code` (`codemunu_id`,`course_user_id`,`framework_codeid`,`m_detail_subject`,`m_detail_name`,`m_detaIL_textcode`,`m_detail_lastupdate`)
                       VALUES ('".$codemunu_id."','".$course_user_id."','".$framework_codeid."','".$m_detail_subject."','".$m_detail_name."','".$m_detaIL_textcode."','".$DetaillastUpdate."') ";
        //echo 'sqlDetailCodecopy <br> '.$sqlDetailCodecopy.'<br>';                    
        $result_DetailCodecopy = mysqli_query($newcon,$sqlDetailCodecopy)or die(mysqli_error($newcon));
        if ($result_DetailCodecopy) {
            echo "<script>alert('เพิ่มข้อมูลสำเร็จ');window.location='add_detail_copycode.php';</script>";
        }
        else {
            echo "<script>alert('เพิ่มข้อมูลไม่สำเร็จ เกิดข้อผิดพลาด');window.location='index.php';</script>";
        }
    }

?>

</body>
</html>