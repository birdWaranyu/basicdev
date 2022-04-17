
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		#example1 {
			border: 10px dotted black;
			padding: 15px;
			background: lightblue;
			background-clip: border-box;  
		}

		#example2 {
			border: 10px dotted black;
			padding: 15px;
			background: lightblue;
			background-clip: padding-box;
		}

		#example3 {
			border: 10px dotted black;
			padding: 15px;
			background: lightblue;
			background-clip: content-box;
		}
	</style>
</head>
<body>

	<h1>The background-clip Property</h1>

	<p>The background-clip property defines how far the background should extend within an element.</p>

	<p>background-clip: border-box (this is default):</p>
	<div id="example1">
		<p>The background extends behind the border.</p>
	</div>

	<p>background-clip: padding-box:</p>
	<div id="example2">
		<p>The background extends to the inside edge of the border.</p>
	</div>

	<p>background-clip: content-box:</p>
	<div id="example3">
		<p>The background extends to the edge of the content box.</p>
	</div>

	<p><strong>Note:</strong> The background-clip property is not supported in Internet Explorer 8 and earlier versions.</p>
	
</body>
</html>
