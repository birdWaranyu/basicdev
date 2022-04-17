
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("button").click(function(){
				$("li").each(function(){
					alert($(this).text())
				});
			});
		});
	</script>
</head>
<body>

	<button>Alert the value of each list item</button>

	<ul>
		<li>Coffee</li>
		<li>Milk</li>
		<li>Soda</li>
	</ul>
	
</body>
</html>


