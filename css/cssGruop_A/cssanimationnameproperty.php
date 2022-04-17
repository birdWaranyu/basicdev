
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Css Align Content Propety</title>
	<style>
		div { width: 100px; height: 100px; background: red; position: relative; animation-name: mymove; animation-duration: 5s; }

		@keyframes mymove { from { left: 0px; } to { left: 200px; } }
	</style>
</head>
<body>

	<h1>The animation-name Property</h1>

	<p>Specify a name for the @keyframes animation.</p>
	<p><strong>Note:</strong> The animation-name property is not supported in Internet Explorer 9 and earlier versions.</p>
	<div></div>
	<p><b>Note:</b> Always specify the animation-duration property. Otherwise the duration is 0, and the animation will not be played.</p>

</body>
</html>