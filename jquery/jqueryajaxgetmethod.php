
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("button").click(function(){
				$.get("demo_test.asp", function(data, status){
					alert("Data: " + data + "\nStatus: " + status);
				});
			});
		});
	</script>
</head>
<body>

	<button>Send an HTTP GET request to a page and get the result back</button>
	
</body>
</html>
