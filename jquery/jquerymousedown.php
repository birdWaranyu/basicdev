
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#p1").mousedown(function(){
				alert("Mouse down over p1!");
			});
		});
	</script>
</head>
<body>

	<p id="p1">This is a paragraph.</p>
	
</body>
</html>


