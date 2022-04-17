
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("p[title|='Tomorrow']").css("background-color", "yellow");});  
		</script>
	</head>
	<body>

		<p title="Tomorrow">This is a paragraph.</p>
		<p title="tomorrow">This is a paragraph.</p>
		<p title="Tom">This is a paragraph.</p>
		<p title="See You Tomorrow">This is a paragraph.</p>
		<p title="Tomorrow-the day after today">This is a paragraph.</p>

		<p>This selector selects all elements with a title attribute value equal to 'Tomorrow', or starting with 'Tomorrow' followed by a hyphen.</p>

</body>
</html>

