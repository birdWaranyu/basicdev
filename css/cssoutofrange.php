
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Css Element</title>
	<style>
		input:out-of-range { border: 2px solid red; } 
	</style>
</head>
<body>
	
	<h3>A demonstration of the :out-of-range selector.</h3>

	<input type="number" min="5" max="10" value="17">

	<p>Try typing a number within the given range (between 5 and 10), to see the styling disappear.</p>

</body>
</html>