
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("p").each(function(i){
				$(this).on("click", {x:i}, function(event){
					alert("The " + $(this).index() + ". paragraph has data: " + event.data.x);
				});
			});
		});
	</script>
</head>
<body>

	<div style="color:red">Click on each p element to return the data passed with the on() method.</div>

	<p>This is a paragraph.</p>
	<p>This is another paragraph.</p>
	<p>This is another paragraph.</p>

	
</body>
</html>

