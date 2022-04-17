
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("button").click(function(){
				var x = $("p").get(0);
				$("div").text(x.nodeName + ": " + x.innerHTML);
			});
		});
	</script>
</head>
<body>

	<p>This is a paragraph</p>

	<button>Get the p DOM element</button>

	<div></div>
	
</body>
</html>

