
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script> 
		$(document).ready(function(){
			function aniDiv(){
				$("div:eq(0)").animate({width: "50%"}, "slow");
				$("div:eq(0)").animate({width: "100%"}, "slow", aniDiv);
			}
			aniDiv();
			$(".btn1").click(function(){
				$(":animated").css("background-color", "red");
			});
		});
	</script>
</head>
<body>

	<button class="btn1">Change color of the animated element</button>

	<div style="background:blue;">Div 1</div>
	<div style="background:green;">Div 2</div>
	<div style="background:yellow;">Div 3</div>
	
</body>
</html>

