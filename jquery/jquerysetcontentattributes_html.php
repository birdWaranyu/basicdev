
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#btn2").click(function(){
				$("#test2").html("<b>Hello world! another paragraph</b>");
				$("#test1").html("<b>Hello world! paragraph</b>");
			});
		});
	</script>
</head>
<body>

	<p id="test1">This is a paragraph.</p>
	<p id="test2">This is another paragraph.</p>

	<p>Input field: <input type="text" id="test3" value="Mickey Mouse"></p>


	<button id="btn2">Set HTML</button>
	
</body>
</html>

