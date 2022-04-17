
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Css Align Content Propety</title>
	<style>
		div { width: 100px; height: 100px; background: red; position: relative; animation: mymove 3s;
			animation-iteration-count: 2; }

		@keyframes mymove { from { top: 0px; } to { top: 200px; } }
	</style>
</head>
<body>

	<h1>The animation-iteration-count Property</h1>

	<p>Play the animation two times:</p>

	<div></div>

	<p><strong>Note:</strong> The animation-iteration-count property is not supported in Internet Explorer 9 and earlier versions.</p>

</body>
</html>