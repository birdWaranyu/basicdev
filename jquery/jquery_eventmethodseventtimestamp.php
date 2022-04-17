
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("button").click(function(event){
				$("span").text(event.timeStamp);
			});
		});
	</script>
</head>
<body>

	<p>The click event occurred <span style="color:red">unknown</span> milliseconds after January 1, 1970.</p>

	<button>Click me</button>
	
</body>
</html>


