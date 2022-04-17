
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("p:first-of-type").css("background-color", "yellow");
		});
	</script>
</head>
<body>

	<p>The first paragraph in body.</p>

	<div style="border:1px solid;">
		<p>The first paragraph in div1.</p>
		<p>The last paragraph in div2.</p>
	</div><br>

	<div style="border:1px solid;">
		<span>This is a span element.</span>
		<p>The first paragraph in another div1.</p>
		<p>The last paragraph in another div2.</p>
	</div>

	<p>The last paragraph in body.</p>
	
</body>
</html>

