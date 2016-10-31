<html>
<head>
<title>Rhymes</title>
<style type="text/css">
.dropbtn{
	background-color: #0066ff;
	color:white;
	padding: 1px;
    font-size: 16px;
    border: 3px solid #000;
    cursor: pointer;
}
.dropbtn:hover, .dropbtn:focus {
    background-color: red;
}
.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: relative;
    background-color: #f9f9f9;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: green}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;}

 div.new{
 	/*background-image: url("C:/User/Priyanka/Downloads/kid1.jpg");*/
 	/*background-image : url("a1.jpg");*/
        padding-left: 120px;
 }
#m,#n{
 	float:right;
 	padding-right: 120px;
 	display: inline-block;
 	}
 .clearfix{
 	clear: both;
 }
 h3{
 	font-family:Arial;
 	color:cyan; 
 }
 h1{
 	color:yellow;
 }

</style>
</head>
<body>
    <div class="new" id="main">
    <h3>BITS OF PAPER</h3>
	<div class="dropdown">
	
		<button class="dropbtn"><img src="/web development/project/img/a12.jpg" width="150" height="70"></button>
		<div class="dropdown-content">
			<a href="bits.php">Lyrics/Audio</a>
			<a href="bitsvideo.php">Video</a>
		</div>
        </div><br>
	<h3 style="float: right; padding-right: 20px">TWINKLE TWINKLE LITTLE STAR</h3>
	<div class="clearfix"></div>
	<div class="dropdown" id="n">
	
		<button class="dropbtn"><img src="/web development/project/img/a7.jpg" width="150" height="70"></button>
		<div class="dropdown-content">
			<a href="twinkle.php">Lyrics/Audio</a>
			<a href="twinklevideo.php">Video</a>
		</div>
        </div><br>
    <h3>JOHNY JOHNY</h3>    
	<div class="dropdown">
	
		<button class="dropbtn"><img src="/web development/project/img/a8.jpg" width="150" height="70"></button>
		<div class="dropdown-content">
			<a href="johnny.php">Lyrics/Audio</a>
			<a href="johnyvideo.php">Video</a>
		</div>
        </div><br>
        <h3 style="float: right; padding-right: 120px">HUMPTY DUMPTY</h3>
        <div class="clearfix"></div>
        <div class="dropdown" id="m">
        
		<button class="dropbtn"><img src="/web development/project/img/a9.jpg" width="150" height="70"></button>
		<div class="dropdown-content">
			<a href="humpty.php">Lyrics/Audio</a>
			<a href="humptyvideo.php">Video</a>
		</div>
        </div><br>
		<h3>MARY HAD A LITTLE LAMB</h3>
        <div class="dropdown">
        
		<button class="dropbtn"><img src="/web development/project/img/a11.jpg" width="150" height="70"></button>
		<div class="dropdown-content">
			<a href="mary.php">Lyrics/Audio</a>
			<a href="maryvideo.php">Video</a>
		</div>
        </div><br>
    </div>

</body>
</html>