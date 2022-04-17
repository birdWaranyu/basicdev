
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#btn1").click(function(){
				$("img").before("<b>Before</b>");
			})

			$("#btn2").click(function(){
				$("img").after("<i>After</i>");
			});
		});
	</script>
</head>
<body>

	<img src="images/w3jquery.gif" alt="jQuery" width="100" height="140"><br><br>

	<button id="btn1">Insert before</button>
	<button id="btn2">Insert after</button>
	
</body>
</html>

