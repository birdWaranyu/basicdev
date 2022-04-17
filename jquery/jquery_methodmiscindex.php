
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("li").click(function(){
				alert($(this).index());
			});
		});
	</script>
</head>
<body>

	<p>Click the list items to get the index position, relative to its sibling elements</p>

	<ul>
		<li>Coffee</li>
		<li>Milk</li>
		<li>Soda</li>
	</ul>
	
</body>
</html>
