
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Css Align Content Propety</title>
	<style>
		div { width: 100px; height: 100px; background: red; position: relative; animation: mymove 5s infinite;animation-timing-function: linear; }

		@keyframes mymove {
			from {left: 0px;}
			to {left: 200px;}
		}
	</style>
</head>
<body>

	<h1>The animation-timing-function Property</h1>

	<p>Play an animation with the same speed from beginning to end:</p>
	<div></div>
	<p><strong>Note:</strong> The animation-timing-function property is not supported in Internet Explorer 9 and earlier versions.</p>

</body>
</html>