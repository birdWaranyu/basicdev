
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Selector all</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("button").click(function(){
				$("*").hide();
			});
		});
	</script>
</head>
<body>

	<caption> Jquery Selector All Element </caption>

	<h2>This is a heading</h2>

	<p>This is a paragraph.</p>
	<p>This is another paragraph.</p>

	<button>Click me</button>
	
</body>
</html>
