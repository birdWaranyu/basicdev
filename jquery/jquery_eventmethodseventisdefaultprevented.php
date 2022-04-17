
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("a").click(function(event){
				event.preventDefault();
				alert("Was preventDefault() called: " + event.isDefaultPrevented());
			});
		});
	</script>
</head>
<body>

	<a href="https://w3schools.com/">Go to W3Schools.com</a>

	<p>The preventDefault() method will prevent the link above from following the URL.</p>
	<p>Click the link and check if the default action is prevented.</p>
	
</body>
</html>


