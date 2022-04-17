
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("p").on("custom.someNamespace",function(event){
				alert(event.namespace);
			});
			$("p").click(function(event){
				$(this).trigger("custom.someNamespace");
			});  
			$("button").click(function(){
				$("p").off("custom.someNamespace");
			});
		});  
	</script>
</head>
<body>

	<p>Click on this paragraph.</p>

	<button>Remove namespace</button>
	
</body>
</html>


