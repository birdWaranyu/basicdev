
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("p:not(.intro)").css("background-color", "yellow");
		});
	</script>
</head>
<body>

	<h1>Welcome to My Homepage</h1>

	<p class="intro">My name is Donald.</p>
	<p>I live in Duckburg.</p>
	<p>My best friend is Mickey.</p>

	<p>Who is your favourite:</p>

	<ul id="choose">
		<li>Goofy</li>
		<li>Mickey</li>
		<li>Pluto</li>
	</ul>
	
</body>
</html>
