
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("p:visible").css("background-color", "yellow");
		});
	</script>
</head>
<body>

	<h1>This is a heading</h1>

	<p>This is a pargraph.</p>
	<p>This is another paragraph.</p>
	<p style="display:none">This is a hidden paragraph.</p>
	
</body>
</html>


