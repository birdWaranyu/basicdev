
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Select All Href</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("button").click(function(){
				$("[href]").hide();
			});
		});
	</script>
</head>
<body>

	<h2>This is a heading</h2>

	<p>This is a paragraph.</p>
	<p>This is another paragraph.</p>
	<p><a href="https://www.w3schools.com/html/">HTML Tutorial</a></p>
	<p><a href="https://www.w3schools.com/css/">CSS Tutorial</a></p>

	<button>Click me</button>
	
</body>
</html>
