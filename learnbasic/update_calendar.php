
<?php

header('Content-Type: text/html; charset=utf-8');

include 'connect/connection.php';

if (isset($_POST['click']) && !empty($_POST['click'])) {
    
    //echo 'true';
    $a_date = $_POST['a_date'];
    $a_date_to = $_POST['a_date_to'];
    $b_title = $_POST['b_title'];
    $c_detail = $_POST['c_detail'];
    $day_week = $_POST['day_week'];
    $yearview = $_POST['yearview'];
    $monthofmonth = $_POST['monthofmonth'];
    $dayofday = $_POST['dayofday'];
    $d_statusday = $_POST['d_statusday'];
    $e_checkdate = $_POST['e_checkdate'];
    $f_color = $_POST['f_color'];
    $g_linkurl = $_POST['g_linkurl'];
    $clickData = $_POST['click'];
    $id = $_POST['id'];

    echo $a_date;
    echo nl2br("\n");
    echo $a_date_to;
    echo nl2br("\n");

    echo $b_title;
    echo nl2br("\n");
    echo $c_detail;
    echo nl2br("\n");
    echo $day_week;

    echo nl2br("\n");
    echo $monthofmonth;
    echo nl2br("\n");
    echo $dayofday;
    echo nl2br("\n");
    echo $f_color;
    echo nl2br("\n");
    echo $g_linkurl;
    echo nl2br("\n");

    $Year_Tha = ""; 
    $Year_Tha = $yearview + 543;

    echo $yearview;
    echo nl2br("\n");
    echo $Year_Tha;
    echo nl2br("\n");

    echo $id;
    echo nl2br("\n");

    $TxtChk_Date = "";
    if ($e_checkdate == "Halfmorin") {
        $TxtChk_Date = " กิจกรรมครึ่งวันเช้า ";
    }
    else if ($e_checkdate == "Ttrue") {
        $TxtChk_Date = " กิจกรรมทั้งวัน ";
    }
    else if ($e_checkdate == "Halfafter") {
        $TxtChk_Date = " กิจกรรมครึ่งวันบ่าย ";
    }
    else if ($e_checkdate == "Halfgonig") {
        $TxtChk_Date = " กิจกรรมครึ่งวันเย็น ";
    }
    echo $TxtChk_Date;
    //echo $e_checkdate;

    echo nl2br("\n");

    $TxtChk_D_sta = "";
    if ($d_statusday == "day_1") {
        $TxtChk_D_sta = " วันหยุดตามประเพณี ";
    }
    else if ($d_statusday == "day_2") {
        $TxtChk_D_sta = " วันหยุดทำกิจกรรม ";
    }
    else if ($d_statusday == "day_3") {
        $TxtChk_D_sta = " วันหยุดเสาร์ อาทิตย์ ";
    }
    echo $TxtChk_D_sta;

    echo nl2br("\n");

    $day_update = date('Y-m-d H:i:s');

    $sql = "UPDATE tb_activity_calendar SET b_title = '".$b_title."', c_detail = '".$c_detail."', day_week = '".$day_week."', yearview = '".$yearview."', monthofmonth = '".$monthofmonth."', dayofday = '".$dayofday."', d_statusday = '".trim($TxtChk_D_sta)."', 
                    e_checkdate = '".trim($TxtChk_Date)."', f_color = '".$f_color."', g_linkurl = '".$g_linkurl."', a_date = '".$a_date."', a_date_to = '".$a_date_to."', last_update = '".$day_update."' WHERE id = '".$id."' ";
    //echo 'sql Data '.$sql.'<br>';
    $result = mysqli_query($newcon,$sql)or die(mysqli_error($newcon));

    if ($result) {
        echo "<script>alert('อัพเดทข้อมูลสำเร็จ');window.location='day_of_week.php';</script>";
    }
    else {
        echo "<script>alert('อัพเดทข้อมูลไม่สำเร็จ');window.location='day_of_week.php';</script>";
    }

    echo '<div align="center"><a href="day_of_week.php">กลับหน้าหลัก</a></div>';

    echo '<br>';

}
else {
    echo '<div align="center"><a href="day_of_week.php">กลับสู่หน้าหลัก</a></div>';
}

?>