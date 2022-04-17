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
        <div class="cls_center"> แบบฟอร์มเพิ่มข้อมูล หมวดหมู่หลักสูตร </div>
    <br>
    <div class="cls_center">
        <form method="POST" action="add_datainsert.php" name="formdata_code">
            <div> MENUNAME: <input type="text" name="codemunu_name" required placeholder="กรอกข้อมูล"> </div>
            <br> 
            <div> MENUSTATUS: 
                <select required name="status_m_code" id="">
                    <option value="">กรุณาเลือกประเภทภาษาโปรแกรม</option>
                    <option value="PHP">ภาษา PHP</option>
                    <option value="HTML">ภาษา HTML</option>
                    <option value="CSS">ภาษา CSS</option>
                    <option value="JQUERY">ภาษา JQUERY</option>
                    <option value="JAVASCRIPT">ภาษา JAVASCRIPT</option>
                    <option value="SQL">ภาษา SQL</option>
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

    $sql_select = "SELECT * FROM menu_code ORDER BY codemunu_id ASC; ";
    $result_select = mysqli_query($newcon,$sql_select)or die(mysqli_error($newcon)); 
    $row_select = mysqli_num_rows($result_select);
    if ($row_select > 0) {
        echo nl2br("\n\n");
        echo '<div class="cls_center"> ตารางข้อมูลหมวดหลักสูตร ภาษาโปรแกรม </div>';
        echo nl2br("\n");
        echo '<div class="cls_center"><a class="cls_text_linknone" href="index.php">กลับหน้าหลัก</a></div>';
        echo nl2br("\n");
        echo '<table border="1" cellpadding = "0" cellspacing = "0" width = "800" align="center" class="cls_center">';
        echo '<tr>';
        echo '<th class="cls_header">ID</th>';
        echo '<th class="cls_header">Name</th>';
        echo '<th class="cls_header">Framework_type</th>';
        echo '<th class="cls_header">Status</th>';
        echo '<th class="cls_header">lastUpdate</th>';
        echo '<th class="cls_header">edit code</th>';
        echo '<th class="cls_header">delete code</th>';
        echo '</tr>';
        $num = 0;
        while($rs_select = mysqli_fetch_array($result_select)) {
            //echo '<pre>'; print_r($rs_select); echo '</pre>';
            $num++;
            $CodemunuId = $rs_select['codemunu_id'];
            $codemunuName = $rs_select['codemunu_name'];
            $codemunulastUpdate = $rs_select['codemunu_last_update'];
            $statusCode = $rs_select['status_m_code'];
            $CodeTypeFrame = $rs_select['codetype_frame'];
            echo '<tr>';
            echo '<td class="cls_content">'.$num.'</td>';
            echo '<td class="cls_content">'.$codemunuName.'</td>';
            echo '<td class="cls_content">'.$CodeTypeFrame.'</td>';
            echo '<td class="cls_content">'.$statusCode.'</td>';
            echo '<td class="cls_content">'.$codemunulastUpdate.'</td>';
            echo '<td class="cls_content">
            <a title="คลิกแก้ไข '.$codemunuName.' ที่นี้ " class="cls_text_linknone" href="edit_datacode.php?IDEditCMenu='.$CodemunuId.'">แก้ไข</a>
            </td>';
            echo '<td class="cls_content">
            <a title="คลิกลบ '.$codemunuName.' ที่นี้ " class="cls_text_linknone" href="dele_datacode.php?IDDelCMenu='.$CodemunuId.'">ลบ</a>
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