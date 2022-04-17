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
    echo '<pre>'; print_r($_POST); echo '</pre>';
    $CourseName = $_POST['course_name'];
    $CourseDetail = $_POST['course_detail'];
    $lastUpdate = date('Y-m-d H:i:s');
    $sqlchanneluser = "INSERT INTO `ma_user_course` (`course_name`,`course_detail`,`course_lastupdate`)
                       VALUES ('".$CourseName."','".$CourseDetail."','".$lastUpdate."') ";
    //echo 'sqlchanneluser <br> '.$sqlchanneluser.'<br>';
    $resulchanneluser = mysqli_query($newcon,$sqlchanneluser)or die(mysqli_error($newcon));
    if ($resulchanneluser) {
        echo "<script>alert('เพิ่มข้อมูลสำเร็จ');window.location='add_channel_user.php';</script>";
    }
    else {
        echo "<script>alert('เพิ่มข้อมูลไม่สำเร็จ เกิดข้อผิดพลาด');window.location='index.php';</script>";    
    }
}


?>

</body>
</html>