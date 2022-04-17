


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		function beforeText() {
		  var txt1 = "<b>I </b>";           // Create element with HTML
		  var txt2 = $("<i></i>").text("love ");  // Create with jQuery
		  var txt3 = document.createElement("b");   // Create with DOM
		  txt3.innerHTML = "jQuery!";
		  $("img").before(txt1, txt2, txt3);    // Insert new elements after img
		}	
</script>
</head>
<body>

	<img src="images/w3jquery.gif" alt="jQuery" width="100" height="140">
	<p>Click the button to insert text before the image.</p>
	<button onclick="beforeText()">Insert Before</button>
	
</body>
</html>