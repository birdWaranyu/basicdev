
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		div.ex1 {
			border-style: solid;
			border-color: #0000ff;
		}

		div.ex2 {
			border-style: solid;
			border-color: #ff0000 #0000ff;
		}

		div.ex3 {
			border-style: solid;
			border-color: #ff0000 #00ff00 #0000ff;
		}

		div.ex4 {
			border-style: solid;
			border-color: #ff0000 #00ff00 #0000ff rgb(250,0,255);
		}
	</style>
</head>
<body>

	<div class="ex1">One-colored border!</div>
	<br>

	<div class="ex2">Two-colored border!</div>
	<br>

	<div class="ex3">Three-colored border!</div>
	<br>

	<div class="ex4">Four-colored border!</div>

	<p><strong>Note:</strong> The border-color property does not work if it is used alone. Use the border-style property to set the border first.</p>

	
</body>
</html>

