
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("button").click(function(){
				return "Hello world!";
			});
			$("button").click(function(event){
				$("p").html(event.result);
			});  
		});
	</script>
</head>
<body>

	<button>Click me to display event.result</button>

	<p>This is a paragraph.</p>
	
</body>
</html>

