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

    <br>
        <div class="cls_center"> แบบฟอร์มเพิ่มข้อมูล ประเภท CodeFrameWork </div>
    <br>
    <div class="cls_center">
        <form method="POST" action="add_codeframeworkinsert.php" name="formdata_frameworkcode">
            <div> FrameworkName: 
                <select required name="framework_codename" id="">
                    <option value="">กรุณาเลือกประเภทframeworkcode</option>
                    <option value="PHPCODEIGNITER">PHP Codeigniter</option>
                    <option value="PHPLARAVEL">PHP LARAVEL</option>
                    <option value="PHPANGULAR">PHP ANGULAR</option>
                    <option value="PHPSYMFONYSY">PHP SYMFONYSY</option>
                    <option value="PHPCAKEPHP">PHP CAKEPHP</option>
                    <option value="PHPBASICTOTAL">PHP BASICTOTAL</option>
                    <option value="PHPOOP">PHP OOP</option>
                    <option value="PHPPDO">PHP PDO</option>
                    <option value="PHPMYSQL">PHP MYSQL</option>
                    <option value="PHPMYSQLI">PHP MYSQLI</option>
                    <option value="CSSBOOTSTRAP">CSS BOOTSTRAP</option>
                    <option value="CSSFOUNDATION">CSS FOUNDATION</option>
                    <option value="CSSPURE">CSS PURE</option>
                    <option value="CSSBULMA">CSS BULMA</option>
                    <option value="CSSSEMANTICUI">CSS SEMANTICUI</option>
                    <option value="CSSUIKIT">CSS UIKIT</option>
                    <option value="CSSMATERIALIZECSS">CSS MATERIALIZECSS</option>
                    <option value="CSSMILLIGRAM">CSS MILLIGRAM</option>
                    <option value="CSSSKELETON">CSS SKELETON</option>
                    <option value="CSSTAILWINDCSS">CSS TAILWINDCSS</option>
                </select> 
            </div>
            <br> 
            <div> FrameworkDetail: 
                <textarea rows="4" name="framework_codedetail" required placeholder="กรอกรายละเอีดยเพิ่มเติม" cols="50"></textarea>
            </div>
            <br> 
            <div> FrameworkType: 
                <select required name="framework_codetype" id="">
                    <option value="">กรุณาเลือกประเภทภาษาโปรแกรม</option>
                    <option value="MVC">Type MVC</option>
                    <option value="ALLMVC">Type ALLMVC</option>
                    <option value="HARDCODE">Type HARDCODE</option>
                </select> 
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

    $sql_select = "SELECT * FROM tr_frameworkcode ORDER BY framework_codeid ASC; ";
    $result_select = mysqli_query($newcon,$sql_select)or die(mysqli_error($newcon)); 
    $row_select = mysqli_num_rows($result_select);
    if ($row_select > 0) {
        echo nl2br("\n\n");
        echo '<div class="cls_center"> ตารางข้อมูลประเภท FrameWorkCode Data </div>';
        echo nl2br("\n");
        echo '<div class="cls_center"><a class="cls_text_linknone" href="index.php">กลับหน้าหลัก</a></div>';
        echo nl2br("\n");
        echo '<table border="1" cellpadding = "0" cellspacing = "0" width = "800" align="center" class="cls_center">';
        echo '<tr>';
        echo '<th class="cls_header">ID</th>';
        echo '<th class="cls_header">FrameworkCodeName</th>';
        echo '<th class="cls_header">FrameworkCodeDetail</th>';
        echo '<th class="cls_header">FrameworkCodeType</th>';
        echo '<th class="cls_header">FrameworkLastUpdate</th>';
        echo '<th class="cls_header">edit code</th>';
        echo '<th class="cls_header">delete code</th>';
        echo '</tr>';
        $num = 0;
        while($rs_select = mysqli_fetch_array($result_select)) {
            //echo '<pre>'; print_r($rs_select); echo '</pre>';
            $num++;
            $FrameworkcodeId = $rs_select['framework_codeid'];
            $FrameworkcodeName = $rs_select['framework_codename'];
            $FrameworkcodeDetail = $rs_select['framework_codedetail'];
            $FrameworkcodeType = $rs_select['framework_codetype'];
            $FrameworklastUpdate = $rs_select['framework_lastupdate'];
            echo '<tr>';
            echo '<td class="cls_content">'.$num.'</td>';
            echo '<td class="cls_content">'.$FrameworkcodeName.'</td>';
            echo '<td class="cls_content">'.$FrameworkcodeDetail.'</td>';
            echo '<td class="cls_content">'.$FrameworkcodeType.'</td>';
            echo '<td class="cls_content">'.$FrameworklastUpdate.'</td>';
            echo '<td class="cls_content">
            <a title="คลิกแก้ไข '.$FrameworkcodeName.' ที่นี้ " class="cls_text_linknone" href="edit_frameworkcode.php?IDEditFrmC='.$FrameworkcodeId.'">แก้ไข</a>
            </td>';
            echo '<td class="cls_content">
            <a title="คลิกลบ '.$FrameworkcodeName.' ที่นี้ " class="cls_text_linknone" href="dele_frameworkcode.php?IDDelFrmC='.$FrameworkcodeId.'">ลบ</a>
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