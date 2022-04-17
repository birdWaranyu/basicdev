<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Delete Data Channel user</title>
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

    if (isset($_GET['IDDelCUser'])) {
        $IDCUser = $_GET['IDDelCUser'];
        echo 'IDCUser '.$IDCUser.'<br>';
        $sql_delechanneluser = "DELETE FROM ma_user_course WHERE course_user_id = '".$IDCUser."'; ";
        echo 'sql_delechanneluser <br> '.$sql_delechanneluser.'<br>';
        $result_channeluser = mysqli_query($newcon,$sql_delechanneluser)or die(mysqli_error($newcon));
        if ($result_channeluser) {
            echo "<script>alert('ลบข้อมูลสำเร็จ');window.location='add_channel_user.php';</script>";
        }
        else {
            echo "<script>alert('ลบข้อมูลไม่สำเร็จ เกิดข้อผิดพลาด');window.location='index.php';</script>";
        }
    }

?>

</body>
</html>