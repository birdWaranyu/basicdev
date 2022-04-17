
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("p:only-of-type").css("background-color", "yellow");
		});
	</script>
</head>
<body>

	<div style="border:1px solid;">
		<p>The first paragraph.</p>
		<p>The last paragraph.</p>
	</div><br>

	<div style="border:1px solid;">
		<p>The only paragraph.</p>
	</div><br>

	<div style="border:1px solid;">
		<span>This is a span element.</span>
		<p>The only paragraph.</p>
	</div><br>
	
</body>
</html>


