
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Css Element</title>
	<style>
		input:-moz-read-write { /* For Firefox */ background-color: yellow; }

		input:read-write { background-color: yellow; }  
	</style>
</head>
<body>
	
	<h3>A demonstration of the :read-only selector.</h3>

	<p>A normal input element:<br><input value="hello"></p>

	<p>A readonly input element:<br><input readonly value="hello"></p>

	<p>The :read-only selector selects form elements with a "readonly" attribute.</p>

	<p><strong>Note:</strong> Firefox supports an alternative, the :-moz-read-only property.</p>

</body>
</html>