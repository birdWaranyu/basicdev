
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("button").click(function(){
				alert("Value: " + $("#test").val());
			});
		});
	</script>
</head>
<body>

	<p>Name: <input type="text" id="test" value="Mickey Mouse"></p>

	<button>Show Value</button>
	
</body>
</html>

