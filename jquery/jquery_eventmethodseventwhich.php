
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("input").keydown(function(event){ 
				$("div").html("Key: " + event.which);
			});
		});
	</script>
</head>
<body>

	Enter your name: <input type="text">

	<p>When you type in the field above, the div element below will display the key number.</p>
	<div />
	
</body>
</html>

