
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("button").click(function(){
				$("#div1").addClass("important blue");
			});
		});
	</script>
	<style>
		.important {
			font-weight: bold;
			font-size: xx-large;
		}

		.blue {
			color: blue;
		}
	</style>
</head>
<body>
	
	<div id="div1">This is some text.</div>
	<div id="div2">This is some text.</div>
	<br>

	<button>Add classes to first div element</button>

</body>
</html>


