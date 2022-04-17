
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$(":radio").wrap("<span style='background-color:red'>");
		});
	</script>
</head>
<body>

	<form action="">
		Name: <input type="text" name="user"><br>
		Male:<input type="radio" name="sex" value="m"><br>
		Female<input type="radio" name="sex" value="f"><br>
		<input type="submit">
	</form>

	<p>Note: We use jQuerys .wrap method to highlight the selected elements, because Firefox does not support background color on radiobuttons.</p>
	
</body>
</html>

