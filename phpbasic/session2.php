<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Session แบบ var_dump(array)</title>
</head>
<body>

	<?php  

	session_start();

	$_SESSION['id'] = 1;
	$_SESSION['name'] = "Waranyu";
	$_SESSION['surname'] = "Arun";
	$_SESSION['age'] = 20;

	// ปริ้น var dump แบบที่ 1 มีบอกประเภทของตัวแปร เช่น id เป็น int(1) คือมี = 1
	//var_dump($_SESSION);

	// ปริ้น var dump แบบที่ 2 ดูเรียบร้อยและง่ายยื่งขึ้น
	echo '<pre>';
	var_dump($_SESSION);
	echo '</pre>';


	?>
	
</body>
</html>