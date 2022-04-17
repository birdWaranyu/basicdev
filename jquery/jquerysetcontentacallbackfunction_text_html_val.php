
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			
			$("#btn1").click(function(){
				$("#test1").text(function(i, origText){
					return "Old text: " + origText + " New text: Hello world! (index: " + i + ")"; 
				});
			});

			$("#btn2").click(function(){
				$("#test2").html(function(i, origText){
					return "Old html: " + origText + " New html: Hello <b>world!</b> (index: " + i + ")"; 
				});
			});
			
			$("#btn3").click(function(){
				$("#testval").val(function(i, origText){
					return "Old val: " + origText + " New text: Hello world! (index: " + i + ")"; 
				});
			});
			
		});
	</script>
</head>
<body>

	<p id="test1">This is a <b>bold</b> paragraph.</p>
	<p id="test2">This is another <b>bold</b> paragraph.</p>

	<p><input type='text' name='new' id='testval' value='This is a paragraph.'></p>

	<button id="btn1">Show Old/New Text</button>
	<button id="btn2">Show Old/New HTML</button>

	<button id="btn3">Show Old/New VAL</button>
	
</body>
</html>


