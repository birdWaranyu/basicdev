
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$(":enabled").css("background-color","red");
		});
	</script>
</head>
<body>

	<form action="">
		Name: <input type="text" name="user"><br>
		ID:<input type="text" name="id" disabled="disabled">

		Age:
		<select disabled="disabled">
			<option>20-30</option>
			<option>30-50</option>
			<option>50+</option>
		</select>
		<input type="submit">
	</form>
	
</body>
</html>

