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

    $IDCMenu = $_GET['IDEditCMenu'];
    echo 'IDCMenu '.$IDCMenu.'<br>';
    $sql_searchcodemenu = "SELECT * FROM menu_code WHERE codemunu_id = '".$IDCMenu."' ORDER BY codemunu_id ASC; ";
    echo 'sql_searchcodemenu <br> '.$sql_searchcodemenu.'<br>';
    $result_searchcodemenu = mysqli_query($newcon,$sql_searchcodemenu)or die(mysqli_error($newcon));
    $row_searchcodemenu = mysqli_num_rows($result_searchcodemenu);
    $rs_searchcodemunu = mysqli_fetch_array($result_searchcodemenu);
    echo '<pre>'; print_r($rs_searchcodemunu); echo '</pre>';

    if ($row_searchcodemenu > 0) {
        echo '<br>';
        echo '<div class="cls_center"> แบบฟอร์มแก้ไขข้อมูล หมวดหมู่หลักสูตร </div>';
        echo '<br>';
        echo '<div class="cls_center">';
            echo '<form method="POST" action="add_datacodemenuupdate.php" name="formeditdata_code">';
                echo '<div> MENUNAME: 
                    <input type="text" name="codemunu_name" required placeholder="กรอกข้อมูล" value="'.$rs_searchcodemunu['codemunu_name'].'">'; 
                echo '</div>';
                echo '<br> ';
                echo '<div> MENUSTATUS: ';
                    echo '<select required name="status_m_code" id="">';
                        echo '<option readonly value="'.$rs_searchcodemunu['status_m_code'].'">'.$rs_searchcodemunu['status_m_code'].'</option>';
                        echo '<option value="">กรุณาเลือกประเภทภาษาโปรแกรม</option>';
                        echo '<option value="PHP">ภาษา PHP</option>';
                        echo '<option value="HTML">ภาษา HTML</option>';
                        echo '<option value="CSS">ภาษา CSS</option>';
                        echo '<option value="JQUERY">ภาษา JQUERY</option>';
                        echo '<option value="JAVASCRIPT">ภาษา JAVASCRIPT</option>';
                        echo '<option value="SQL">ภาษา SQL</option>';
                    echo '</select>';
                echo '</div>';
                echo '<br>';
                // echo '<div> CODETYPE_FRAME: ';
                // echo '<select required name="codetype_frame" id="">';
                // echo '<option readonly value="'.$rs_searchcodemunu['codetype_frame'].'">'.$rs_searchcodemunu['codetype_frame'].'</option>';
                //     echo '<option value="">กรุณาเลือกประเภทframeworkcode</option>';
                //     echo '<option value="PHPCODEIGNITER">PHP Codeigniter</option>';
                //     echo '<option value="PHPLARAVEL">PHP LARAVEL</option>';
                //     echo '<option value="PHPANGULAR">PHP ANGULAR</option>';
                //     echo '<option value="PHPSYMFONYSY">PHP SYMFONYSY</option>';
                //     echo '<option value="PHPCAKEPHP">PHP CAKEPHP</option>';
                //     echo '<option value="PHPBASICTOTAL">PHP BASICTOTAL</option>';
                //     echo '<option value="PHPOOP">PHP OOP</option>';
                //     echo '<option value="PHPPDO">PHP PDO</option>';
                //     echo '<option value="PHPMYSQL">PHP MYSQL</option>';
                //     echo '<option value="PHPMYSQLI">PHP MYSQLI</option>';
                //     echo '<option value="CSSBOOTSTRAP">CSS BOOTSTRAP</option>';
                //     echo '<option value="CSSFOUNDATION">CSS FOUNDATION</option>';
                //     echo '<option value="CSSPURE">CSS PURE</option>';
                //     echo '<option value="CSSBULMA">CSS BULMA</option>';
                //     echo '<option value="CSSSEMANTICUI">CSS SEMANTICUI</option>';
                //     echo '<option value="CSSUIKIT">CSS UIKIT</option>';
                //     echo '<option value="CSSMATERIALIZECSS">CSS MATERIALIZECSS</option>';
                //     echo '<option value="CSSMILLIGRAM">CSS MILLIGRAM</option>';
                //     echo '<option value="CSSSKELETON">CSS SKELETON</option>';
                //     echo '<option value="CSSTAILWINDCSS">CSS TAILWINDCSS</option>';
                // echo '</select>';
                // echo '</div>';
                // echo '<br>';
                echo '<div> Update: ';
                    echo '<input type="text" name="codemunu_last_update" readonly value="'.$rs_searchcodemunu['codemunu_last_update'].'">';
                echo '</div>';
                echo '<br>';
                echo '<div> ';
                    echo '<input type="hidden" name="codemunu_id" value="'.$rs_searchcodemunu['codemunu_id'].'">';
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