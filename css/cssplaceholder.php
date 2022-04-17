
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Css Element</title>
	<style>
		::-webkit-input-placeholder { /* Edge */ color: red; }

		:-ms-input-placeholder { /* Internet Explorer */ color: red; }

		::placeholder { color: red; } 
	</style>
</head>
<body>
	
	<p>Use the ::placeholder selector to change the color of the placeholder text:</p>

	<input type="text" name="fname" placeholder="First name">

</body>
</html>