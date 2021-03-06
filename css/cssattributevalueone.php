
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Css Element</title>
	<style>
		[title~=flower] { border: 5px solid yellow; }
	</style>
</head>
<body>
	

	<p>The image with the title attribute containing the word "flower" gets a yellow border. (Attribute~=value)</p>

	<img src="klematis.jpg" title="klematis flower" width="150" height="113">
	<img src="img_flwr.gif" title="flowers" width="224" height="162">
	<img src="landscape.jpg" title="landscape" width="160" height="120">

	<p><b>Note:</b> For [<i>attribute</i>~=<i>value</i>] to work in IE8 and earlier, a DOCTYPE must be declared.</p>


</body>
</html>