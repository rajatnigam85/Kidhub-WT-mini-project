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
    <style type="text/css">
      li h4 a{
        display: block;
        color: black;
        text-align: center;
        padding: 5px 50px;
        font-style:  Papyrus;
        font-size:25px;
        text-decoration: none;
        width: 100px;
      }
      li a:hover{
        background-color: white;
        color:black;
      }
    </style>
    <div id="main" style="background-image: url('/web development/project/img/wall16.jpg');background-repeat: no-repeat;background-size: cover;">
    <div class="con">
        <h1 style="color: white">ACTIVITY</h1>
        <div>
            <div class="one">
            <a href="canvas.php" >
                <img src="/web development/project/img/maze.jpg" height="200" width="200" alt="Unable to load!">
            </a>
            </div>
            <div class="two" style="padding-left: 120px;">
                <br><h1 style="padding-left: 98px;padding-top: 20px;color: white">MAZE</h1>
            </div>
        </div>
    </div><br><br>
    <div class="con">
        <div>
            <div class="one">
            <a href="dd.php" >
                <img src="/web development/project/img/dd.png" height="200" width="200" alt="Unable to load!">
            </a>
            </div>
            <div class="two" style="padding-left: 120px;">
                <br><h1 style="padding-left: 98px;padding-top: 20px;color: black">DRAG AND DROP SHAPES</h1>
            </div>
        </div>
    </div><br><br>
    <div class="con">
        <div>
            <div class="one">
            <a href="match.php" >
                <img src="/web development/project/img/match.jpg" height="200" width="200" alt="Unable to load!">
            </a>
            </div>
            <div class="two" style="padding-left: 120px;">
                <br><h1 style="padding-left: 98px;padding-top: 20px;color: white">MATCH</h1>
            </div>
        </div>
    </div><hr/>
    </div>
<?php
}
include 'footer.php';
