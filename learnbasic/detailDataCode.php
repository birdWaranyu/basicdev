
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

    include 'connect/connection.php';   

    $ID_Detail = $_GET['ID_Detail'];
    echo 'ID_Detail '.$ID_Detail.'<br>';

    $sql_menu = "SELECT * FROM menu_code";
    $result_menu = mysqli_query($newcon,$sql_menu)or die(mysqli_error($newcon));
    $rs_menu = mysqli_fetch_assoc($result_menu);
    $MenuCode = $rs_menu['codemunu_name'];

    echo '<div class="header">
			<div class="container">
			<h1> '.$MenuCode.' Code Box Copy Demos</h1>
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
			
            $sqlcopy = "SELECT * FROM menu_code AS m_code
                        INNER JOIN detail_code AS d_code ON d_code.codemunu_id = m_code.codemunu_id
                        INNER JOIN ma_user_course AS m_use_curs ON m_use_curs.course_user_id = d_code.course_user_id
                        WHERE d_code.m_detail_id = '".$ID_Detail."'; ";		
			//echo $sqlcopy;
			$resultcopy = mysqli_query($newcon,$sqlcopy)or die("Error sqli copy").mysqli_error(); 
			while ($rowcopy = mysqli_fetch_array($resultcopy)) {
				//echo '<pre>'; print_r($rowcopy); echo '</pre>';
                $Detail_m_id = $rowcopy['m_detail_id'];
                $Detail_m_subject = $rowcopy['m_detail_subject'];
                $Detail_m_name = $rowcopy['m_detail_name'];
                $Detail_m_textcode = $rowcopy['m_detaIL_textcode'];
                $Detail_m_lastupdate = $rowcopy['m_detail_lastupdate'];
				echo $Detail_m_id.'<br>';
				echo $Detail_m_subject.'<br>';
                echo $Detail_m_name.'<br>';
			echo '<pre>
			<code class="language-html" id="example-head">
				'.htmlspecialchars(trim($Detail_m_textcode)).'
			</code>
			</pre>';
			}
			echo '<a href="add_detail_copycode.php">กลับหน้าหลัก</a>
			</div>

			</div>
			</div>';

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

