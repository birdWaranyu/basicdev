
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#btn1").click(function(){
				$("#test3").val("Dolly Duck");
			});
		});
	</script>
</head>
<body>

	<p>Input field: <input type="text" id="test3" value="Mickey Mouse"></p>

	<button id="btn1">Set Value</button>
	
</body>
</html>

