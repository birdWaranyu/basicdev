
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("p").on("click", function(){
				$(this).hide();
			});
		});
	</script>
</head>
<body>

	<p>If you click on me, I will disappear.</p>
	<p>Click me away!</p>
	<p>Click me too!</p>
	
</body>
</html>


