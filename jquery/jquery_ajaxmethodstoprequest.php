
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$(document).ajaxStop(function(){
				alert("All AJAX requests completed");
			});
			$("button").click(function(){
				$("div").load("demo_ajax_load.txt");
				$("div").load("demo_ajax_load.asp");
			});
		});
	</script>
</head>
<body>

	<div><h2>Let AJAX change this text</h2></div>

	<button>Change Content</button>
	
</body>
</html>


