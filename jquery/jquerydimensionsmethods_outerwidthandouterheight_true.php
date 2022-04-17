
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("button").click(function(){
				var txt = "";
				txt += "Width of div: " + $("#div1").width() + "</br>";
				txt += "Height of div: " + $("#div1").height() + "</br>";
				txt += "Outer width of div (margin included): " + $("#div1").outerWidth(true) + "</br>";
				txt += "Outer height of div (margin included): " + $("#div1").outerHeight(true);
				$("#div1").html(txt);
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

	<button>Display dimensions of div</button>

	<p>outerWidth(true) - returns the width of an element (includes padding, border, and margin).</p>
	<p>outerHeight(true) - returns the height of an element (includes padding, border, and margin).</p>
	
</body>
</html>

