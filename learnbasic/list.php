<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>List</title>
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

$menu_id = $_GET['Id'];
$menu_status = $_GET['status'];
//echo 'Id = '.$menu_id.'<br>';
//echo 'menu_status'.$menu_status.'<br>';

$sql_l = "SELECT * FROM menu_code AS m_code
INNER JOIN detail_code AS d_code ON d_code.codemunu_id = m_code.codemunu_id
INNER JOIN ma_user_course AS m_use_curs ON m_use_curs.course_user_id = d_code.course_user_id
LEFT JOIN tr_frameworkcode AS fra_code ON fra_code.framework_codeid = d_code.framework_codeid
WHERE m_code.status_m_code = '".$menu_status."'; ";

$result_l = mysqli_query($newcon,$sql_l)or die(mysqli_error($newcon));
$rowt_l = mysqli_num_rows($result_l);
//echo $rowt_l;

$row_id_m = 0;

echo '<br> <caption><div>ตารางจัดเก็บ เนื้อหา Code</div></caption> <br>';

if ($rowt_l > 0) {
    echo '<div class="cls_centerright"><a class="cls_text_linknone" title="คลิกเพิ่ม ข้อมูล" href="add_datacode.php"> +เพิ่มข้อมูลหมวดหมู่หลักสูตร+ </a></div> <br>';
    echo '<div class="cls_centerright"><a class="cls_text_linknone" title="คลิกเพิ่ม ข้อมูล" href="add_channel_user.php"> +เพิ่มข้อมูลเจ้าของคลิป เขียนโปรแกรม+ </a></div> <br>';
    echo '<div class="cls_centerright"><a class="cls_text_linknone" title="คลิกเพิ่ม ข้อมูล" href="add_detail_copycode.php"> +เพิ่มข้อมูลรายละเอียด codecopy tag+ </a></div> <br>';
    echo '<div class="cls_centerright"><a class="cls_text_linknone" title="คลิกเพิ่ม ข้อมูล" href="add_codeframework.php"> +เพิ่มข้อมูลประเภท CodeFrameWork+ </a></div> <br>';
    echo '<table align="center" border="1" cellpadding = "0" cellspacing = "0" width = "1450">';
    echo '<tr>';
    echo '<th class="cls_header">ID</th>';
    echo '<th class="cls_header">CodeName</th>';
    echo '<th class="cls_header">CodeFrmaework</th>';
    echo '<th class="cls_header">CodeFrameworkType</th>';
    echo '<th class="cls_header">DetailSubject</th>';
    echo '<th class="cls_header">DetailName</th>';
    echo '<th class="cls_header">CourseUserId</th>';
    echo '<th class="cls_header">CourseName</th>';
    echo '<th class="cls_header">lastupdate</th>';
    echo '<th class="cls_header">รายละเอียด code</th>';
    echo '</tr>';
    while ($row_l = mysqli_fetch_array($result_l)) {
        echo '<pre>'; print_r($row_l); echo '</pre>';
        $row_id_m++;
        $Detail_m_id = $row_l['m_detail_id'];
        $Detail_m_subject = $row_l['m_detail_subject'];
        $Detail_m_name = $row_l['m_detail_name'];
        $Detail_m_lastupdate = $row_l['m_detail_lastupdate'];
        $Code_M_Name = $row_l['codemunu_name'];
        $CodeTypeFrame = $row_l['framework_codetype'];
        $FrameworkCodename = $row_l['framework_codename'];
        $course_user_id = $row_l['course_user_id'];
        $course_name = $row_l['course_name'];
        $course_detail = $row_l['course_detail'];
        if ($Detail_m_id == "") {
            echo 'ไม่มีพบข้อมูล รายละเอียดหลักสูตร '.$Code_M_Name.' ';
        } 
        else {
            echo '<tr align="center">';
            echo '<td class="cls_content">'.$row_id_m.'</td>';
            echo '<td class="cls_content">'.$Code_M_Name.'</td>';
            echo '<td class="cls_content">'.$FrameworkCodename.'</td>';
            echo '<td class="cls_content">'.$CodeTypeFrame.'</td>';
            echo '<td class="cls_content">'.$Detail_m_subject.'</td>';
            echo '<td class="cls_content">'.$Detail_m_name.'</td>';
            echo '<td class="cls_content">'.$course_user_id.'</td>';
            echo '<td class="cls_content">'.$course_name.'</td>';
            echo '<td class="cls_content">'.$Detail_m_lastupdate.'</td>';
            echo '<td class="cls_content">'.'<a class="cls_text_linknone" title="คลิกเนื้อหา '.$Detail_m_name.'" href="detailcode.php?ID_Detail='.$Detail_m_id.'">เนื้อหา</a>'.'</td>';
            echo '</tr>';
        }
    }
    echo '</table>';
}
else {
    echo '<div class="cls_centerright"><a class="cls_text_linknone" title="คลิกเพิ่ม ข้อมูล" href="add_datacode.php"> +เพิ่มข้อมูลหมวดหมู่หลักสูตร+ </a></div> <br>';
    echo '<div class="cls_centerright"><a class="cls_text_linknone" title="คลิกเพิ่ม ข้อมูล" href="add_channel_user.php"> +เพิ่มข้อมูลเจ้าของคลิป เขียนโปรแกรม+ </a></div> <br>';
    echo '<div class="cls_centerright"><a class="cls_text_linknone" title="คลิกเพิ่ม ข้อมูล" href="add_detail_copycode.php"> +เพิ่มข้อมูลรายละเอียด codecopy tag+ </a></div> <br>';
    echo '<div class="cls_centerright"><a class="cls_text_linknone" title="คลิกเพิ่ม ข้อมูล" href="add_codeframework.php"> +เพิ่มข้อมูลประเภท CodeFrameWork+ </a></div> <br>';
    echo '<div align="center"><b>ไม่พบข้อมูลหลักสูตร</b></div>';
}

echo nl2br("\n");
echo '<div align="center"><a class="cls_text_linknone" href="index.php">กลับหน้าหลัก</a></div>';

?>


</body>
</html>