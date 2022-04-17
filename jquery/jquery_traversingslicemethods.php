
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("p").slice(2).css("background-color", "yellow");
		});
	</script>
</head>
<body>

	<h1>Welcome to My Homepage</h1>

	<p>My name is Donald (index 0).</p>
	<p>Donald Duck (index 1).</p>
	<p>I live in Duckburg (index 2).</p>
	<p>My best friend is Mickey (index 3).</p>

	<div>In this example, we start the selection of p elements from the p element with index position 2. All p elements from this point will be selected. Note that the index numbers start at 0.</div>
	
</body>
</html>

