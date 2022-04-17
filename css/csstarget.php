
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Css Element</title>
	<style>
		:target {border: 2px solid #D4D4D4; background-color: #e5eecc; }
	</style>
</head>
<body>
	
	<h1>This is a heading</h1>

	<p><a href="#news1">Jump to New content 1</a></p>
	<p><a href="#news2">Jump to New content 2</a></p>

	<p>Click on the links above and the :target selector highlight the current active HTML anchor.</p>

	<p id="news1"><b>New content 1...</b></p>
	<p id="news2"><b>New content 2...</b></p>

	<p><b>Note:</b> Internet Explorer 8 and earlier versions do not support the :target selector.</p>

</body>
</html>