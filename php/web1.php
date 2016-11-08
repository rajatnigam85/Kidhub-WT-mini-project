<?php
include 'homepage.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>The Hare and the tortoise</title>
  <style type="text/css">
    .div1{
      border-style: none;
      border-radius: 2px;
      padding-left: 120px;
    }
    .subimg{
      display:inline-block;
      height: 500px;
      width: 450px;
    }
    .para{
      font-size: 30px;
      padding-left: 120px;
    }
  </style>
</head>
<body>
<div id="main">
  <p onmouseover='responsiveVoice.speak("The Hare and the Tortoise")' style="padding-left: 120px;font-size: 40px; color: blue; font-family: arial;">The Hare and the Tortoise</p>
		<div class="div1">
            <img class="subimg" src="/web development/project/img/hare2.jpg" alt="The Hare and the Tortoise" >
            <p style="float: right; margin-left: 12em; margin-top: -12em;" class="para">
            There once was a speedy Hare who bragged about how fast he could run. Tired of hearing him boast, the Tortoise challenged him to a race. All the animals in the forest gathered to watch.<br>
            The Hare ran down the road for a while and then paused to rest. He looked back at the tortoise and cried out, "How do you expect to win this race when you are walking along at your slow, slow pace?"<br>
            The Hare stretched himself out alongside the road and fell asleep, thinking, "There is plenty of time to relax."<br>
            <!--<img class="subimg" src="hare3.jpg" style="float: right;" alt="The Hare and the Tortoise Story"/>-->
            The Tortoise walked and walked, never ever stopping until he came to the finish line.<br>
            The animals who were watching cheered so loudly for Tortoise that they woke up the Hare. The Hare stretched, yawned and began to run again, but it was too late. Tortoise had already crossed the finish line.<br>
            </p>
						<script src='https://code.responsivevoice.org/responsivevoice.js'></script>

  </div>
  <div style="padding-left: 120px;font-size: 60px; color: red; font-family: monospace;"> MORAL: SLOW AND STEADY WINS THE RACE. </div><br>
  </div>
  <hr/>

</body>
</html>
<?php
include 'footer.php';
?>
