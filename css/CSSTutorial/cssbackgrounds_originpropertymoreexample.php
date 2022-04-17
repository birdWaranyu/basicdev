
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		#example1 {
			border: 10px dashed black;
			padding: 25px;
			background: url(img_tree.gif), url(paper.gif);
			background-repeat: no-repeat;
			background-origin: content-box, padding-box;
		}

		#example2 {
			border: 10px dashed black;
			padding: 25px;
			background: url(img_tree.gif), url(paper.gif);
			background-repeat: no-repeat;
			background-origin: content-box, border-box;
		}

		#example3 {
			border: 10px dashed black;
			padding: 25px;
			background: url(img_tree.gif), url(paper.gif);
			background-repeat: no-repeat;
			background-origin: content-box, content-box;
		}
	</style>
</head>
<body>

	<h2>background-origin: content-box, padding-box:</h2>
	<div id="example1">
		<h2>Hello World</h2>
		<p>The "paper.gif" background image starts from the upper left corner of the padding edge.</p>
		<p>The "img_tree.gif" background image starts from the upper left corner of the content.</p>
	</div>

	<h2>background-origin: content-box, border-box:</h2>
	<div id="example2">
		<h2>Hello World</h2>
		<p>The "paper.gif" background image starts from the upper left corner of the border.</p>
		<p>The "img_tree.gif" background image starts from the upper left corner of the content.</p>
	</div>

	<h2>background-origin: content-box, content-box:</h2>
	<div id="example3">
		<h2>Hello World</h2>
		<p>Both background images starts from the upper left corner of the content.</p>
	</div>
	
</body>
</html>

