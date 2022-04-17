<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Data User Channel</title>
    <style type="text/css">
        .cls_header { padding: 10px 12px; }
        .cls_content { padding: 6px 10px; }
        .cls_center { text-align: center; }
        .cls_centerright { text-align: right; margin-right: 18%; }
        .cls_text_linknone { text-decoration: none; }
    </style>
</head>
<body>

    <br>
        <div class="cls_center"> แบบฟอร์มเพิ่มข้อมูล รายชื่อผู้ทำคลิปวิดีโอสอนเขียนโปรแกรม </div>
    <br>
    <div class="cls_center">
        <form method="POST" action="add_datauserchannelinsert.php" name="formdata_userchannelcode">
            <div> COURSENAME: <input type="text" name="course_name" required placeholder="กรอกข้อมูล" size="50"> </div>
            <br> 
            <div> COURSEDETAIL: 
                <textarea rows="5" cols="40" name="course_detail" placeholder="กรอกรายละเอียด" required></textarea>
            </div>
            <br>
            <div> 
                <input type="submit" name="CheckData" value="ดำเนินการ"> 
                <input type="reset" name="CheckData_reset" value="เคลียร์">    
            </div>
        </form>    
    </div>

    <?php

    include 'connect/connection.php';

    $sql_select = "SELECT * FROM ma_user_course ORDER BY course_user_id ASC; ";
    $result_select = mysqli_query($newcon,$sql_select)or die(mysqli_error($newcon)); 
    $row_select = mysqli_num_rows($result_select);
    if ($row_select > 0) {
        echo nl2br("\n\n");
        echo '<div class="cls_center"> ตารางข้อมูลรายชื่อผู้ทำคลิปวิดีโอสอน เขียนภาษาโปรแกรม </div>';
        echo nl2br("\n");
        echo '<div class="cls_center"><a class="cls_text_linknone" href="index.php">กลับหน้าหลัก</a></div>';
        echo nl2br("\n");
        echo '<table border="1" cellpadding = "0" cellspacing = "0" width = "1200" align="center" class="cls_center">';
        echo '<tr>';
        echo '<th class="cls_header">ID usercha</th>';
        echo '<th class="cls_header">Name usercha</th>';
        echo '<th class="cls_header">Detail usercha</th>';
        echo '<th class="cls_header">lastUpdate</th>';
        echo '<th class="cls_header">edit usercha</th>';
        echo '<th class="cls_header">delete usercha</th>';
        echo '</tr>';
        $num = 0;
        while($rs_select = mysqli_fetch_array($result_select)) {
            //echo '<pre>'; print_r($rs_select); echo '</pre>';
            $num++;
            $CourseUserId = $rs_select['course_user_id'];
            $CourseName = $rs_select['course_name'];
            $CourseDetail = $rs_select['course_detail'];
            $CourseLastUpdate = $rs_select['course_lastupdate'];
            echo '<tr>';
            echo '<td class="cls_content">'.$num.'</td>';
            echo '<td class="cls_content">'.$CourseName.'</td>';
            echo '<td class="cls_content">'.$CourseDetail.'</td>';
            echo '<td style="width: 15%;" class="cls_content">'.$CourseLastUpdate.'</td>';
            echo '<td class="cls_content">
            <a title="คลิกแก้ไข '.$CourseName.' ที่นี้ " class="cls_text_linknone" href="edit_channel_user.php?IDEditCUser='.$CourseUserId.'">แก้ไข</a>
            </td>';
            echo '<td class="cls_content">
            <a title="คลิกลบ '.$CourseName.' ที่นี้ " class="cls_text_linknone" href="dele_channel_user.php?IDDelCUser='.$CourseUserId.'">ลบ</a>
            </td>';
            echo '</tr>';
        }
        echo '</table>';
    }
    else {
        echo '<br> <div class="cls_center"> ไม่มีข้อมูลในระบบ </div>';
    }

    ?>

</body>
</html>