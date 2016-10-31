<?php
include 'homepage.php';
?>
<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	h1{
		color:yellow;
	}
	body{
		background-color: grey;
	}
</style>
</head>
<body>
<div id="main" class="con">
<h1>ENJOY THE VIDEO!!</h1>
<video width="1000" height="500" controls>
  <source src="/web development/project/video/Twinkle Twinkle Little Star.mp4" type="video/mp4">
  <source src="/web development/project/video/Twinkle Twinkle Little Star.ogg" type="video/ogg">
  Your browser does not support the video tag.
</video>
</div>
</body>
</html>
<?php
include 'footer.php';