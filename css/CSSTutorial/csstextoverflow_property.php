
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style> 
		div.a {
			white-space: nowrap; 
			width: 50px; 
			overflow: hidden;
			text-overflow: clip; 
			border: 1px solid #000000;
		}

		div.b {
			white-space: nowrap; 
			width: 50px; 
			overflow: hidden;
			text-overflow: ellipsis; 
			border: 1px solid #000000;
		}

		div.c {
			white-space: nowrap; 
			width: 50px; 
			overflow: hidden;
			text-overflow: "----"; 
			border: 1px solid #000000;
		}
	</style>
</head>
<body>

	<h1>The text-overflow Property</h1>

	<p>The following two divs contains a text that will not fit in the box.</p>

	<h2>text-overflow: clip (default):</h2>
	<div class="a">Hello world!</div>

	<h2>text-overflow: ellipsis:</h2>
	<div class="b">Hello world!</div>

	<h2>text-overflow: "----" (user defined string):</h2>
	<div class="c">Hello world!</div>

	<p><strong>Note:</strong> The text-overflow: "<em>string</em>" only works in 
	Firefox.</p>
	
</body>
</html>

