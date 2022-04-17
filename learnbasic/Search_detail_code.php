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
    <script>
        $(document).ready(function() { 
            
            $('#clickstats').click(function() { 
                
                var text_Select_Data = $('#status_m_code :selected').val();
                var text_Select_Data1 = $('#course_name :selected').val();
                var text_Select_Data2 = $('#framework_codetype :selected').val();

                if (text_Select_Data == "" || text_Select_Data1 == "" || text_Select_Data2 == "") {
                    alert('ไม่มีข้อมูลเลือก');
                    //return false;
                    $("#myform").trigger("reset");
                }
                else {
                    alert(text_Select_Data);
                    alert(text_Select_Data1);
                    alert(text_Select_Data2);
                }
                
            });

            $('#clickresetstats').click(function() {

                //location.reload(true);
                //history.go(0);
                alert('Refresh Data ');
                window.location.href = window.location.href;

            });

        });
    </script>
</head>
<body>

<?php

    include 'connect/connection.php';

    echo nl2br("\n");
    echo '<div class="cls_center"><a href="add_detail_copycode.php" class="cls_text_linknone">ย้อนกลับหน้า Detail Code</a></div>';
    echo nl2br("\n");

    $sql_statusprogram = "SELECT * FROM menu_code";
    //echo $sql_statusprogram;
    $result_statusprogram = mysqli_query($newcon,$sql_statusprogram)or die(mysqli_error($newcon));
    echo '<form method="post" id="myform" action="'.$_SERVER['PHP_SELF'].'">';
    // '.$_SERVER['PHP_SELF'].'
    echo '<br> <select name="status_m_code" id="status_m_code">';
    echo '<option value="">กรุณากรองประเภทภาษาโปรแกรม</option>';
    while($rs_program = mysqli_fetch_assoc($result_statusprogram)) {
        //echo '<pre>'; print_r($rs_program); echo '</pre>';
        $pro_codemenu_id = $rs_program['codemunu_id'];
        $pro_statauCode = $rs_program['status_m_code'];
        //echo $pro_codemenu_id.':'.$pro_statauCode;
        echo '<option value="'.$pro_statauCode.'">'.$pro_codemenu_id.':'.$pro_statauCode.'</option>'; 
    }
    echo '</select>';
    echo nl2br("\n");

    $sql_corseprogram = "SELECT * FROM ma_user_course";
    //echo $sql_corseprogram;
    $result_courseprogram = mysqli_query($newcon,$sql_corseprogram)or die(mysqli_error($newcon));

    echo '<br> <select name="course_name" id="course_name">';
    echo '<option value="">กรุณากรองชื่อผู้จัดทำ channel ภาษาโปรแกรม</option>';
    while($rs_corseprogram = mysqli_fetch_assoc($result_courseprogram)) {
        //echo '<pre>'; print_r($rs_program); echo '</pre>';
        $pro_usercourse_id = $rs_corseprogram['course_user_id'];
        $pro_usercourse_Name = $rs_corseprogram['course_name'];
        //echo $pro_codemenu_id.':'.$pro_statauCode;
        echo '<option value="'.$pro_usercourse_Name.'">'.$pro_usercourse_id.':'.$pro_usercourse_Name.'</option>'; 
    }
    echo '</select>';
    echo nl2br("\n");

    $sql_frameworkstatus = "SELECT * FROM tr_frameworkcode";
    //echo $sql_frameworkstatus;
    $result_frameworkstatus = mysqli_query($newcon,$sql_frameworkstatus)or die(mysqli_error($newcon));

    echo '<br> <select name="framework_codetype" id="framework_codetype">';
    echo '<option value="">กรุณากรองประเภทโปรแกรม</option>';
    while ($rs_frawksts = mysqli_fetch_assoc($result_frameworkstatus)) {
        $FrameWork_Status = $rs_frawksts['framework_codetype'];
        $FrameWork_Id = $rs_frawksts['framework_codeid'];
        echo '<option value="'.$FrameWork_Status.'">'.$FrameWork_Id.':'.$FrameWork_Status.'</option>';
    }   
    echo '</select>';
    echo nl2br("\n\n");

    echo '<input type="submit" id="clickstats" name="clickstatus" value="คลิกเลือก">';
    echo '<input type="reset" id="clickresetstats" name="clickstatus" value="clear">';
    echo '</form>';

 
    if (empty($_POST['clickstatus'])) {
        echo '<br> <div><a href="Search_detail_code.php">เคลียร์</a></div>';
    }
    else {
        if (isset($_POST['clickstatus'])) {
            
            echo '<br> <div id="resetclear">';
            echo $_POST['status_m_code'];
            echo '<br>';
            echo $_POST['course_name'];
            echo '<br>';
            echo $_POST['framework_codetype'];
            echo '</div>';

            $sql_list = "";
            if ($_POST['status_m_code'] != "") {
                $sql_list .= " m_code.status_m_code = '".$_POST['status_m_code']."' ";
            }

            if ($_POST['course_name'] != "") {
                $sql_list .= " AND m_use_curs.course_name = '".$_POST['course_name']."' ";
            } 

            if ($_POST['framework_codetype'] != "") {
                $sql_list .= " AND fra_code.framework_codetype = '".$_POST['framework_codetype']."' ";
            }

            $sql_select = "SELECT * 
                    FROM
                    menu_code AS m_code
                    INNER JOIN detail_code AS d_code ON d_code.codemunu_id = m_code.codemunu_id
                    INNER JOIN ma_user_course AS m_use_curs ON m_use_curs.course_user_id = d_code.course_user_id 
                    LEFT JOIN tr_frameworkcode AS fra_code ON fra_code.framework_codeid = d_code.framework_codeid 
                    WHERE $sql_list ";
            //echo 'sql_select '.$sql_select.'<br>';
            $result_select = mysqli_query($newcon,$sql_select)or die(mysqli_error($newcon)); 
            $row_select = mysqli_num_rows($result_select);

            if ($row_select > 0) {
                echo nl2br("\n\n");
                echo '<div class="cls_center"> ตารางข้อมูลหมวดหลักสูตร ภาษาโปรแกรม </div>';
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
                echo '</tr>';
                $num = 0;
                while($rs_select = mysqli_fetch_array($result_select)) {
                    //echo '<pre>'; print_r($rs_select); echo '</pre>';
                    $num++;
                    $MDetailId = $rs_select['m_detail_id'];
                    $CodemunuId = $rs_select['codemunu_id'];
                    $codemunuName = $rs_select['codemunu_name'];
                    $codemunulastUpdate = date('Y-m-d H:i:s');
                    $statusCode = $rs_select['status_m_code'];
                    $CourseUserId = $rs_select['course_user_id'];
                    $CourseName = $rs_select['course_name'];
                    $CourseDetail = $rs_select['course_detail'];
                    $FrameworkCodeid = $rs_select['framework_codeid'];
                    $FrameworkCodename = $rs_select['framework_codename'];
                    $FrameworkCodedetail = $rs_select['framework_codedetail'];
                    $FrameworkCodetype = $rs_select['framework_codetype'];
                    $MDetailName = $rs_select['m_detail_name'];
                    $MDetailSubject = $rs_select['m_detail_subject'];
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
                    echo '</tr>';
                }
                echo '</table>';
            }
            else {
                echo '<br> <div class="cls_center"> ไม่มีข้อมูลในระบบ </div>';
            }

        }   
        else {
            echo '<br> <div><a href="Search_detail_code.php">เคลียร์ค่า</a></div>';
        }
    }

    

?>

</body>
</html>