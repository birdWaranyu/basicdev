<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jquery Element</title>
	<script src="jquery/jquery-3.5.1.min.js"></script>
	<script>
		$(function() {
			
			//Tag
			//Id
			//class

			$("p").click(function() {
				alert("new");
			});

			$("#test").click(function() {
				alert("kongrunsiam");
			});

			$("#p1").click(function() {
				alert("programming");
			});

			$(".class1").click(function() {
				alert("java");
			});

		});
	</script>
</head>
<body>

	<p>New</p>

	<p id="test">Kongrunsiam</p>

	<p id="p1">Programming</p>

	<p class="class1">Java</p>

	<a href="jquerylink.php">กลับหน้าหลัก</a>
	
</body>
</html>