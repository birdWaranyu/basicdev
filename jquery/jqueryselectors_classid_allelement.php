
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".intro, .demo, .end").css("background-color", "yellow");
			$("#newone, #newtwo, #newthree").css("background-color", "red");
		});
	</script>
</head>
<body>

	<h1>Welcome to My Homepage</h1>

	<p class="intro">This paragraph has class "intro".</p>
	<p>This is a paragraph.</p>
	<p class="demo">This paragraph has class "demo".</p>
	<p>This is another paragraph.</p>
	<p class="end">This paragraph has class "end".</p>

	<br>

	<p id="newone">This paragraph has id "intro".</p>
	<p>This is a paragraph.</p>
	<p id="newtwo">This paragraph has id "demo".</p>
	<p>This is another paragraph.</p>
	<p id="newthree">This paragraph has id "end".</p>
	
</body>
</html>

