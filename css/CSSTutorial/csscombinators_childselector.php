
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		div > p {
			background-color: yellow;
		}
	</style>
</head>
<body>

	<div>
		<p>Paragraph 1 in the div.</p>
		<p>Paragraph 2 in the div.</p>
		<section><p>Paragraph 3 in the div.</p></section> <!-- not Child but Descendant -->
		<p>Paragraph 4 in the div.</p>
	</div>

	<p>Paragraph 5. Not in a div.</p>
	<p>Paragraph 6. Not in a div.</p>
	
</body>
</html>

