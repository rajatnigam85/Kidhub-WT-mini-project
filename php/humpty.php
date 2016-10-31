<?php
include 'homepage.php';
?>
<html>
<head>
	<title>Humpty Dumpty</title>
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
	<h1><b>HUMPTY DUMPTY</b></h1>
		<p>
	<pre>Humpty Dumpty sat on the wall,
Humpty Dumpty had a great fall.
All the king's horses
And all the king's men
Couldn't put Humpty Dumpty
Together again.</pre></p>
<audio controls>
	<source src="/web development/project/audio/humpty.ogg" type="audio/ogg">
	<source src="/web development/project/audio/humpty.mp3" type="audio/mpeg">
	Your browser does not support the audio element.
	</audio>
</div>
</body>
</html>
<?php
include 'footer.php';