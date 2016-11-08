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
	.animate{
			display: block;
			transition: 2s;
			transition-timing-function: ease-in-out;
			transform: rotate(360deg);
			height: 500px;
			width: 1000px;
			transition: width 4s, height 4s,transform 4s;
	}

</style>
</head>
<body onload="load()">
<div id="main" class="con">
<h1>ENJOY THE VIDEO!!</h1>
<video width="100" height="50" id="z" controls>
  <source src="/web development/project/video/Bits Of Paper Video.mp4" type="video/mp4">
  <source src="/web development/project/video/Bits Of Paper Video.ogg" type="video/ogg">
  Your browser does not support the video tag.
</video>
</div>
<script>
	var x=document.querySelector("#z");
	function load(){
		x.className="animate";
	}
</script>
</body>
</html>
<?php
include 'footer.php';
