
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$.noConflict();
		jQuery(document).ready(function(){
			jQuery("button").click(function(){
				jQuery("p").text("jQuery is still working!");
			});
		});
	</script>
</head>
<body>

	<p>This is a paragraph.</p>
	<button>Test jQuery</button>
	
</body>
</html>
