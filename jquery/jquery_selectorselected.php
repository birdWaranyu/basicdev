
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$(":selected").css("background-color", "red");
		});
	</script>
</head>
<body>

	<form action="">
		Name: <input type="text" name="user"><br>
		Car:
		<select>
			<option>Volvo</option>
			<option selected="selected">Saab</option>
			<option>Mercedes</option>
			<option>Audi</option>
		</select>
	</form>
	
</body>
</html>

