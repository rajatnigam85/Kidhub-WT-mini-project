<?php
include 'homepage.php';
?>
<html>
<head>
	<title>Twinkle</title>
<style type="text/css">
	p,pre{
		font-family:Arial;
		font-style:normal;
		font-size:20px;
	}
	body{
			background-color: grey;
	}
	h1{
		color:yellow;
	}
</style>
</head>
<body>
<div class="con" id="main">
<h1><b>TWINKLE,TWINKLE LITTLE STAR</b></h1>
<p><pre>Twinkle, twinkle, little star
How I wonder what you are
Up above the world so high
Like a diamond in the sky
Twinkle, twinkle little star
How I wonder what you are

When the blazing sun is gone
When he nothing shines upon
Then you show your little light
Twinkle, twinkle, all the night
Twinkle, twinkle, little star
How I wonder what you are</pre>
<audio controls>
	<source src="/web development/project/audio/TwinkleTwinkleLittleStar.ogg" type="audio/ogg">
	<source src="/web development/project/audio/TwinkleTwinkleLittleStar.mp3" type="audio/mpeg">
	Your browser does not support the audio element.
	</audio>
</div>
</body>
</html>
<?php
include 'footer.php';