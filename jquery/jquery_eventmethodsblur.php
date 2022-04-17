
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("input").blur(function(){
				alert("This input field has lost its focus.");
			});
		});
	</script>
</head>
<body>

	Enter your name: <input type="text">
	<p>Write something in the input field, and then click outside the field to lose focus (blur).</p>
	
</body>
</html>

