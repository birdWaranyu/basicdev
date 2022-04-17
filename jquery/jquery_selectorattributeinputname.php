
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("input[name^='nation']").css("background-color", "yellow");});
		</script>
	</head>
	<body>

		<input name="nationality" type="text" value="Chinese">
		<input name="nation" type="text" value="English">
		<input name="country" type="text" value="Germany">
		<input name="anothernation" type="text" value="Norwegian">

		<p>This selector selects all input fields with the attribute name that starts with 'nation'.</p>

		
	</body>
	</html>

