
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Css Element</title>
	<style>
		::-moz-selection { /* Code for Firefox */ color: red; background: yellow; }

		::selection { color: red; background: yellow; }
	</style>
</head>
<body>
	
	<h1>Select some text on this page:</h1>

	<p>This is a paragraph.</p>
	<div>This is some text in a div element.</div>

	<p><strong>Note:</strong> ::selection is not supported in Internet Explorer 8 and earlier versions.</p>

</body>
</html>