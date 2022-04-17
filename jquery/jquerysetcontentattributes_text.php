
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#btn1").click(function(){
				$("#test1").text("Hello world! paragraph");
				$("#test2").text("Hello world! another paragraph");
			});
		});
	</script>
</head>
<body>


	<p id="test1">This is a paragraph.</p>
	<p id="test2">This is another paragraph.</p>

	<p>Input field: <input type="text" id="test3" value="Mickey Mouse"></p>

	<button id="btn1">Set Text</button>

	
</body>
</html>

