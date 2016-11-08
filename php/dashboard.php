<html>
<head>
<title>KIDHUB</title>
<link rel="stylesheet" type="text/css" href="/web development/project/css/dashboard.css">
</head>
<body >

<?php
include 'auth.php';

if(logged_in()===false){
    $error[]='You need to login first!';?>
    <h3><?php echo output_errors($error);
    ?></h3>
    <div id="main" align="center"><a href="home.php">Login</a></div>
<?php
}else{
    include 'homepage.php';
?>
<div style="background-image: url('/web development/project/img/wall3.jpg');background-size:cover;">
    <div id="main">
    <div class="con">
    <h2 style="color:orange;">Welcome <?php echo $data['name'];?>,</h2>
    </div>
    <div class="con" id="div1">
        <div id="rhyme">
        <h3 style="padding-left:10px;color: black;font-size:30px;">RHYMES</h3>

            <div class="one">
            <a href="rhyme.php" >
            <img src="/web development/project/img/rhyme.png" style="padding-left:10px" height="200" width="200" alt="Unable to load!">
            </a>
            </div>
            <div class="two">
                <br><p id="zyx" style="color: white;font-size:  25px;"><b>The rhymes section contains varieties of rhymes which also consists of audio,video and lyrics for
                        the kids to sing and learn along. They are a way for kid to learn and grow with fun.</b></p>
            </div>
        </div>
    </div><br>
    <div class="con1" id="div2">

        <div id="story">
            <h3 style="padding-left:10px;color: orange;font-size: 30px;">STORIES</h3>
            <div class="one">
            <a href="story.php" >
            <img src="/web development/project/img/story.jpg" style="padding-left:10px" height="200" width="200" alt="Unable to load!">
            </a>
            </div>
            <div class="two">
                <br><p id="zyx" style="color: white; font-size: 25px;"><b>The stories section contains varieties of stories which also consists of audio,video and text for
                        the kids to read and learn along. They are a way for kid to learn and grow with fun.</b></p>
            </div>
        </div>
    </div>
    <div class="clearfix"></div><br>
    <div class="con1" id="div3">

        <div id="activity">
            <h3 style="padding-left:10px;color: blue;font-size: 30px;">ACTIVITY</h3>
            <div class="one">
            <a href="activity.php" >
            <img src="/web development/project/img/act.jpg" height="200" width="200" alt="Unable to load!" style="padding-left:10px">
            </a>
            </div>
            <div class="two">
                <br><p id="zyx" style="color:white;font-size: 25px;"><b>The activity section contains varieties of activities which consists of varieties of games and activities like magic numbers for
                        the kids to play along. They are a way for kid to learn and grow with fun.</b></p>
            </div>
        </div>
    </div><hr/>
    </div>
    </div>
    <script type="text/javascript">
        window.onscroll = function() {div1(), div2(), div3()};
        function div1() {
            if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {
                document.getElementById("div1").className = "con2";
                document.getElementById("div2").className = "con1";
            }else{
                document.getElementById("div1").className = "con1";
            }
        }
        function div2() {
            if (document.body.scrollTop > 90 || document.documentElement.scrollTop > 90) {
                document.getElementById("div2").className = "con2";
                document.getElementById("div1").className = "con1";
            }else{
                document.getElementById("div2").className = "con1";
                document.getElementById("div1").className = "con2";
            }
        }
        function div3() {
            if (document.body.scrollTop > 250 || document.documentElement.scrollTop > 250) {
                document.getElementById("div3").className = "con2";
                document.getElementById("div2").className = "con1";
                document.getElementById("div1").className = "con1";
            }else{
                document.getElementById("div3").className = "con1";
            }
        }
    </script>
<?php
}
include 'footer.php';?>
</body>
</html>
