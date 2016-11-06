<html>
<head>
	<link rel="stylesheet" type="text/css" href="/web development/project/css/dashboard.css">
	<style type="text/css">
		div.bg{
		    background-image : url("/web development/project/img/wall13.png");
		    background-repeat: repeat;
		    background-size: cover;
		    position: relative;
		 }
	</style>
	</head>
<body>
<?php
include 'auth.php';

if(logged_in()===false){
    $error[]='You need to login first!';?>
    <h3><?php echo output_errors($error);
    ?></h3>
    <div id="main" align="center"><a href="home.php">Login</a></div>
<?php
}else{include 'homepage.php';
?>   
    
    <div class="bg">
        <?php
        include 'rhymes.php';
        ?>
    </div>
    <hr/>
<?php
}
include 'footer.php';
?>
</body>
</html>

