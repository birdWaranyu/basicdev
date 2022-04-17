
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("button").click(function(){
				$("div").contents().filter("em").wrap("<b/>");
			});
		});
	</script>
</head>
<body>

	<div><em>Hello world! What a beautiful day!</em></div>

	<p>In this example, by clicking on the button, we search for all the text nodes inside the div element and wrap them with a b element.</p>

	<button>Find all text nodes in div and wrap them</button><br>
	
</body>
</html>


