
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("input").focus(function(){
				$(this).css("background-color", "yellow");
			});
			$("input").blur(function(){
				$(this).css("background-color", "green");
			});
		});
	</script>
</head>
<body>

	Name: <input type="text" name="fullname"><br>
	Email: <input type="text" name="email">
	
</body>
</html>
