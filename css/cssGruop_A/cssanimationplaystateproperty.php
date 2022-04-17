
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Css Align Content Propety</title>
	<style>
		div { width: 100px; height: 100px; background: red; position: relative; animation: mymove 5s; 
			animation-play-state: paused; }

		@keyframes mymove { from { left: 0px; } to { left: 200px; } }
	</style>
</head>
<body>

	<h1>The animation-play-state Property</h1>

	<p>Pause an animation:</p>
	<div></div>
	<p><strong>Note:</strong> The animation-play-state property is not supported in Internet Explorer 9 and earlier versions.</p>

</body>
</html>