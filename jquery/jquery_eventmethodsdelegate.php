
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("div").delegate("p", "click",function(){
				$("p").css("background-color", "pink");
			});
		});
	</script>
</head>
<body>

	<div style="background-color:yellow;">
		<p>This is a paragraph inside a div element.</p>
	</div>

	<p>This is a paragraph.</p>
	
</body>
</html>


