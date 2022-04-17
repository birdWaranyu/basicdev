
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script>
		$(document).ready(function(){
			$("p").bind("click", function(){
				alert("The paragraph was clicked.");
			});
		});
	</script>
</head>
<body>
	
	<p>Click me!</p>

</body>
</html>

