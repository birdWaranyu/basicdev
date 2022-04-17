
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Css Align Content Propety</title>
	<style>
		div { width: 100px; height: 100px; background: red; position: relative; animation: mymove infinite; 
			animation-duration: 3s; }

		@keyframes mymove { from { top: 0px; } to { top: 200px; } }
	</style>
</head>
<body>

	<h1>The animation-duration Property</h1>

	<p>Specify that the animation should complete one cycle in 3 seconds:</p>

	<div></div>

	<p><strong>Note:</strong> Always specify the animation-duration property. Otherwise the duration is 0, and the animation will not be played.</p>
	<p><strong>Note:</strong> The animation-duration property is not supported in Internet Explorer 9 and earlier versions.</p>

</body>
</html>