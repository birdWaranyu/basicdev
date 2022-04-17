
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		div.ex1 {
			width: 300px;
			background-color: yellow;
		}

		div.ex2 {
			width: 300px;
			padding: 25px;
			box-sizing: border-box;
			background-color: lightblue;
		}
	</style>
</head>
<body>

	<h2>Padding and element width - with box-sizing</h2>

	<div class="ex1">This div is 300px wide.</div>
	<br>

	<div class="ex2">The width of this div remains at 300px, in spite of the 50px of total left and right padding, because of the box-sizing: border-box property.
	</div>
	
</body>
</html>

