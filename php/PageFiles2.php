<html>
<meta charset="utf-8">
<head>
	<title>ThaiCreate.Com Tutorial</title>
</head>
<body>

	<?php //print_r($_POST); ?>

	<?php

	// $a = "New";
	// $date = date("d-m-Y H:i:s");
	// $NewFile = $_FILES["filUpload"]["name"];
	// $TypeNew = strrchr($NewFile,".");
	// $Filelist = "myfile/".$NewFile.date('YmdHis')."_".$a.$TypeNew;

	$file_img = "/myfile".basename($_FILES["filUpload"]["name"]);
	$upfile = "myfile/".$file_img;	

	if(file_exists($upfile)){

		echo "<p align='center'>Error#2: มีไฟล์ในระบบอยู่แล้ว!!!</p>";
		exit(0);

	}

	if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],$upfile))

	{

		echo "<p align='center'>ไฟล์ ".basename($_FILES["filUpload"]["name"])."อัพโหลดสำเร็จ</p>";

	}

	else

	{

		echo "<p>Error#6:เกิดข้อผิดพลาดในการอัพโลหดไฟล์ภาพ</p>";


	}


// if(move_uploaded_file($_FILES["filUpload"]["tmp_name"], $Filelist)) {
// 	echo "Copy/Upload Complete".' - '.$_FILES["filUpload"]["name"].'<br>';
// 	echo basename($_FILES['filUpload']['name']);
// 	echo "<a href='PageFiles1.php'>กลับหน้าหลัก</a>";
// } 
// else {
// 	echo "False Upload".'<br>';
// 	echo "<a href='PageFiles1.php'>กลับหน้าหลัก</a>";
// }

// if ( file_exists ( "myfile/ADEN_Bluebook_630804_1019_SS404665.csv" ) )
// {
// 	move_uploaded_file($_FILES["filUpload"]["tmp_name"], $Filelist);
// }


// $fp = fopen ( "myfile/ADEN_Bluebook_630804_1019_SS404665.csv", "w" );
// echo $fp;
// fclose($fp);


	?>

</body>
</html>