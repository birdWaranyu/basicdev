
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		var jq = $.noConflict();
		jq(document).ready(function(){
			jq("button").click(function(){
				jq("p").hide();
			});
		});
	</script>
</head>
<body>

	<h2>This is a heading</h2>

	<p>This is a paragraph.</p>
	<p>This is another paragraph.</p>

	<button>Click me</button>
	
</body>
</html>


