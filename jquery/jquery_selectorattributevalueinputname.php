
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("input[name~='nation']").css("background-color", "yellow");});
		</script>
	</head>
	<body>

		<input name="nationality" type="text" value="Chinese">
		<input name="nation" type="text" value="English">
		<input name="country" type="text" value="Germany">
		<input name="anothernation" type="text" value="Norwegian">

		<p>This selector selects all input fields with the attribute name that contains the specific string 'nation'.</p>
		<p><b>Note</b>: It will only select the attribute name that contains the specific string "nation", and not the attribute name that starts, includes or ends with "nation" (like "nationality", "xnationx" or "anothernation").
			
		</body>
		</html>

