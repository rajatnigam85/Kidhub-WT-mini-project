<?php
include 'homepage.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>The Lion and Mouse</title>
  <style type="text/css">
    .div1{
      border-style: none;
      border-radius: 2px;
      padding-left: 120px;
    }
    .subimg{
      display:inline-block;
      height: 400px;
      width: 450px;
    }
    .para{
      font-size: 30px;
      padding-left: 120px;
    }
  </style>
	<script src='https://code.responsivevoice.org/responsivevoice.js'></script>
</head>
<body>
<div id="main">
  <p onmouseover='responsiveVoice.speak("The Lion and the Mouse")' style="padding-left: 120px;font-size: 40px; color: blue; font-family: arial;">The Lion and the Mouse</p>
	<div class="div1">
            <img class="subimg" src="/web development/project/img/lion1.jpg" alt="The Lion and the Mouse" >
            <p style="float: right; margin-left: 12em; margin-top: -12em;" class="para">
            Once when a lion, the king of the jungle, was asleep, a little mouse began running up and down on him. This soon awakened the lion, who placed his huge paw on the mouse, and opened his big jaws to swallow him.<br>
            "Pardon, O King!" cried the little mouse. "Forgive me this time. I shall never repeat it and I shall never forget your kindness. And who knows, I may be able to do you a good turn one of these days!<br>
            The lion was so tickled by the idea of the mouse being able to help him that he lifted his paw and let him go.
            Sometime later, a few hunters captured the lion, and tied him to a tree. After that they went in search of a wagon, to take him to the zoo.<br>
            Just then the little mouse happened to pass by. On seeing the lion’s plight, he ran up to him and gnawed away the ropes that bound him, the king of the jungle.<br>
            "Was I not right?" said the little mouse, very happy to help the lion.<br>
            </p>
  </div>
  <div style="padding-left: 120px;font-size: 60px; color: red; font-family: monospace;">MORAL: SMALL ACTS OF KINDNESS WILL BE REWARDED GREATLY. </div><br>
  </div>
  <hr/>
</body>
</html>
<?php
include 'footer.php';
