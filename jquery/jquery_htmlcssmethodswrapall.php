
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("button").click(function(){
				$("p").wrapAll("<div></div>");
			});
		});
	</script>
</head>
<body>

	<p>This is a paragraph.</p>
	<p>This is another paragraph.</p>

	<button>Wrap a div element around all p elements</button>
	
</body>
</html>

