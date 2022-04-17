
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		a:link {
			background-color: yellow;
		}

		a:visited {
			background-color: cyan;
		}

		a:hover {
			background-color: lightgreen;
		}

		a:active {
			background-color: hotpink;
		} 
	</style>
</head>
<body>
	
	<p><b><a href="default.asp" target="_blank">This is a link</a></b></p>
	<p><b>Note:</b> a:hover MUST come after a:link and a:visited in the CSS definition in order to be effective.</p>
	<p><b>Note:</b> a:active MUST come after a:hover in the CSS definition in order to be effective.</p>

</body>
</html>

