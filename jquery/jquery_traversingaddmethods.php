
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("h1").add("p").add("span").css("background-color", "yellow");
		});
	</script>
</head>
<body>

	<h1>Welcome</h1>
	<p>A p element.</p>
	<p>Another p element.</p>

	<span>A span element.</span>
	<span>A span element.</span><br><br>

	<div>This example adds the same css style for both p and span elements, as the existing h1 element.</div>
	
</body>
</html>

