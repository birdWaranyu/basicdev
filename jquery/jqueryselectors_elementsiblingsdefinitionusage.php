
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("div ~ p").css("background-color", "yellow");
		});
	</script>
</head>
<body>

	<h2>What will $("div ~ p") select?</h2>

	<p>This is a p element (will not be selected).</p>
	<div style="border:1px solid black;padding:10px;">This is a div element.</div>
	<p>This is a p element.</p>
	<p>This is another p element.</p>

	<div style="border:1px solid black;padding:10px;">
		<p>This is a p element inside a div element (will not be selected).</p></div>

		<h2>This is a heading</h2>
		<p>This is a p element.</p>

</body>
</html>

