
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Css Element</title>
	<style>
		[lang|=en] { background: yellow; }
	</style>
</head>
<body>
	
	<div>The links with a target attribute gets a yellow background: (Attribute|=value)</div>
	<p lang="en">Hello!</p>
	<p lang="en-us">Hi!</p>
	<p lang="en-gb">Ello!</p>
	<p lang="us">Hi!</p>
	<p lang="no">Hei!</p>

	<p><b>Note:</b> For [<i>attribute</i>|=<i>value</i>] to work in IE8 and earlier, a DOCTYPE must be declared.</p>


</body>
</html>