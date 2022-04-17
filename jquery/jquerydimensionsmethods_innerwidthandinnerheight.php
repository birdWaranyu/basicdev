
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
				txt += "Inner width of div: " + $("#div1").innerWidth() + "</br>";
				txt += "Inner height of div: " + $("#div1").innerHeight();
				$("#div1").html(txt);
			});
		});
	</script>
</head>
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

	<p>innerWidth() - returns the width of an element (includes padding).</p>
	<p>innerHeight() - returns the height of an element (includes padding).</p>

	
</body>
</html>