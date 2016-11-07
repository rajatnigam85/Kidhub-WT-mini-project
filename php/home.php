<!DOCTYPE html>
<?php
include 'auth.php';
?>
<html>
<head>
	<meta charset="utf-8">
	<title>KIDHUB</title>
	<link rel="stylesheet" type="text/css" href="/web development/project/css/home.css">
	<script type="text/javascript">
		function checkForm(form){
			if(form.pword.value!==form.psw1.value){
				alert("Error:Passwords are not same!");
				return false;
			}
			return true;
		}
	</script>
</head>
<body>
<div>
	<img src="/web development/project/img/kid.jpg" style="padding-left:40px">
	<ul id="y">
	<li class="lix" style="font-size:20px;"><a class="n" href="#mg">About</a></li>
	<li class="lix"><button onclick="document.getElementById('mod').style.display='block'" class="button login">Login</li>
	<div id="mod" class="modal">
	<span onclick="document.getElementById('mod').style.display='none'" class="close" title="Close">&times;</span>
		<form class="modal-content animate" method="POST" action="login.php">
			<div class="imagecontainer">
			<img src="/web development/project/img/avatar.jpg" alt="Avatar">
			</div>
			<div class="container">
				<label><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="username" required>
				<label><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="password" required>
				<button type="submit" name="submit" class="log login">Login</button>
				<input type="checkbox" checked="checked">Remember me
			</div>
			<div class="container" style="background-color:#f1f1f1">
		      <button type="button" onclick="document.getElementById('mod').style.display='none'" class="button login">Cancel</button>
		      <span class="psw">Forgot <a href="changepassword.php">password?</a></span>
		    </div>
		</form>
	</div>
	<li class="lix"><button onclick="document.getElementById('mod1').style.display='block'" class="button signup">Sign Up</li>
	<div id="mod1" class="modal">
	<span onclick="document.getElementById('mod1').style.display='none'" class="close" title="Close Modal">&times;</span>
	<form class="modal-content animate" method="POST" action="register.php" onsubmit="return checkForm(this);">
	<div class="imagecontainer">
		      <img src="/web development/project/img/avatar.jpg" alt="Avatar" class="avatar">
        </div>
	<div class="container">
		<label><b>Name</b></label>
		<input type="text" placeholder="Enter Name" name="name" required>
		<label><b>Age</b></label>
		<input type="text" name="age" placeholder="Enter age" required="true">
		<label><b>Email</b></label>
		<input type="text" name="email" placeholder="xyz@abc.com" required>
		<label><b>Username</b></label>
		<input type="text" id="username" placeholder="Enter Username" name="uname" required>
		<label><b>Password</b></label>
		      <input type="password" id="psword" placeholder="Enter Password" name="pword" required>
		<label><b>Confirm Password</b></label>
		<input type="password" id="confirmpsw" placeholder="Re-Enter Password" name="psw1" required>
		<button type="submit" name="submit" class="log signup">SignUp</button>
		<input type="checkbox" checked="checked"> Remember me
		</div>
		<div class="container" style="background-color:#f1f1f1">
		      <button type="button" onclick="document.getElementById('mod1').style.display='none'" class="button signup">Cancel</button>
		      <span class="psw">Forgot <a href="#">password?</a></span>
		    </div>
	</form>
	</div>
	</ul>
</div>
<div class="rd">
<div class="imgcontainer">
	<div class="mySlides">
            <div align="center" style="width: 100%;margin: 0 auto;"><img class="animate1" src="/web development/project/img/i9.jpg" style="width:50%;height:auto;border:2px solid black;border-radius:20px;"></div>
	</div>
	<div class="mySlides">
            <div align="center" style="width: 100%;margin: 0 auto;"><img class="animate1" src="/web development/project/img/i4.jpeg" style="width:50%;height:auto;border:2px solid black;border-radius:20px;"></div>
	</div>
	<div class="mySlides">
            <div align="center" style="width: 100%;margin: 0 auto;"><img class="animate1" src="/web development/project/img/i7.jpg" style="width:50%;height:auto;border:2px solid black;border-radius:20px;"></div>
	</div>
</div>
<script src="/web development/project/js/func.js"></script>
<div class="info">
<p id="mg">
		<h1>What is KidHub?</h1>
		<h2 style="padding-left:100px"><i>We're here to help!
Is this your first time visiting our website? Yay, come on in and let us tell you more about what we do!
</i></h2> <hr/>
<h2 style="padding-left:100px">If you want your child to be a stellar student, don't limit learning to the walls of his classroom. Although the skills he's learning there are crucial to his intellectual and social growth, your child needs your help to open up the world of ideas.</h2><hr/>
<h2 style="padding-left:100px">At kidhub we believe that children need to have fun with learning to stay motivated. To keep them happy while making the most of precious instruction time, KIDHUB lets your child play games, enjoy stories that always have something to teach and rhymes that your child can sing along.</h2><hr/>
</p>
<div>
    <footer>
      <div align="center"><h3>&copy;www.kidhub.org</h3></div>
    </footer>
</div>
</div>
</div>
<script type="text/javascript">
	var modal=document.getElementById('mod');
	window.onclick=function(event){
		if(event.target===modal){
			modal.style.display="none"
		}
	}
</script>
</body>
</html>
