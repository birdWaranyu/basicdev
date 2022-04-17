
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("button").click(function(){
				$("p").fadeTo(1000, 0.4);
			});
		});
	</script>
</head>
<body>

	<button>Gradually change the opacity of the p element</button>

	<p>This is a paragraph.</p>
	
</body>
</html>


