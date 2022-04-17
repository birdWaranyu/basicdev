
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		#example1 {
			border: 10px dashed black;
			padding: 25px;
			background: url(paper.gif);
			background-repeat: no-repeat;
			background-origin: padding-box;
		}

		#example2 {
			border: 10px dashed black;
			padding: 25px;
			background: url(paper.gif);
			background-repeat: no-repeat;
			background-origin: border-box;
		}

		#example3 {
			border: 10px dashed black;
			padding: 25px;
			background: url(paper.gif);
			background-repeat: no-repeat;
			background-origin: content-box;
		}
	</style>
</head>
<body>

	<h2>background-origin: padding-box (default):</h2>
	<div id="example1">
		<h2>Hello World</h2>
		<p>The background image starts from the upper left corner of the padding edge.</p>
	</div>

	<h2>background-origin: border-box:</h2>
	<div id="example2">
		<h2>Hello World</h2>
		<p>The background image starts from the upper left corner of the border.</p>
	</div>

	<h2>background-origin: content-box:</h2>
	<div id="example3">
		<h2>Hello World</h2>
		<p>The background image starts from the upper left corner of the content.</p>
	</div>

	
</body>
</html>
