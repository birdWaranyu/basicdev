
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("button").click(function(){
				$("p").wrapInner("<b></b>");
			});
		});
	</script>
</head>
<body>

	<p>This is a paragraph.</p>
	<p>This is another paragraph.</p>

	<button>Wrap a b element around the content of each p element</button>
	
</body>
</html>

