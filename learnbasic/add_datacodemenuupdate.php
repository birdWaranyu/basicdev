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

    echo '<pre>'; print_r($_POST); echo '</pre>';

    if (isset($_POST['CheckDataEdit'])) {
        $CodemunuName_edit = $_POST['codemunu_name']; 
        $StatusCode_edit = $_POST['status_m_code'];  
        $CodemunuId_edit = $_POST['codemunu_id'];
        //$CodeTypeFrame_edit = $_POST['codetype_frame'];
        $CodemunulastUpdate = date('Y-m-d H:i:s');
        // , codetype_frame = '".$CodeTypeFrame_edit."'
        $sql_updatecodemenu = "UPDATE menu_code SET codemunu_name = '".$CodemunuName_edit."'
                                , status_m_code = '".$StatusCode_edit."' , codemunu_last_update = '".$CodemunulastUpdate."'
                                WHERE codemunu_id = '".$CodemunuId_edit."'; ";
        //echo 'sql_updatecodemenu <br> '.$sql_updatecodemenu.'<br>';                     
        $result_codemenu = mysqli_query($newcon,$sql_updatecodemenu)or die(mysqli_error($newcon));
        if ($result_codemenu) {
            echo "<script>alert('อัพเดทข้อมูลสำเร็จ');window.location='add_datacode.php';</script>";
        }
        else {
            echo "<script>alert('อัทเดทข้อมูลไม่สำเร็จ เกิดข้อผิดพลาด');window.location='index.php';</script>";
        }
    }

?>

</body>
</html>