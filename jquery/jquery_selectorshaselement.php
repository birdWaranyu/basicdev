
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("p:has(span)").css("border", "solid red");
		});
	</script>
</head>
<body>
	
	<p><span>This is a span element inside a p element.</span></p>
	<p>This is a p element with no span element.</p>


</body>
</html>
