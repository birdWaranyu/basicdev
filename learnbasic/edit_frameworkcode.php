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

    $IDFrmeCode = $_GET['IDEditFrmC'];
    echo 'IDFrmeCode '.$IDFrmeCode.'<br>';
    $sql_searchframeworkcode = "SELECT * FROM tr_frameworkcode WHERE framework_codeid = '".$IDFrmeCode."' ORDER BY framework_codeid ASC; ";
    echo 'sql_searchframeworkcode <br> '.$sql_searchframeworkcode.'<br>';
    $result_searchframeworkcode = mysqli_query($newcon,$sql_searchframeworkcode)or die(mysqli_error($newcon));
    $row_searchframeworkcode = mysqli_num_rows($result_searchframeworkcode);
    $rs_searchframeworkcode = mysqli_fetch_array($result_searchframeworkcode);
    echo '<pre>'; print_r($rs_searchframeworkcode); echo '</pre>';

    if ($row_searchframeworkcode > 0) {
        echo '<br>';
        echo '<div class="cls_center"> แบบฟอร์มแก้ไขข้อมูล ประเภท frameworkCode Data </div>';
        echo '<br>';
        echo '<div class="cls_center">';
            echo '<form method="POST" action="add_frameworkcodeupdate.php" name="formeditframework_code">';               
                echo '<div> CODETYPE_FRAME: ';
                echo '<select required name="framework_codename" id="">';
                echo '<option readonly value="'.$rs_searchframeworkcode['framework_codename'].'">'.$rs_searchframeworkcode['framework_codename'].'</option>';
                    echo '<option value="">กรุณาเลือกประเภทframeworkcode</option>';
                    echo '<option value="PHPCODEIGNITER">PHP Codeigniter</option>';
                    echo '<option value="PHPLARAVEL">PHP LARAVEL</option>';
                    echo '<option value="PHPANGULAR">PHP ANGULAR</option>';
                    echo '<option value="PHPSYMFONYSY">PHP SYMFONYSY</option>';
                    echo '<option value="PHPCAKEPHP">PHP CAKEPHP</option>';
                    echo '<option value="PHPBASICTOTAL">PHP BASICTOTAL</option>';
                    echo '<option value="PHPOOP">PHP OOP</option>';
                    echo '<option value="PHPPDO">PHP PDO</option>';
                    echo '<option value="PHPMYSQL">PHP MYSQL</option>';
                    echo '<option value="PHPMYSQLI">PHP MYSQLI</option>';
                    echo '<option value="CSSBOOTSTRAP">CSS BOOTSTRAP</option>';
                    echo '<option value="CSSFOUNDATION">CSS FOUNDATION</option>';
                    echo '<option value="CSSPURE">CSS PURE</option>';
                    echo '<option value="CSSBULMA">CSS BULMA</option>';
                    echo '<option value="CSSSEMANTICUI">CSS SEMANTICUI</option>';
                    echo '<option value="CSSUIKIT">CSS UIKIT</option>';
                    echo '<option value="CSSMATERIALIZECSS">CSS MATERIALIZECSS</option>';
                    echo '<option value="CSSMILLIGRAM">CSS MILLIGRAM</option>';
                    echo '<option value="CSSSKELETON">CSS SKELETON</option>';
                    echo '<option value="CSSTAILWINDCSS">CSS TAILWINDCSS</option>';
                echo '</select>';
                echo '</div>';
                echo '<br>';
                echo '<div> FrameworkDetail: '; 
                    echo '<textarea rows="4" name="framework_codedetail" required cols="50">'.$rs_searchframeworkcode['framework_codedetail'].'</textarea>';
                echo '</div>';
                echo '<br>'; 
                echo '<div> FrameworkType: '; 
                    echo '<select required name="framework_codetype" id="">';
                    echo '<option readonly value="'.$rs_searchframeworkcode['framework_codetype'].'">'.$rs_searchframeworkcode['framework_codetype'].'</option>';
                        echo '<option value="">กรุณาเลือกประเภทภาษาโปรแกรม</option>';
                        echo '<option value="MVC">Type MVC</option>';
                        echo '<option value="ALLMVC">Type ALLMVC</option>';
                        echo '<option value="HARDCODE">Type HARDCODE</option>';
                    echo '</select>'; 
                echo '</div>';
                echo '<br>';
                echo '<div> Update: ';
                    echo '<input type="text" name="framework_lastupdate" readonly value="'.$rs_searchframeworkcode['framework_lastupdate'].'">';
                echo '</div>';
                echo '<br>';
                echo '<div> ';
                    echo '<input type="hidden" name="framework_codeid" value="'.$rs_searchframeworkcode['framework_codeid'].'">';
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