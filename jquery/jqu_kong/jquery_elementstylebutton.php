<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jquery Element Style</title>
	<script src="jquery/jquery-3.5.1.min.js"></script>
	<script>
		$(function() {

			$("button").click(function() {
				$("#p1").css("background","green");
				$("#p2").css("background","red");
			    $("#p3").css("background","pink");
			    $("#p4").css("background","blue");
			    	//$("button").css('font-size', '30px');
			    	// this คือ แทนด้วย element การทำงาน ก็คือ แทนปุ่ม ชื่อ button สั่งให้ทำงาน
			    	$(this).css('font-size', '30px');
			});
			
		});
	</script>
</head>
<body>

	<p id="p1">PHP</p>
	<p id="p2">JAVA</p>
	<p id="p3">HTML</p>
	<p id="p4">CSS</p>
	<button>Click</button> <br><br>

	<a href="jquerylink.php">กลับหน้าหลัก</a>

</body>
</html>