<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jquery Element Style</title>
	<script src="jquery/jquery-3.5.1.min.js"></script>
	<script>
		$(function() {
			
			// วิธีเขียนแบบที่1
			// $("p").click(function() {
			// 	$("p").css("background","yellow");
			// 	$("p").css("color","red");
			// 	$("p").css("font-size","50px");
			// 	$("p").css("border","1px solid black");
			// 	$("p").css("padding","2px");
			// });

			// วิธีเขียนแบบที่2
			// $("p").css("background","yellow");
			// $("p").css("color","red");
			// $("p").css("font-size","50px");
			// $("p").css("border","1px solid black");
			// $("p").css("padding","2px");

			// วิธีเขียนแบบที่3
			$("p").css("background","yellow")
				  .css("color","red")
			      .css("font-size","50px")
			      .css("border","1px solid black")
			      .css("padding","2px");

		});
	</script>
</head>
<body>

	<p>Kongrunsiam</p>

	<a href="jquerylink.php">กลับหน้าหลัก</a>

</body>
</html>