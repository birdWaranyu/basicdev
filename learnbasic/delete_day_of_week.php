
<?php

    header('Content-Type: text/html; charset=utf-8');

    include 'connect/connection.php';

    if (isset($_GET['IDDele_Carendar'])) {
        $IDDele_Carendar = $_GET['IDDele_Carendar'];
        echo 'IDDele_Carendar '.$IDDele_Carendar.'<br>';
        $sql_delecarendar = "DELETE FROM tb_activity_calendar WHERE id = '".$IDDele_Carendar."'; ";
        echo 'sql_delecarendar <br> '.$sql_delecarendar.'<br>';
        $result_delecarendar = mysqli_query($newcon,$sql_delecarendar)or die(mysqli_error($newcon));
        if ($result_delecarendar) {
            echo "<script>alert('ลบข้อมูลสำเร็จ');window.location='day_of_week.php';</script>";
        }
        else {
            echo "<script>alert('ลบข้อมูลไม่สำเร็จ เกิดข้อผิดพลาด');window.location='day_of_week.php';</script>";
        }
    }

?>
