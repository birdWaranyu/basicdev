
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("button").click(function(){
				$("h1, h2, p").toggleClass("blue");
				//$("p").toggleClass("new");
			});
		});
	</script>
	<style>
		.blue {
			color: blue;
		}
		/*.new {
			padding-left: 3%;
		}*/
	</style>
</head>
<body>

	<h1>Heading 1</h1>
	<h2>Heading 2</h2>

	<p>This is a paragraph.</p>
	<p>This is another paragraph.</p>

	<button>Toggle class</button>
	
</body>
</html>

