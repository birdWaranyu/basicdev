

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Css Element</title>
	<style>
		p:first-child { background-color: yellow; }
	</style>
</head>
<body>
	
	<p>This paragraph is the first child of its parent (body).</p>

	<h1>Welcome to My Homepage</h1>
	<p>This paragraph is not the first child of its parent.</p>

	<div>
	  <p>This paragraph is the first child of its parent (div).</p>
	  <p>This paragraph is not the first child of its parent.</p>
	</div>

	<p><b>Note:</b> For :first-child to work in IE8 and earlier, a DOCTYPE must be declared.</p>


</body>
</html>