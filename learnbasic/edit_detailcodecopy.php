<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Data</title>
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

    $IDDetailCode = $_GET['IDDetailEdit'];
    echo 'IDDetailCode '.$IDDetailCode.'<br>';
    $sql_searchDetailCode = "SELECT
                              * 
                              FROM
                              menu_code AS m_code
                              INNER JOIN detail_code AS d_code ON d_code.codemunu_id = m_code.codemunu_id
                              INNER JOIN ma_user_course AS m_use_curs ON m_use_curs.course_user_id = d_code.course_user_id
                              INNER JOIN tr_frameworkcode AS fra_code ON fra_code.framework_codeid = d_code.framework_codeid
                              WHERE d_code.m_detail_id = '".$IDDetailCode."' ORDER BY d_code.m_detail_id ASC; ";
    echo 'sql_searchDetailCode <br> '.$sql_searchDetailCode.'<br>';
    $result_searchDetailCode = mysqli_query($newcon,$sql_searchDetailCode)or die(mysqli_error($newcon));
    $row_searchDetailCode = mysqli_num_rows($result_searchDetailCode);
    $rs_searchDetailCode = mysqli_fetch_array($result_searchDetailCode);
    echo '<pre>'; print_r($rs_searchDetailCode); echo '</pre>';

    if ($row_searchDetailCode > 0) {
        echo '<br>';
        echo '<div class="cls_center"> แบบฟอร์มแก้ไขข้อมูล รายชื่อผู้ใช้สอนคลิปวิดีโอ </div>';
        echo '<br>';
        echo '<div class="cls_center">';
            echo '<form method="POST" action="add_datadetailcodecopyupdate.php" name="formeditdata_detailcode">';
                echo '<div> REF_CODE_M_ID: ';
                    $sql_DataSearchcodemenu = "SELECT * FROM menu_code AS m_code ORDER BY codemunu_id ASC; ";
                    //echo 'sql_DataSearchcodemenu <br> '.$sql_DataSearchcodemenu.'<br>';
                    $result_searchDatacodemenu = mysqli_query($newcon,$sql_DataSearchcodemenu)or die(mysqli_error($newcon));          
                    echo '<select id="" name="codemunu_id"  >';
                    echo '<option value="'.$rs_searchDetailCode['codemunu_id'].'" >'.$rs_searchDetailCode['codemunu_name'].'</option>';
                    echo '<option value="" >กรุณาเลือกหมวดหมู่หลักสูตร</option>';
                    while ($rs_searchDatamenucode = mysqli_fetch_assoc($result_searchDatacodemenu)) {
                        echo '<pre>'; print_r($rs_searchDatamenucode); echo '</pre>';
                        echo '<option value="'.$rs_searchDatamenucode['codemunu_id'].'" >
                        '.$rs_searchDatamenucode['codemunu_name'].'</option>';
                    }
                    echo '</select>';
                echo '</div>';
                echo nl2br("\n");
                echo '<div> REF_FRAMEWORK_CODEID:';
                $sql_DataSearchcodeFrame = "SELECT * FROM tr_frameworkcode AS fra_code ORDER BY framework_codeid ASC; ";
                    //echo 'sql_DataSearchcodeFrame <br> '.$sql_DataSearchcodeFrame.'<br>';
                    $result_searchDatacodeFrame = mysqli_query($newcon,$sql_DataSearchcodeFrame)or die(mysqli_error($newcon));          
                    echo '<select id="" name="framework_codeid"  >';
                    echo '<option value="'.$rs_searchDetailCode['framework_codeid'].'" >'.$rs_searchDetailCode['framework_codename'].'</option>';
                    echo '<option value="" >กรุณาเลือกประเภทFrameworkCode</option>';
                    while ($rs_searchDataFramecode = mysqli_fetch_assoc($result_searchDatacodeFrame)) {
                        echo '<pre>'; print_r($rs_searchDataFramecode); echo '</pre>';
                        echo '<option value="'.$rs_searchDataFramecode['framework_codeid'].'" >
                        '.$rs_searchDataFramecode['framework_codename'].'</option>';
                    }
                    echo '</select>';               
                echo '</div>';
                echo nl2br("\n");
                echo '<div> REF_USER_C_M_ID: ';
                    $sql_DataSearchChanneluser = "SELECT * FROM ma_user_course ORDER BY course_user_id ASC; ";
                    //echo 'sql_DataSearchChanneluser <br> '.$sql_DataSearchChanneluser.'<br>';
                    $result_SearchChanneluser = mysqli_query($newcon,$sql_DataSearchChanneluser)or die(mysqli_error($newcon));          
                    echo '<select id="" name="course_user_id"  >';
                    echo '<option value="'.$rs_searchDetailCode['course_user_id'].'" >'.$rs_searchDetailCode['course_name'].'</option>';
                    echo '<option value="" >กรุณาเลือกผู้ทำคลิปสอน Channel Youtube</option>';
                    while ($rs_SearchChanneluser = mysqli_fetch_assoc($result_SearchChanneluser)) {
                        echo '<pre>'; print_r($rs_SearchChanneluser); echo '</pre>';
                        echo '<option value="'.$rs_SearchChanneluser['course_user_id'].'" >
                        '.$rs_SearchChanneluser['course_name'].'</option>';
                    }
                    echo '</select>';
                echo '</div>';
                echo nl2br("\n");
                echo '<div> DETAILSUBJECT: ';
                    echo '<input type="text" name="m_detail_subject"  value="'.$rs_searchDetailCode['m_detail_subject'].'" size="50">';
                echo '</div>';
                echo nl2br("\n");
                echo '<div> DETAILNAME: ';
                    echo '<input type="text" name="m_detail_name"  value="'.$rs_searchDetailCode['m_detail_name'].'" size="50">';
                echo '</div>';
                echo nl2br("\n");
                echo '<div> DETAILTEXTCODE: ';
                    echo '<textarea rows="5" cols="40" name="m_detaIL_textcode" >'.$rs_searchDetailCode['m_detaIL_textcode'].'</textarea>';
                echo '</div>';
                echo nl2br("\n");
                echo '<div> DETAILLASTUPDATE: ';
                    echo '<input type="text" readonly name="m_detail_lastupdate" value="'.$rs_searchDetailCode['m_detail_lastupdate'].'">';
                echo '</div>';
                echo nl2br("\n");
                echo '<div>';
                    echo '<input type="hidden" name="m_detail_id" value="'.$rs_searchDetailCode['m_detail_id'].'">';
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