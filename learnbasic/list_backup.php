<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>List</title>
	<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.6.0/themes/prism.min.css" rel="stylesheet">
	<link href="../code-box-copy/css/code-box-copy.css" rel="stylesheet">
	<!-- <script src="js/jquery-2.2.3.min.js"></script> -->
	<script src="../code-box-copy/js/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.6.0/prism.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.7.1/clipboard.min.js"></script>
	<script src="../code-box-copy/js/code-box-copy.js"></script>
	<style>
		body { margin: 0; padding: 0; background-color: #fff; font-family: sans-serif; color: #333; font-size: 100%; line-height: 1.5; }
		.container { width: 960px; max-width: 100%; margin-left: auto; margin-right: auto; padding-left: 15px; padding-right: 15px; -webkit-box-sizing: border-box; box-sizing: border-box; }
		h1 { margin: 0; padding: 1em 0; font-size: 32px; font-weight: normal; text-align: center; color: #fff; }
		h2 { margin: 2em 0 1.5em 0; padding: 0 0 0.15em 0; font-size: 26px; font-weight: bold; border-bottom: 3px solid #eee; }
		h3 { margin: 2em 0 0.5em 0; padding: 0; font-size: 20px; font-weight: bold; }
		p { margin: 2em 0 1em 0; padding: 0; }
		h3 + p { margin-top: 0.5em; }
		ul { margin: 0 0 0 1.25em; padding: 0; line-height: 1.875; }
		a { text-decoration: none; color: #07a; padding: 5px 6px; background-color: #f5f5f5; -webkit-transition: background-color 0.2s linear; transition: background-color 0.2s linear; }
		a:hover { text-decoration: none; background-color: #07a; color: #fff; }
		.header { background-color: #257; -webkit-box-shadow: 0 0 50px rgba(0, 0, 0, 0.05); box-shadow: 0 0 50px rgba(0, 0, 0, 0.05); }
		.main { padding-top: 3em; padding-bottom: 6em; }
		.footer { padding: 2em 1em 1.25em 1em; background-color: #f5f5f5; border-top: 1px solid #eee; text-align: center; }
	</style>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#newsub").click(function() {				
				var plist = $("#listpro").val();
				if (plist.length == 0) {
					alert("ไม่สำเร็จ");
				}					
			});
			$("#newsub").on('click', function() {
				var listsubnew = $("#newsub").val();
				if (confirm("คุณต้องการบันทึกข้อมูลเลยหรือไหม ?")) {
					return true;
				}
				else {
					return false;
				}
			});
		});
	</script>
</head>
<body>

	<?php  

	$Id = $_GET['basic_id'];
	$Name = $_GET['basic_name'];
	$TagCodeid = $_GET['tag_code_id'];
	$RefTagCodeId = $_GET['ref_tag_code_id'];
	$TagCodeName = $_GET['tag_code_name'];
	$Desctition = $_GET['basic_desctition'];

	if ($TagCodeName == "HTML") {

		if (empty($_POST['titlenew'])) {

			echo $TagCodeid.' - '.$TagCodeName;

			echo "<form name='frmslecthtml' id='myformhtml' method='post'><select required id='listpro' name='".$TagCodeid."'>
			<option value=''>กรุณาเลือกหลักสูตร html</option>
			<option value='".$Id."'>".$Name."</option>
			</select><br><input type='submit' id='newsub' name='titlenew' value='ตกลง'></form>";

		} else if (isset($_POST['titlenew'])) {

			echo '<div class="header">
			<div class="container">
			<h1> '.$TagCodeName.' Code Box Copy Demos</h1>
			</div>
			</div>
			<div class="jquery-script-ads" style="margin-top:50px" align="center">

			</div>

			<div class="main">
			<div class="container">

			<h2>Usage</h2>
			<h3>Sources</h3>
			<p>Put the following lines below to the head section. Do not forget to use the copy function :)</p>

			<div class="code-box-copy">
			<button class="code-box-copy__btn" data-clipboard-target="#example-head" title="Copy"></button>';
			include 'connect/connection.php';
			$sqlcopy = "SELECT basic_id,basic_desctition,basic_name 
						FROM basic_tag_code WHERE basic_desctition='".$Desctition."' ORDER BY basic_id ASC;";
			echo $sqlcopy;
			$resultcopy = mysqli_query($newcon,$sqlcopy)or die("Error sqli copy").mysqli_error(); 
			while ($rowcopy = mysqli_fetch_array($resultcopy)) {
				$DdesctitionCopy = $rowcopy['basic_desctition'];
				$NameCopy = $rowcopy['basic_name'];
				$IdCopy = $rowcopy['basic_id'];	
			echo '<pre>
			<code class="language-html" id="example-head">
				'.$IdCopy.' <br>
				'.$NameCopy.' <br>
				'.$DdesctitionCopy.'
			</code>
			</pre>';
			}
			echo '<a href="index.php">กลับหน้าหลัก</a>
			</div>

			</div>
			</div>';
		} 

	} 
	else if ($TagCodeName == "PHP") {

		if (empty($_POST['titlenew'])) {

			echo $TagCodeid.' - '.$TagCodeName;

			echo "<form name='frmslect' id='myform' method='post'><select required id='listpro' name='".$TagCodeid."'>
			<option value=''>กรุณาเลือกหลักสูตร php</option>
			<option value='".$Id."'>".$Name."</option>
			</select><br><input type='submit' id='newsub' name='titlenew' value='ตกลง'></form>";

		} else if (isset($_POST['titlenew'])) {
		//echo 'a';
			echo '<div class="header">
			<div class="container">
			<h1> '.$TagCodeName.' Code Box Copy Demos</h1>
			</div>
			</div>
			<div class="jquery-script-ads" style="margin-top:50px" align="center">

			</div>

			<div class="main">
			<div class="container">

			<h2>Usage</h2>
			<h3>Sources</h3>
			<p>Put the following lines below to the head section. Do not forget to use the copy function :)</p>

			<div class="code-box-copy">
			<button class="code-box-copy__btn" data-clipboard-target="#example-head" title="Copy"></button>';
			$string = htmlentities ( "<b>bamboo</b>" ).'<br>';
			echo html_entity_decode ( $string );
			include 'connect/connection.php';
			$sqlcopy1 = "SELECT basic_id,basic_desctition,basic_name 
						FROM basic_tag_code WHERE basic_desctition='".$Desctition."' ORDER BY basic_id ASC;";
			echo $sqlcopy1;
			$resultcopy1 = mysqli_query($newcon,$sqlcopy1)or die("Error sqli copy").mysqli_error(); 
			while ($rowcopy1 = mysqli_fetch_array($resultcopy1)) {
				$DdesctitionCopy1 = $rowcopy1['basic_desctition'];
				$DdesctitionNew = htmlentities($DdesctitionCopy1);
				$NameCopy1 = $rowcopy1['basic_name'];
				$IdCopy1 = $rowcopy1['basic_id'];	
			echo '<pre>
			<code class="language-html" id="example-head">
				'.$IdCopy1.' <br>
				'.$NameCopy1.' <br>
				<br> '.$DdesctitionNew.' <br>
			</code>
			</pre>';
			}
			echo '<a href="index.php">กลับหน้าหลัก</a>
			</div>

			</div>
			</div>';
		} 

	}
	else {
		//echo 'error';
		echo '<script language="javascript">';
		echo 'alert("ไม่มีข้อมูลหลักสูตรนี้ กรุณาหาเลือกรายการหลักสูตรที่มี ในระบบ")';
		echo '</script>';
		header( "refresh:1;url=index.php" );
	}

	?>

	<script>
		$('.code-box-copy').codeBoxCopy({
			tooltipText: 'CopyCode',
			tooltipShowTime: 1000,
			tooltipFadeInTime: 300,
			tooltipFadeOutTime: 300
		});
	</script>


</body>
</html>

