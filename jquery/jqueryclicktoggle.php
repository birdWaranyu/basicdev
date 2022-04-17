
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("button").click(function(){
				$("p").toggle();
			});
		});
	</script>
</head>
<body>

	<button>Toggle between hiding and showing the paragraphs</button>

	<p>This is a paragraph with little content.</p>
	<p>This is another small paragraph.</p>

	
</body>
</html>
