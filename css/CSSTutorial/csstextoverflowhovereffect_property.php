
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style> 
		div.a {
			white-space: nowrap; 
			width: 100px; 
			overflow: hidden;
			text-overflow: ellipsis;
			border: 1px solid #000000;
		}

		div.a:hover {
			overflow: visible;
		}
	</style>
</head>
<body>

	<h1>The text-overflow Property</h1>

	<p>Hover over the div below, to see the entire text.</p>

	<div class="a">This is some long text that will not fit in the box.</div>
	
</body>
</html>

