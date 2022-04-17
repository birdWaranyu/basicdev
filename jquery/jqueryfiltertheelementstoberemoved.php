
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function() {
			$("button").click(function() {
				$("p").remove(".test");
			});
		});
	</script>
	<style>
		.test {
			color: red;
			font-size: 20px;
		}
	</style>
</head>
<body>

	<p>This is a paragraph.</p>
	<p class="test">This is another paragraph.</p>
	<p class="test">This is another paragraph.</p>

	<button>Remove all p elements with class="test"</button>
	
</body>
</html>


