
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("button").click(function(){
				alert($("#w3s").attr("href"));
			});
		});
	</script>
</head>
<body>

	<p><a href="https://www.w3schools.com" id="w3s">W3Schools.com</a></p>

	<button>Show href Value</button>
	
</body>
</html>

