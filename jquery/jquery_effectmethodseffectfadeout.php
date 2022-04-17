
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".btn1").click(function(){
				$("p").fadeOut();
			});
			$(".btn2").click(function(){
				$("p").fadeIn();
			});
		});
	</script>
</head>
<body>

	<p>This is a paragraph.</p>

	<button class="btn1">Fade out</button>
	<button class="btn2">Fade in</button>
	
</body>
</html>


