
<html>
<meta charset="utf-8">
<head>
<title>ThaiCreate.Com Tutorial</title>
</head>
<body>
<form name="form1" method="post" action="PageFiles2.php" enctype="multipart/form-data">
	<input type="file" name="filUpload" accept=".csv">
	<input name="btnSubmit" type="submit" value="Submit">
</form>
<?php
	//echo "a";
	$strFileName = "myfile/ADEN_Agreement_630804_1015_SS404665 55.csv";
	$rec = array(0,0,0);
	$objFopen = fopen($strFileName, "r");
	if ($objFopen) {
		while (!feof($objFopen)) {
			$file = fgets($objFopen, 4096);
			if($rec[0] == 0){ $rec[0]++;  continue; }
			else {
				echo $file;
			}
		}
		fclose($objFopen);
	} else {
		echo "False";
	}


?>
</body>
</html>