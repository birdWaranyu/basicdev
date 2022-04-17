
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("button").click(function(){
				$("#w3s").attr({
					"href" : "https://www.w3schools.com/jquery/",
					"title" : "W3Schools jQuery Tutorial"
				});
			});
		});
	</script>
</head>
<body>

	<p><a href="https://www.w3schools.com" title="some title" id="w3s">W3Schools.com</a></p>

	<button>Change href and title</button>

	<p>Mouse over the link to see that the href attribute has changed and a title attribute is set.</p>
	
</body>
</html>

