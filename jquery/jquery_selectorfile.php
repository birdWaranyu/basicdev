
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$(":file").css("background-color", "red");
		});
	</script>
</head>
<body>

	<form action="">
		Name: <input type="text" name="user"><br>
		File: <input type="file" name="myfile">
	</form>
	
</body>
</html>

