
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("button").click(function(){
				$("p").css("background-color", "yellow");
			});
		});
	</script>
</head>
<body>

	<h2>This is a heading</h2>

	<p style="background-color:#ff0000">This is a paragraph.</p>
	<p style="background-color:#00ff00">This is a paragraph.</p>
	<p style="background-color:#0000ff">This is a paragraph.</p>

	<p>This is a paragraph.</p>

	<button>Set background-color of p</button>
	
</body>
</html>
