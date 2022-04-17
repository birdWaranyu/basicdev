<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Session แบบ print_r(array)</title>
</head>
<body>
	
	<?php  

	session_start();

	$_SESSION['id'] = 1;
	$_SESSION['name'] = "Waranyu";
	$_SESSION['surname'] = "Arun";
	$_SESSION['age'] = 20;

	// ปริ้น array แบบที่ 1
	//print_r($_SESSION);

	// ปริ้น array แบบที่ 2 เพื่อดูง่ายยิ่งขึ้น
	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';

	?>

</body>
</html>