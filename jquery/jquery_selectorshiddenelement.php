
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("p:hidden").show(3500);
		});
	</script>
</head>
<body>

	<p>This is a paragraph.</p>
	<p>This is another paragraph.</p>
	<p style="display:none;">This is a hidden paragraph that is slowly shown.</p>
	
</body>
</html>
