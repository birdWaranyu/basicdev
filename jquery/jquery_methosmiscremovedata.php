
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#btn1").click(function(){
				$("div").data("greeting", "Hello World");
				alert("Greeting is: " + $("div").data("greeting"));
			});
			$("#btn2").click(function(){
				$("div").removeData("greeting");
				alert("Greeting is: " + $("div").data("greeting"));
			});
		});
	</script>
</head>
<body>

	<button id="btn1">Attach data to div element</button><br>
	<button id="btn2">Remove data attached to div element</button>

	<div></div>
	
</body>
</html>


