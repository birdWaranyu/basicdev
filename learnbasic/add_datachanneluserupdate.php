<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Data Channel User</title>
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
        $CourseName_edit = $_POST['course_name'];
        $CourseDetail_edit = $_POST['course_detail'];
        $CourseUserId_edit = $_POST['course_user_id'];
        $CourselastUpdate = date('Y-m-d H:i:s');
        $sql_updatechanneluser = "UPDATE ma_user_course SET course_name = '".$CourseName_edit."' 
                                , course_detail = '".$CourseDetail_edit."' , course_lastupdate = '".$CourselastUpdate."'
                                WHERE course_user_id = '".$CourseUserId_edit."'; ";
        //echo 'sql_updatechanneluser <br> '.$sql_updatechanneluser.'<br>';                     
        $result_channeluser = mysqli_query($newcon,$sql_updatechanneluser)or die(mysqli_error($newcon));
        if ($result_channeluser) {
            echo "<script>alert('อัพเดทข้อมูลสำเร็จ');window.location='add_channel_user.php';</script>";
        }
        else {
            echo "<script>alert('อัทเดทข้อมูลไม่สำเร็จ เกิดข้อผิดพลาด');window.location='index.php';</script>";
        }
    }

?>

</body>
</html>