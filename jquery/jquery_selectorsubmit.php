
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$(":submit").css("background-color", "red");
		});
	</script>
</head>
<body>

	<form action="">
		Name: <input type="text" name="user"><br>
		Password: <input type="password" name="password"><br>
		<button type="button">Useless Button</button>
		<input type="button" value="Another useless button"><br>
		<input type="reset" value="Reset">
		<input type="submit" value="Submit"><br>
	</form>
	
</body>
</html>

