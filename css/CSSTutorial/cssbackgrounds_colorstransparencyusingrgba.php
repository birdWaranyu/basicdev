
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		div {
			background: rgb(0, 128, 0);
		}

		div.first {
			background: rgba(0, 128, 0, 0.1);
		}

		div.second {
			background: rgba(0, 128, 0, 0.3);
		}

		div.third {
			background: rgba(0, 128, 0, 0.6);
		}
	</style>
</head>
<body>

	<h1>Transparent Box</h1>
	<p>With opacity:</p>

	<div style="opacity:0.1;">
		<h1>10% opacity</h1>
	</div>

	<div style="opacity:0.3;">
		<h1>30% opacity</h1>
	</div>

	<div style="opacity:0.6;">
		<h1>60% opacity</h1>
	</div>

	<div>
		<h1>opacity 1</h1>
	</div>

	<p>With RGBA color values:</p>
	<div class="first">
		<h1>10% opacity</h1>
	</div>

	<div class="second">
		<h1>30% opacity</h1>
	</div>

	<div class="third">
		<h1>60% opacity</h1>
	</div>

	<div>
		<h1>default</h1>
	</div>

	<p>Notice how the text gets transparent as well as the background color when using the opacity property.</p>
	
</body>
</html>

