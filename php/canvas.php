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
<body>
<style type="text/css">
	input{
		height: 50px; width: 100px; font-size: 20px; color: red; border: 2px solid black; margin: 2px; border-radius: 5px;
	}
</style>
<div id="main" style="padding-left: 200px;background-image: url('/web development/project/img/wall4.jpg');background-size: cover;height: 1000px;">
<canvas id="myCanvas"  width="1000" height="900" style="border:5px groove black; float:left;opacity: 0.9;">
Your browser does not support the HTML5 canvas tag.</canvas><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<input type="button" name="2" value="right"  onclick="right()"><br>
<input type="button" name="1" value="left"  onclick="left()"><br>
<input type="button" name="3" value="up"  onclick="up()"><br>
<input type="button" name="4" value="down" onclick="down()"><br>
<input type="button" name="5" value="restart" onclick="restart()"><br>
<img id="scream" width="1" height="1" src="/web development/project/img/puzzle.jpg" alt="The Scream">
<br>
<br>
</div>
<script>
var c = document.getElementById("myCanvas");
var ctx = c.getContext("2d");
var x=280, y=260;
ctx.moveTo(x,y);
ctx.lineTo(x=x+40,y=y);
ctx.stroke();
ctx.strokeStyle="#FF0000";
function left(){
	ctx.lineTo(x=x-10,y=y);
	ctx.stroke();
}
function right(){
	ctx.lineTo(x=x+10,y=y);
	ctx.stroke();
}
function restart(){
	location.reload();
}
function up(){
	ctx.lineTo(x=x,y=y-10);
	ctx.stroke();
}
function down(){
	ctx.lineTo(x=x,y=y+10);
	ctx.stroke();
}
window.onload = function() {
    var c=document.getElementById("myCanvas");
    var ctx=c.getContext("2d");
    var img=document.getElementById("scream");
    ctx.drawImage(img,0,0,1000,1000);
};
/*document.onkeydown(function(e) {
    e=e||window.event;
    switch(e.which || e.keycode) {
        case 37: left();
        break;

        case 38: up();
        break;

        case 39: right();
        break;

        case 40: down();
        break;

        default: return; // exit this handler for other keys
    }
    e.preventDefault(); // prevent the default action (scroll / move caret)
});*/
document.addEventListener("keydown", function(event) {
  switch(event.which || event.keycode) {
      case 37: left();
      break;

      case 38: up();
      break;

      case 39: right();
      break;

      case 40: down();
      break;

      default: return; // exit this handler for other keys
  }
  event.preventDefault(); 
},false);
</script>

<?php
}
include 'footer.php';
?>
</body>
</html>
