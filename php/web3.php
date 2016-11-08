<?php
include 'homepage.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>The Goose With Golden Eggs</title>
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
  <p onmouseover='responsiveVoice.speak("The Goose With Golden Eggs")' style="padding-left: 120px;font-size: 40px; color: blue; font-family: arial;">The Goose With Golden Eggs</p>
	<div class="div1">
            <img class="subimg" src="/web development/project/img/goose1.jpg" alt="The Goose With Golden Eggs" >
            <p style="float: right; margin-left: 13em; margin-top: -12em;" class="para">
            Once upon a time, a man and his wife had the good fortune to have a goose which laid a golden egg every day. Lucky though they were, they soon began to think they were not getting rich fast enough.<br>
            They imagined that if the bird is able to lay golden eggs, its insides must be made of gold. And they thought that if they could get all that precious metal at once, they would get mighty rich very soon. So the man and his wife decided to kill the bird.<br>
            However, upon cutting the goose open, they were shocked to find that its innards were like that of any other goose!<br>
           </p>
  </div>
  <div style="padding-left: 120px;font-size: 60px; color: red; font-family: monospace;"> MORAL: THINK BEFORE YOU ACT! </div><br>
  </div><hr/>
</body>
</html>
<?php
include 'footer.php';
