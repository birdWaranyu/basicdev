<meta charset="utf-8" />
<!DOCTYPE html>
<html>
<head>
	<title>:: ตย.ระบบบันทึกการประเมิน  devbanban.com ::</title>
</head>
<body>
	<h3>:: ตย.ระบบบันทึกการประเมิน  devbanban.com ::</h3>
	<form  method="post" name="form1"   id="form1">
		<style>
			input[type=number]{
				width: 60px;
			}
		</style>
		<?php if (empty($_POST['button'])) { ?>
			<p> ข้อ 1 กรุณากรอกคะแนนระหว่าง 0-5:
				<input type='number' name='score[1]' value="0" min="0" max="5"/>
			</p>
			<p> ข้อ 2 กรุณากรอกคะแนนระหว่าง 0-5:
				<input type='number' name='score[2]' value="0" min="0" max="5"/>
			</p>
			<p> ข้อ 3 กรุณากรอกคะแนนระหว่าง 0-5:
				<input type='number' name='score[3]' value="0" min="0" max="5"/>
			</p>
			<p> ข้อ 4 กรุณากรอกคะแนนระหว่าง 0-5:
				<input type='number' name='score[4]' value="0" min="0" max="5"/>
			</p>
			<p> ข้อ 5 กรุณากรอกคะแนนระหว่าง 0-5:
				<input type='number' name='score[5]' value="0" min="0" max="5"/>
			</p>
			<input type='submit' name='button' id='button' value='SAVE' />
			<br><br>
			<a href="listmultiple.php">หน้าแสดงข้อมูลคำถาม</a>
		</form>
		
		<?php 

	} else if (isset($_POST['button'])) {

		$S_score = $_POST['score'];

		include('conn.php');
		// print array ออกมาดู
		echo '<pre>';
		print_r($_POST);
		echo '</pre>';
		//exit;

		$qmid=1; //id emp รหัสพนง. เอาไปทำต่อนะจ้ะ
		foreach($S_score  as $item=>$value){
		//item คือข้อคำถามประเมิน
		//value คือคะแนนประเมิน
			$sql = "INSERT INTO  tbl_q
			(qitem, qscore, qmid)
			VALUES
			($item, '$value', '$qmid')
			";
			$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());

			echo $sql;
			echo '<hr>';

		}

		//exit;
		mysqli_close($conn);
		if($result)
		{
			echo "<script type='text/javascript'>";
			echo  "alert('SAVE!!');";
			echo "window.location='formmultiple.php';";
			echo "</script>";
		}
		else
		{
			echo "<script type='text/javascript'>";
			echo "window.location='formmultiple.php';";
			echo "</script>";
		}


	} 

?>


</body>
</html>