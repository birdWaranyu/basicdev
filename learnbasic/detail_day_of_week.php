<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Data Carendar</title>
</head>
<body>
    
<?php

include 'connect/connection.php';

$IDDetail_Carendar = $_GET['IDDetail_Carendar'];
$sql_detail = "SELECT * FROM tb_activity_calendar WHERE id = '".$IDDetail_Carendar."'; ";
$result_detail = mysqli_query($newcon,$sql_detail)or die(mysqli_error($newcon));
$row_detail = mysqli_num_rows($result_detail);
$rs_detail = mysqli_fetch_array($result_detail);
echo '<pre>'; print_r($rs_detail); echo '</pre>';

echo '<div style="text-align:center; margin: 3%;">';
    echo '<div style="border: 2px solid red; display: inline-block; padding: 3rem;">'; 
        echo '<div title="'.$rs_detail['f_color'].'" style="background-color: '.$rs_detail['f_color'].'; display: inline-block; padding: 25%; ">';
            echo $rs_detail['f_color'];
        echo '</div> <br><br>';
        echo '<div>';
            echo 'หัวข้อ '.$rs_detail['b_title'];
            echo nl2br("\n");
            echo 'รายละเอียด '.$rs_detail['c_detail'];
            echo nl2br("\n");
            echo 'วัน '.$rs_detail['day_week']; 
            echo nl2br("\n");
            echo 'ปี '.$rs_detail['yearview']; 
            echo nl2br("\n");
            echo 'เดือน '.$rs_detail['monthofmonth'];
            echo nl2br("\n"); 
            echo 'วันที่ '.$rs_detail['dayofday']; 
            echo nl2br("\n");
            echo 'ประเภท '.$rs_detail['d_statusday']; 
            echo nl2br("\n");
            echo 'ประเภท '.$rs_detail['e_checkdate']; 
            echo nl2br("\n");
            echo 'สี '.$rs_detail['f_color']; 
            echo nl2br("\n");
            echo 'ลิงค์ '.$rs_detail['g_linkurl']; 
            echo nl2br("\n");
            echo 'วันที่ '.$rs_detail['a_date'].' ถึง '; 
            echo nl2br("\n");
            echo 'วันที่ '.$rs_detail['a_date_to']; 
            echo nl2br("\n");
            echo 'อัพเดทล่าสุด '.$rs_detail['last_update']; 
            echo nl2br("\n\n");
            echo '<div><a style="text-decoration: none;" href="day_of_week.php">กลับหน้าหลัก</a></div>';
        echo '</div>';
    echo '</div>';    
echo '</div>';

?>

</body>
</html>