<meta charset="utf-8" />
<?php
//1. เชื่อมต่อ database: 
include('conn.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//2. query ข้อมูลจากตาราง tb_member: 
$query = "SELECT * FROM tbl_q ORDER BY qid ASC";
//echo $query;
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result . 
$result = mysqli_query($conn, $query)  or die("Error:" . mysqli_error($query));
// $numrows = mysqli_num_rows($result);
// echo $numrows;
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล: 

if (empty($_POST['arrsub']))
{

  echo "<table border='1' align='center' width='300'>";
//หัวข้อตาราง
  echo "<tr align='center' bgcolor='#CCCCCC'>
  <td>qid</td>
  <td>item</td>
  <td>score</td>
  <td>update</td>
  </tr>";

  foreach ($result as $row) 
  {

    $Q_qid = $row['qid'];
    $Q_qitem = $row["qitem"];
    $Q_qscore = $row["qscore"];

    echo "<form method='post'>";
    echo "<tr>";
    echo "<td align='center'>" .$Q_qid.  "</td> ";
    echo "<td align='center'>" .$Q_qitem.  "</td> "; 
    echo "<td align='center'>" .$Q_qscore.  "</td> ";
    //ส่งแบบ array value & key  , key คือไอดี (pk), value คือคะแนนใหม่ที่ต้องการอัพเดท *สังเกตตรง name & value
    echo "<td align='center'> <input type='number' name='update_score[$Q_qid]' value='$Q_qscore' min='0' max='5'></td>"; 
    echo "</tr>";
  }
  echo "<tr>";
  echo "<td colspan='3' align='right'> 
  ปรับปรุงคะแนน <input type='submit' name='arrsub' value='Update'> 
  </td>";
  echo "<tr>";
  echo '</form>';
  echo "</table>";

//5. close connection
  mysqli_close($conn);

}


else if (isset($_POST['arrsub'])) 
{

  include('conn.php');
  // print array ออกมาดู
  // echo '<pre>';
  // print_r($_POST);
  // echo '</pre>';
  //exit;
  $U_update_Score = $_POST['update_score'];
  foreach($U_update_Score  as $item=>$value)
  {
  //item คือid ประเมิน pk ในตาราง
  //value คือคะแนนประเมิน *ที่อัพเดท
    $sql_s = "UPDATE tbl_q SET qscore=$value WHERE qid=$item";
    $result_t = mysqli_query($conn, $sql_s) or die ("Error in query: $sql_s " . mysqli_error());
  //แสดงผลลัพธ์การอัพเดท
    //echo $sql_s;
    //echo '<hr>';
  }

//exit;
  mysqli_close($conn);

  if($result_t)
  {
    echo "<script type='text/javascript'>";
    echo  "alert('SAVE!!');";
    echo "window.location='listmultiple.php';";
    echo "</script>";
  }
  else
  {
    echo "<script type='text/javascript'>";
    echo "window.location='listmultiple.php';";
    echo "</script>";
  }


}

?>