
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		/* unvisited link */
		a:link {
			color: red;
		}

		/* visited link */
		a:visited {
			color: green;
		}

		/* mouse over link */
		a:hover {
			color: hotpink;
		}

		/* selected link */
		a:active {
			color: blue;
		}
	</style>
</head>
<body>

	<p><b><a href="default.asp" target="_blank">This is a link</a></b></p>
	<p><b>Note:</b> a:hover MUST come after a:link and a:visited in the CSS definition in order to be effective.</p>
	<p><b>Note:</b> a:active MUST come after a:hover in the CSS definition in order to be effective.</p>
	
</body>
</html>

