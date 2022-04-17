
<?php

header('Content-Type: text/html; charset=utf-8');

include 'connect/connection.php';

function inDate($nDate) {
	if ($nDate != "") {
		list($dd, $mm, $yy) = explode("/", $nDate);
		if (strlen($dd)==1) {
			$dd = "0".$dd;
		}
		if (strlen($mm)==1) {
			$mm = "0".$mm;
		}
		$newDate = $yy."-".$mm."-".$dd;
		return $newDate;
	}
}

function outDate($nDate) {
	if ($nDate != "") {
		list($yy, $mm, $dd) = explode("-", $nDate);
		if (strlen($dd)==1) {
			$dd = "0".$dd;
		}
		if (strlen($mm)==1) {
			$mm = "0".$mm;
		}
		$newDate = $dd."/".$mm."/".$yy;
		return $newDate;
	}
}

echo '<pre>';
print_r($_POST);
echo '</pre>';

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

    $A_outDate = outdate($a_date);
    $A_outDate_To = outdate($a_date_to);

    // echo $A_outDate;
    // echo nl2br("\n");
    // echo $A_outDate_To;

    // echo $a_date;
    // echo nl2br("\n");
    // echo $a_date_to;

    // echo $b_title;
    // echo nl2br("\n");
    // echo $c_detail;
    // echo nl2br("\n");
    // echo $day_week;

    // echo $monthofmonth;
    // echo nl2br("\n");
    // echo $dayofday;
    // echo nl2br("\n");
    // echo $f_color;
    // echo nl2br("\n");
    // echo $g_linkurl;

    $Year_Tha = ""; 
    $Year_Tha = $yearview + 543;

    //echo $yearview;
    //echo '<br>';
    //echo $Year_Tha;

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
    //echo $TxtChk_Date;

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
    //echo $TxtChk_D_sta;

    $sql = "INSERT INTO tb_activity_calendar (b_title,c_detail,day_week,yearview,monthofmonth,dayofday,d_statusday,e_checkdate,f_color,g_linkurl,a_date,a_date_to)
            VALUES('".$b_title."','".$c_detail."','".$day_week."','".$yearview."','".$monthofmonth."','".$dayofday."','".trim($TxtChk_D_sta)."','".trim($TxtChk_Date)."','".$f_color."','".$g_linkurl."','".$a_date."','".$a_date_to."') ";
    //echo 'sql Data '.$sql.'<br>';
    $result = mysqli_query($newcon,$sql)or die(mysqli_error($newcon));

    if ($result) {
        echo "<script>alert('เพิ่มข้อมูลสำเร็จ');window.location='day_of_week.php';</script>";
    }
    else {
        echo "<script>alert('เพิ่มข้อมูลไม่สำเร็จ');window.location='day_of_week.php';</script>";
    }

    echo '<div align="center"><a href="day_of_week.php">กลับหน้าหลัก</a></div>';

    echo '<br>';

}
else {
    echo '<div align="center"><a href="day_of_week.php">กลับสู่หน้าหลัก</a></div>';
}

?>