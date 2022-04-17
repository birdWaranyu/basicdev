

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Css Element</title>
	<style>
		p::before { content: " Read this -"; }
	</style>
</head>
<body>
	
	<p>My name is Donald</p>
	<p>I live in Ducksburg</p>

	<p><b>Note:</b> For this selector to work in IE8, a DOCTYPE must be declared, and you must use the old, single-colon CSS2 syntax (:after instead of ::after).</p>


</body>
</html>