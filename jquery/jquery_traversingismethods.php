
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("p").click(function(){
				if ($("p").parent().is("div")) {
					alert("Parent of p is div"); 
				}
			});
		});
	</script>
</head>
<body>

	<div>
		<p>Click me to find out if I my parent is a div element.</p>
	</div>
	
</body>
</html>


