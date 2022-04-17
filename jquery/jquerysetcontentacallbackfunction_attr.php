
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("button").click(function(){
				$("#w3s").attr("href", function(i, origValue){
					return origValue + "/jquery/"; 
				});
			}); 
		});
	</script>
</head>
<body>

	<p><a href="https://www.w3schools.com" id="w3s">W3Schools.com</a></p>

	<button>Change href Value</button>

	<p>Mouse over the link (or click on it) to see that the value of the href attribute has changed.</p>
	
</body>
</html>