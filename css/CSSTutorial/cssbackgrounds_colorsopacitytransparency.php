
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		div {
			background-color: green;
		}

		div.first {
			opacity: 0.1;
		}

		div.second {
			opacity: 0.3;
		}

		div.third {
			opacity: 0.6;
		}
	</style>
</head>
<body>

	<h1>Transparent Box</h1>
	<p>When using the opacity property to add transparency to the background of an element, all of its child elements become transparent as well. This can make the text inside a fully transparent element hard to read:</p>

	<div class="first">
		<h1>opacity 0.1</h1>
	</div>

	<div class="second">
		<h1>opacity 0.3</h1>
	</div>

	<div class="third">
		<h1>opacity 0.6</h1>
	</div>

	<div>
		<h1>opacity 1 (default)</h1>
	</div>
	
</body>
</html>


