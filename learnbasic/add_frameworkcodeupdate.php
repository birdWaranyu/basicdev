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
        $FrameworkcodeName_edit = $_POST['framework_codename'];
        $FrameworkCodeDetail_edit = $_POST['framework_codedetail'];
        $FrameworkCodeType_edit = $_POST['framework_codetype'];
        $FrameworklastUpdate_edit = date('Y-m-d H:i:s');
        $FrameworkCodeId_edit = $_POST['framework_codeid'];
        $sql_updatecodeframework = "UPDATE tr_frameworkcode SET framework_codename = '".$FrameworkcodeName_edit."'
                                , framework_codedetail = '".$FrameworkCodeDetail_edit."' , framework_codetype = '".$FrameworkCodeType_edit."'
                                , framework_lastupdate = '".$FrameworklastUpdate_edit."'
                                WHERE framework_codeid = '".$FrameworkCodeId_edit."'; ";
        //echo 'sql_updatecodeframework <br> '.$sql_updatecodeframework.'<br>';                     
        $result_frameworkcode = mysqli_query($newcon,$sql_updatecodeframework)or die(mysqli_error($newcon));
        if ($result_frameworkcode) {
            echo "<script>alert('อัพเดทข้อมูลสำเร็จ');window.location='add_codeframework.php';</script>";
        }
        else {
            echo "<script>alert('อัทเดทข้อมูลไม่สำเร็จ เกิดข้อผิดพลาด');window.location='index.php';</script>";
        }
    }

?>

</body>
</html>