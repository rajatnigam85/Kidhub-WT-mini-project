<?php
include 'auth.php';

if(logged_in()===false){
    $error[]='You need to login first!';?>
    <h3><?php echo output_errors($error);
    ?></h3>
    <div align="center"><a href="home.php">Login</a></div>
<?php
}else{   include 'homepage.php';
    ?>
<!DOCTYPE html>
<html>
<head>
	<title>Kidhub</title>
	<style type="text/css">
		.float{
			width:50px;
			height:50px;
			line-height:40px;
			border: 1px solid #111;
			background-color: gray;
			border-radius: 50%;
			box-shadow: 5px 5px 5px gray;
		}
 	.reset{
 		width: 50px;
 		height: 50px;
 		border: 1px solid #111;
 		border-radius: 15%;
 		float:right;
 		box-shadow: 5px 5px 5px gray;
 	}
	</style>
</head>
<body>
    <div  id="main">
    <div  style="background-image: url('/web development/project/img/wall5.jpg');background-size: cover;background-position: center center">
	<div style="padding-left: 500px;padding-top: 80px;width: 800px;">
	<div class="slide">
		<div id="m1" style="width: 400px;padding-left: 100px;height: 300px;border: 3px solid white"  ondrop="drop(event)" ondragover="allowDrop(event)">
		</div>
		<div>
		<h3 style="padding-left: 200px;font-size: 30px;color: white;">Star</h3>
		</div>	
	</div>
	<div class="slide">
		<div id="m2" style="width: 400px;padding-left: 100px;height: 300px;border: 3px solid white" ondrop="drop(event)"
		 ondragover="allowDrop(event)">
		</div>
		<div>
		<h3 style="padding-left: 200px;font-size: 30px;color: white;">Oval</h3>
		</div>	
	</div>
	<div class="slide">
		<div id="m3" style="width: 400px;padding-left: 100px;height: 300px;border: 3px solid white" ondrop="drop(event)" ondragover="allowDrop(event)">
		</div>
		<div>
		<h3 style="padding-left: 200px;font-size: 30px;color: white;">Triangle</h3>
		</div>		
	</div>
	<div class="slide">
		<div id="m4" style="width: 400px;padding-left: 100px;height: 300px;border: 3px solid white" ondrop="drop(event)" ondragover="allowDrop(event)">
		</div>
		<div>
		<h3 style="padding-left: 200px;font-size: 30px;color: white;">Square</h3>
		</div>	
	</div>
	<div class="slide">
		<div id="m5" style="width: 400px;padding-left: 100px;height: 300px;border: 3px solid white" ondrop="drop(event)" ondragover="allowDrop(event)">
		</div>
		<div>
		<h3 style="padding-left: 200px;font-size: 30px;color: white;">Rectangle</h3>
		</div>	
	</div>
	<div class="slide">
		<div id="m6" style="width: 400px;padding-left: 100px;height: 300px;border: 3px solid white" ondrop="drop(event)" ondragover="allowDrop(event)">
		</div>
		<div>
		<h3 style="padding-left: 200px;font-size: 30px;color: white;">Circle</h3>
		</div>	
	</div>
	<div style="padding-left: 200px">
	<button class="float" onclick="plusDivs(+1)">&#10095;</button>
		<button onclick="reset()" class="reset">Reset</button>
	</div>
	</div>
	<br>
	</div>
	<hr/>
	<br>
	<div style="width: 1200px;padding-left: 20px">
		<div style="width: 200px;float: left;">
		<div style="width: 200px;height: 100px;" id="div1">
		<img id="img1" style="margin-left:auto;margin-top: auto;" src="/web development/project/img/rect.png" ondragstart="drag(event)" draggable="true" height="150px" width="200px">
		</div>
		</div>
		<div style="width: 200px;float: left;">
		<div style="width: 200px;height: 200px;" id="div2">
		<img id="img2" style="margin-left:auto;margin-top: auto;" src="/web development/project/img/square.png" ondragstart="drag(event)" draggable="true" height="150px" width="150px">
		</div>
		</div>
		<div style="width: 200px;float: left;">
		<div style="width: 200px;height: 200px;" id="div3">
		<img id="img3" style="margin-left:auto;margin-top: auto;" src="/web development/project/img/circle.png" ondragstart="drag(event)" draggable="true" height="150px" width="150px">
		</div>
		</div>
		<div style="width: 200px;float: left;">
		<div style="width: 200px;height: 50px;" id="div4">
		<img id="img4" style="margin-left:auto;margin-top: auto;" src="/web development/project/img/oval.png" ondragstart="drag(event)"  draggable="true" height="100px" width="200px">
		</div>
		</div>
		<div style="width: 200px;float: left;">
		<div style="width: 200px;height: 100px;" id="div5">
		<img id="img5" style="margin-left:auto;margin-top: auto;" src="/web development/project/img/star.jpg" ondragstart="drag(event)" draggable="true" height="150px" width="200px">
		</div>
		</div>
		<div style="width: 200px;float: left;">
		<div style="width: 200px;height: 100px;" id="div6">
		<img id="img6" style="margin-left:auto;margin-top: auto;" src="/web development/project/img/triangle.jpg" ondragstart="drag(event)" draggable="true" height="100px" width="150px">
		</div>
		</div>
		<br style="clear: left;">
	</div>
	</div>
	<script type="text/javascript">
		var a=document.getElementById('m5');
		var b=document.getElementById('m4');
		var c=document.getElementById('m6');
		var d=document.getElementById('m2');
		var e=document.getElementById('m1');
		var f=document.getElementById('m3');
		var count=0;
		function allowDrop(ev) {
		    ev.preventDefault();
		}

		function drag(ev) {
		    ev.dataTransfer.setData("text", ev.target.id);
		}

		function drop(ev) {
		    ev.preventDefault();
		    var data = ev.dataTransfer.getData("text");
		    ev.target.appendChild(document.getElementById(data));
		    count++;
		    if(count==6){
		    	valdiate();
		    }
		}
		function valdiate(){
			if(document.getElementById('img1').parentNode==a){
				a.style.backgroundColor="green";
			}
			else{
				document.getElementById('img1').parentNode.style.backgroundColor="red";
			}
			if(document.getElementById('img2').parentNode==b){
				b.style.backgroundColor="green";
			}
			else{
				document.getElementById('img2').parentNode.style.backgroundColor="red";
			}
			if(document.getElementById('img3').parentNode==c){
				c.style.backgroundColor="green";
			}
			else{
				document.getElementById('img3').parentNode.style.backgroundColor="red";
			}
			if(document.getElementById('img4').parentNode==d){
				d.style.backgroundColor="green";
			}
			else{
				document.getElementById('img4').parentNode.style.backgroundColor="red";
			}
			if(document.getElementById('img5').parentNode==e){
				e.style.backgroundColor="green";
			}
			else{
				document.getElementById('img5').parentNode.style.backgroundColor="red";
			}
			if(document.getElementById('img6').parentNode==f){
				f.style.backgroundColor="green";
			}
			else{
				document.getElementById('img6').parentNode.style.backgroundColor="red";
			}
			count=0;
		}
		function reset(){
			location.reload();
		}
		var slideIndex = 1;
		showDivs(slideIndex);
		function plusDivs(n) {
		    showDivs(slideIndex += n);
		}

		function showDivs(n) {
		    var i;
		    var x = document.getElementsByClassName("slide");
		    if (n > x.length) {slideIndex = 1} 
		    if (n < 1) {slideIndex = x.length} ;
		    for (i = 0; i < x.length; i++) {
		        x[i].style.display = "none"; 
		    }
		    x[slideIndex-1].style.display = "block"; 
		}
		
	</script>
	<hr/>
</body>
</html>
<?php
}
include 'footer.php';
?>