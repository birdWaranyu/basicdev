
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("p:only-child").css("background-color", "yellow");
		});
	</script>
</head>
<body>

	<div style="border:1px solid;">
		<p>The first child.</p>
		<p>The last child.</p>
	</div><br>

	<div style="border:1px solid;">
		<p>The only child.</p>
	</div><br>

	<div style="border:1px solid;">
		<span>The first child.</span>
		<p>The last child.</p>
	</div><br>
	
</body>
</html>


