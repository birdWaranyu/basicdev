
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("button").click(function(){
				$("p.intro").hide();
			});
		});
	</script>
</head>
<body>

	<h2 class="intro">This is a heading</h2>

	<p class="intro">This is a paragraph.</p>
	<p>This is another paragraph.</p>

	<button>Click me</button>
	
</body>
</html>

