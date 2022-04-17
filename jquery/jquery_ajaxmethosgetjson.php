
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("button").click(function(){
				$.getJSON("demo_ajax_json.js", function(result){
					$.each(result, function(i, field){
						$("div").append(field + " ");
					});
				});
			});
		});
	</script>
</head>
<body>

	<button>Get JSON data</button>

	<div></div>
	
</body>
</html>


