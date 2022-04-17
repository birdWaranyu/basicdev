
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function() {
			$("#btn2").click(function() {
				$("#test").hide(1000);
			});
			$("#btn1").click(function() {
				alert("HTML: " + $("#test").html());
			});
		});
	</script>
</head>
<body>

	<p id="test">This is some <b>bold</b> text in a paragraph.</p>

	<button id="btn1">Hide HTML</button>
	<button id="btn2">Show HTML</button>
	
</body>
</html>


