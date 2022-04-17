
<?php

include 'connect/connection.php'; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Data Detail CodeCopy</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
        <div class="cls_center"> แบบฟอร์มเพิ่มข้อมูล รายละเอีดย codecopy Tag </div>
    <br>
    <div class="cls_center">
        <form method="POST" action="add_datadetailcodecopyinsert.php" name="formdata_detailcodecopy">
            <div> REF_CODE_M_ID:
               <?php
                $sql_DataSearchcodemenu = "SELECT * FROM menu_code AS m_code ORDER BY codemunu_id ASC; ";
                    //echo 'sql_DataSearchcodemenu <br> '.$sql_DataSearchcodemenu.'<br>';
                    $result_searchDatacodemenu = mysqli_query($newcon,$sql_DataSearchcodemenu)or die(mysqli_error($newcon));          
                    echo '<select id="" name="codemunu_id" required >';
                    echo '<option value="" >กรุณาเลือกหมวดหมู่หลักสูตร</option>';
                    while ($rs_searchDatamenucode = mysqli_fetch_assoc($result_searchDatacodemenu)) {
                        echo '<pre>'; print_r($rs_searchDatamenucode); echo '</pre>';
                        echo '<option value="'.$rs_searchDatamenucode['codemunu_id'].'" >
                        '.$rs_searchDatamenucode['codemunu_name'].'</option>';
                    }
                    echo '</select>';
               ?>
            </div>
            <br>
            <div> REF_FRAMEWORK_CODEID:
               <?php
                $sql_DataSearchcodeFrame = "SELECT * FROM tr_frameworkcode AS fra_code ORDER BY framework_codeid ASC; ";
                    //echo 'sql_DataSearchcodeFrame <br> '.$sql_DataSearchcodeFrame.'<br>';
                    $result_searchDatacodeFrame = mysqli_query($newcon,$sql_DataSearchcodeFrame)or die(mysqli_error($newcon));          
                    echo '<select id="" name="framework_codeid" required >';
                    echo '<option value="" >กรุณาเลือกประเภทFrameworkCode</option>';
                    while ($rs_searchDataFramecode = mysqli_fetch_assoc($result_searchDatacodeFrame)) {
                        echo '<pre>'; print_r($rs_searchDataFramecode); echo '</pre>';
                        echo '<option value="'.$rs_searchDataFramecode['framework_codeid'].'" >
                        '.$rs_searchDataFramecode['framework_codename'].'</option>';
                    }
                    echo '</select>';
               ?>
            </div>
            <br>
            <!-- <div> FrameworkType:  -->
                <?php
                    // $sql_DataSearchcodeFrame = "SELECT * FROM tr_frameworkcode AS fra_code ORDER BY framework_codeid ASC; ";
                    // //echo 'sql_DataSearchcodeFrame <br> '.$sql_DataSearchcodeFrame.'<br>';
                    // $result_searchDatacodeFrame = mysqli_query($newcon,$sql_DataSearchcodeFrame)or die(mysqli_error($newcon));          
                    // echo '<select id="" name="framework_codetype" required >';
                    // echo '<option value="" >กรุณาเลือกประเภทFrameworkCode</option>';
                    // while ($rs_searchDataFramecode = mysqli_fetch_assoc($result_searchDatacodeFrame)) {
                    //     echo '<pre>'; print_r($rs_searchDataFramecode); echo '</pre>';
                    //     echo '<option value="'.$rs_searchDataFramecode['framework_codetype'].'" >
                    //     '.$rs_searchDataFramecode['framework_codetype'].'</option>';
                    // }
                    // echo '</select>';
               ?>
            <!-- </div>
            <br> -->
            <div> REF_USER_C_M_ID:
            <?php
                $sql_DataSearchChanneluser = "SELECT * FROM ma_user_course ORDER BY course_user_id ASC; ";
                //echo 'sql_DataSearchChanneluser <br> '.$sql_DataSearchChanneluser.'<br>';
                $result_SearchChanneluser = mysqli_query($newcon,$sql_DataSearchChanneluser)or die(mysqli_error($newcon));          
                echo '<select id="" name="course_user_id" required >';
                echo '<option value="" >กรุณาเลือกผู้ทำคลิปสอน Channel Youtube</option>';
                while ($rs_SearchChanneluser = mysqli_fetch_assoc($result_SearchChanneluser)) {
                    echo '<pre>'; print_r($rs_SearchChanneluser); echo '</pre>';
                    echo '<option value="'.$rs_SearchChanneluser['course_user_id'].'" >
                    '.$rs_SearchChanneluser['course_name'].'</option>';
                }
                echo '</select>';
               ?>
            </div>
            <br>
            <div> DETAILSUBJECT: <input type="text" name="m_detail_subject" required placeholder="กรอกข้อมูล" size="50"> </div>
            <br> 
            <div> DETAILNAME: <input type="text" name="m_detail_name" required placeholder="กรอกข้อมูล" size="50"> </div>
            <br>
            <div> DETAILTEXTCODE: 
                <textarea rows="5" cols="40" name="m_detaIL_textcode" placeholder="กรอกรายละเอียด" required></textarea>
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

    $per_Page = 3;
    $start_page = 0;

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }
    else {
        $page = 1;
    }

    $start_page = ($page - 1) * $per_Page;

    $sql_select_limit = "SELECT * 
                    FROM
                    menu_code AS m_code
                    INNER JOIN detail_code AS d_code ON d_code.codemunu_id = m_code.codemunu_id
                    INNER JOIN ma_user_course AS m_use_curs ON m_use_curs.course_user_id = d_code.course_user_id 
                    LEFT JOIN tr_frameworkcode AS fra_code ON fra_code.framework_codeid = d_code.framework_codeid 
                    LIMIT {$start_page} , {$per_Page} ";
    //echo $sql_select_limit;
    $result_select_limit = mysqli_query($newcon,$sql_select_limit)or die(mysqli_error($newcon));
    $row_select_limit = mysqli_num_rows($result_select_limit); 
    if ($row_select_limit > 0) {
        echo nl2br("\n\n");
        echo '<div class="cls_center"> ตารางข้อมูลหมวดหลักสูตร ภาษาโปรแกรม </div>';
        echo nl2br("\n");
        echo '<div class="cls_center"><a class="cls_text_linknone" href="index.php">กลับหน้าหลัก</a></div>';
        echo nl2br("\n");
        echo '<div class="cls_center"><a href="Search_detail_code.php" class="cls_text_linknone">เลือกค้นหาเฉพาะโปรแกรมที่ต้องการดู</a></div>';
        echo nl2br("\n");
        echo '<table border="1" cellpadding = "0" cellspacing = "0" width = "800" align="center" class="cls_center">';
        echo '<tr>';
        echo '<th class="cls_header">ID</th>';
        echo '<th class="cls_header">codemunu_id</th>';
        echo '<th class="cls_header">codemunu_name</th>';
        echo '<th class="cls_header">codemunu_status</th>';
        echo '<th class="cls_header">course_user_id</th>';
        echo '<th class="cls_header">course_name</th>';
        echo '<th class="cls_header">course_detail</th>';
        echo '<th class="cls_header">framework_codeid</th>';
        echo '<th class="cls_header">framework_codename</th>';
        echo '<th class="cls_header">framework_codedetail</th>';
        echo '<th class="cls_header">framework_codetype</th>';
        echo '<th class="cls_header">m_detail_subject</th>';
        echo '<th class="cls_header">m_detail_name</th>';
        echo '<th class="cls_header">LastUpdate</th>';
        echo '<th class="cls_header">Detail Code</th>';
        echo '<th class="cls_header">edit code</th>';
        echo '<th class="cls_header">delete code</th>';
        echo '</tr>';
        $num = 0;
        while($rs_select_limit = mysqli_fetch_array($result_select_limit)) {
            //echo '<pre>'; print_r($rs_select); echo '</pre>';
            $num++;
            $MDetailId = $rs_select_limit['m_detail_id'];
            $CodemunuId = $rs_select_limit['codemunu_id'];
            $codemunuName = $rs_select_limit['codemunu_name'];
            $codemunulastUpdate = date('Y-m-d H:i:s');
            $statusCode = $rs_select_limit['status_m_code'];
            $CourseUserId = $rs_select_limit['course_user_id'];
            $CourseName = $rs_select_limit['course_name'];
            $CourseDetail = $rs_select_limit['course_detail'];
            $FrameworkCodeid = $rs_select_limit['framework_codeid'];
            $FrameworkCodename = $rs_select_limit['framework_codename'];
            $FrameworkCodedetail = $rs_select_limit['framework_codedetail'];
            $FrameworkCodetype = $rs_select_limit['framework_codetype'];
            $MDetailName = $rs_select_limit['m_detail_name'];
            $MDetailSubject = $rs_select_limit['m_detail_subject'];
            echo '<tr>';
            echo '<td class="cls_content">'.$num.'</td>';
            echo '<td class="cls_content">'.$CodemunuId.'</td>';
            echo '<td class="cls_content">'.$codemunuName.'</td>';
            echo '<td class="cls_content">'.$statusCode.'</td>';
            echo '<td class="cls_content">'.$CourseUserId.'</td>';
            echo '<td class="cls_content">'.$CourseName.'</td>';
            echo '<td class="cls_content">'.$CourseDetail.'</td>';
            echo '<td class="cls_content">'.$FrameworkCodeid.'</td>';
            echo '<td class="cls_content">'.$FrameworkCodename.'</td>';
            echo '<td class="cls_content">'.$FrameworkCodedetail.'</td>';
            echo '<td class="cls_content">'.$FrameworkCodetype.'</td>';
            echo '<td class="cls_content">'.$MDetailName.'</td>';
            echo '<td class="cls_content">'.$MDetailSubject.'</td>';
            echo '<td class="cls_content">'.$codemunulastUpdate.'</td>';
            echo '<td class="cls_content">
            <a title="คลิกดูเนื้อหา '.$codemunuName.' ที่นี้ " class="cls_text_linknone" href="detailDataCode.php?ID_Detail='.$MDetailId.'">รายละเอียด</a>
            </td>';
            echo '<td class="cls_content">
            <a title="คลิกแก้ไข '.$codemunuName.' ที่นี้ " class="cls_text_linknone" href="edit_detailcodecopy.php?IDDetailEdit='.$MDetailId.'">แก้ไข</a>
            </td>';
            echo '<td class="cls_content">
            <a title="คลิกลบ '.$codemunuName.' ที่นี้ " class="cls_text_linknone" href="dele_detailcodecopy.php?IDDetailDele='.$MDetailId.'">ลบ</a>
            </td>';
            echo '</tr>';
        }
        echo '</table>';
    }
    else {
        echo '<br> <div class="cls_center"> ไม่มีข้อมูลในระบบ </div>';
    }


    $sql_select_limit1 = "SELECT * 
                    FROM
                    menu_code AS m_code
                    INNER JOIN detail_code AS d_code ON d_code.codemunu_id = m_code.codemunu_id
                    INNER JOIN ma_user_course AS m_use_curs ON m_use_curs.course_user_id = d_code.course_user_id 
                    LEFT JOIN tr_frameworkcode AS fra_code ON fra_code.framework_codeid = d_code.framework_codeid 
                     ";
    //echo $sql_select_limit1;
    $result_select_limit1 = mysqli_query($newcon,$sql_select_limit1)or die(mysqli_error($newcon));
    $total_record = mysqli_num_rows($result_select_limit1);
    $total_page = ceil($total_record / $per_Page);

    echo '<br>';
    echo ' Total <b>'.$total_page.'</b> : '.' Page <b>'.$page.'</b> <br><br>'; 
    if ($page) {
        echo '<div style="border: 1px solid red; padding: 20px 5px; ">';
        echo '<a style="border: 1px solid blue; padding: 6px;" href="add_detail_copycode.php?page=1">';
        echo '<span aria-hidden="true"> Preview </span>';
        echo '</a>&nbsp;';
    }
    for($pain_num = 1; $pain_num < $total_page; $pain_num++) { 
        if ($pain_num != $total_page) {
            echo '<a style="padding: 6px; border: 1px solid blue;" href="add_detail_copycode.php?page='.$pain_num.'">'.$pain_num.'</a>&nbsp;';  
        }
        else {
            echo ''.$pain_num.'';
        }
    } 
    if ($page != $total_page) {
        echo '<a style="border: 1px solid blue; padding: 6px;" href="add_detail_copycode.php?page='.$total_page.'">';
        echo '<span aria-hidden="true"> Next </span>';
        echo '</a>&nbsp;'; 
        echo '</div>';
    }
    
    ?>            

</body>
</html>