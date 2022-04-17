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

    $IDCUser = $_GET['IDEditCUser'];
    echo 'IDCUser '.$IDCUser.'<br>';
    $sql_searchchanneluser = "SELECT * FROM ma_user_course WHERE course_user_id = '".$IDCUser."' ORDER BY course_user_id ASC; ";
    echo 'sql_searchchanneluser <br> '.$sql_searchchanneluser.'<br>';
    $result_searchchanneluser = mysqli_query($newcon,$sql_searchchanneluser)or die(mysqli_error($newcon));
    $row_searchchanneluser = mysqli_num_rows($result_searchchanneluser);
    $rs_searchchanneluser = mysqli_fetch_array($result_searchchanneluser);
    echo '<pre>'; print_r($rs_searchchanneluser); echo '</pre>';

    if ($row_searchchanneluser > 0) {
        echo '<br>';
        echo '<div class="cls_center"> แบบฟอร์มแก้ไขข้อมูล รายชื่อผู้ใช้สอนคลิปวิดีโอ </div>';
        echo '<br>';
        echo '<div class="cls_center">';
            echo '<form method="POST" action="add_datachanneluserupdate.php" name="formeditdata_user">';
                echo '<div> COURSENAME: ';
                    echo '<input type="text" name="course_name" required placeholder="กรอกข้อมูล" size="50" value="'.$rs_searchchanneluser['course_name'].'">'; 
                echo '</div>';
                echo '<br> ';
                echo '<div> COURSEDETAIL:'; 
                    echo '<textarea rows="5" cols="40" name="course_detail" placeholder="กรอกรายละเอียด" required>'.$rs_searchchanneluser['course_detail'].'</textarea>';
                echo '</div>';
                echo '<br>';
                    echo '<input type="hidden" name="course_user_id" value="'.$rs_searchchanneluser['course_user_id'].'">';
                    echo '<input type="submit" name="CheckDataEdit" value="ดำเนินการอัพเดท">'; 
                    echo '<input type="reset" name="CheckDataEdit_reset" value="เคลียร์"> ';   
                echo '</div>';
            echo '</form>';   
        echo '</div>';
    }
    else {
        echo '<div class="cls_center"> ไม่มีพบข้อมูล แก้ไขบนระบบ </div>';
    }


    
?>

</body>
</html>