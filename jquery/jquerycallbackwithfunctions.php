
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("button").click(function(){
				$("p").hide("slow", function(){
					alert("The paragraph is now hidden");
				});
			});
		});
	</script>
</head>
<body>

	<button>Hide</button>

	<p>This is a paragraph with little content.</p>
	
</body>
</html>

