
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		function appendText() {
  var txt1 = "<p>Case.</p>";        // Create text with HTML
  var txt2 = $("<p></p>").text("New.");  // Create text with jQuery
  var txt3 = document.createElement("p");
  txt3.innerHTML = "My.";         // Create text with DOM
  $("body").append(txt1, txt2, txt3);   // Append new elements
}
</script>
</head>
<body>

	<p>This is a paragraph.</p>
	<button onclick="appendText()">Append text</button>
	
</body>
</html>

