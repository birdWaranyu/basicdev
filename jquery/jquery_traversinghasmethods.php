
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("p").has("span").css("background-color", "yellow");
		});
	</script>
</head>
<body>

	<h1>Welcome to My Homepage</h1>

	<p>My <span>name</span> is Donald.</p>
	<p>I live in <span>Duckburg</span>.</p>
	<p>My best friend is Mickey.</p>
	
</body>
</html>


