
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("button").click(function(){
				$("#div1").width(500).height(500);
			});
		});
	</script>
	<style>
		#div1 {
			height: 100px;
			width: 300px;
			padding: 10px;
			margin: 3px;
			border: 1px solid blue;
			background-color: lightblue;
		}
	</style>
</head>
<body>

	<div id="div1"></div>
	<br>

	<button>Resize div</button>
	
</body>
</html>

