
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
				jq("p").text("jQuery is still working!");
			});
		});
	</script>
</head>
<body>

	<p>This is a paragraph.</p>
	<button>Test jQuery</button>
	
</body>
</html>
