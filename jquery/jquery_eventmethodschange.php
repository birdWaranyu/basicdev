
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("input").change(function(){
				alert("The text has been changed.");
			});
		});
	</script>
</head>
<body>

	<input type="text">

	<p>Write something in the input field, and then press enter or click outside the field.</p>
	
</body>
</html>
