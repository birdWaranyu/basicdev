
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("button").click(function(){
				$.getScript("demo_ajax_script.js");
			});
		});
	</script>
</head>
<body>

	<button>Use Ajax to get and then run a JavaScript</button>
	
</body>
</html>


