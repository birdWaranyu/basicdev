
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("div span").css("background-color", "yellow");
		});
	</script>
</head>
<body>

	<h2>What will $("div span") select?</h2>

	<h4>This div element has two descendants, p and span:</h4>
	<div style="border:1px solid black;padding:10px;">
		<p>This is a paragraph.</p>
		<span>This is a text inside a span.</span>
	</div>

	<h4>This div element has also two descendants, p and span:</h4>
	<div style="border:1px solid black;padding:10px;">
		<p>This is a paragraph. <span>This is a span element, inside the paragraph.</span></p>
	</div>
	
</body>
</html>

