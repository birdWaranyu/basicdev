
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Css Align Content Propety</title>
	<style>
		div { width: 100px; height: 100px; background: red; position: relative; animation: mymove 3s; 
			animation-fill-mode: forwards; }

		@keyframes mymove { from { top: 0px; } to { top: 200px; background-color: blue; } }
	</style>
</head>
<body>

	<h1>The animation-fill-mode Property</h1>

	<p>Let the div element retain the style values from the last keyframe when the animation ends:</p>

	<div></div>

	<p><strong>Note:</strong> The animation-fill-mode property is not supported in Internet Explorer 9 and earlier versions.</p>

</body>
</html>