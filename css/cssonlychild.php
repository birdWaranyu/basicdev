
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Css Element</title>
	<style>
		p:only-child { background: red; } 
	</style>
</head>
<body>
	
	<div><p>This is a paragraph.</p></div>

	<div><span>This is a span.</span><p>This is a paragraph.</p></div>

	<p><b>Note:</b> Internet Explorer 8 and earlier versions do not support the :only-child selector.</p>

</body>
</html>