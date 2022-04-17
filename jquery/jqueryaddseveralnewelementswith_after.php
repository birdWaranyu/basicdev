
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		function afterText() {
		  var txt1 = "<b>I </b>";           // Create element with HTML
		  var txt2 = $("<i></i>").text("love ");  // Create with jQuery
		  var txt3 = document.createElement("b");   // Create with DOM
		  txt3.innerHTML = "jQuery!";
		  $("img").after(txt1, txt2, txt3);    // Insert new elements after img
		}	
</script>
</head>
<body>

	<img src="images/w3jquery.gif" alt="jQuery" width="100" height="140">
	<p>Click the button to insert text after the image.</p>
	<button onclick="afterText()">Insert after</button>
	
</body>
</html>
