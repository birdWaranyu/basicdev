
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Css Selector Reference</title>
	<style>
		p.hometown { background-color: yellow; }
		.intro { background-color: blue; }
		p.center { text-align: center; color: red; }
		p.large { font-size: 300%; }
		#firstname { background-color: red; }
	</style>
</head>
<body>
	
	<center>Example 1</center>
	<p>My name is Donald.</p>
	<p class="hometown">I live in Ducksburg.</p>

	<p>My name is Dolly.</p>
	<p class="hometown">I also live in Ducksburg.</p>

	<br>


	<center>Example 2</center>
	<h1>Welcome to My Homepage</h1>

	<div class="intro">
	  <p>My name is Donald.</p>
	  <p>I live in Duckburg.</p>
	</div>

	<p>My best friend is Mickey.</p>

	<p class="intro">My best friend is Mickey.</p>

	<br>


	<center>Example 3 .class</center>

	<h1 class="center">This heading will not be affected</h1>
	<p class="center">This paragraph will be red and center-aligned.</p>
	<p class="center large">This paragraph will be red, center-aligned, and in a large font-size.</p> 

	<br>


	<center>Example 4 #id</center>
	
	<h1>Welcome to My Homepage</h1>

	<div class="introo">
	  <p id="firstname">My name is Donald.</p>
	  <p id="hometownn">I live in Duckburg.</p>
	</div>

	<p>My best friend is Mickey.</p>


</body>
</html>