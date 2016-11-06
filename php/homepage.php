<html>
        <head>
            <title>KIDHUB</title>
            <link rel="stylesheet" type="text/css" href="/web development/project/css/dashboard.css">
            <style type="text/css">
                .sideNav{
                    height: 100%;
                    width: 0;
                    position: fixed;
                    z-index: 1;
                    top: 0;
                    left: 0;
                    background-color: #00004d;
                    overflow-x: hidden;
                    transition: 0.5s;
                    padding-top: 60px;
                }
                .sidenav a {
                    padding: 8px 8px 8px 32px;
                    text-decoration: none;
                    font-size: 25px;
                    color: #818181;
                    display: block;
                    transition: 0.3s
                }
                .sidenav a:hover, .offcanvas a:focus{
                    color: #f1f1f1;
                }

                .sidenav .closebtn {
                    position: absolute;
                    top: 0;
                    right: 25px;
                    font-size: 36px;
                    margin-left: 50px;
                }
                @media screen and (max-height: 450px) {
                  .sidenav {padding-top: 15px;}
                  .sidenav a {font-size: 18px;}
                }
                .head{
                    background-color: #333;
                }
                .head1{
                    z-index: 1;
                    transition: 0.5s;
                }
                ul {
                    list-style-type: none;
                    margin: 0;
                    padding: 0;
                    overflow: hidden;
                    background-color: #333;
                }

                li {
                    float: left;
                    border-right:1px solid #bbb;
                }

                li:last-child {
                    border-right: none;
                }

                li a {
                    display: block;
                    color: white;
                    text-align: center;
                    padding: 7px 16px;
                    text-decoration: none;
                }

                li a:hover {
                    background-color: orange;
                }

        </style>
        </head>
        <body>
        <header class="head1">
            <img src="/web development/project/img/kid.jpg" alt="no load" style="padding-left: 10px;"><hr/>
        </header>
        <nav id="main1" class="head">
        <ul style="display: inline-block;">
            <li style="cursor: pointer;font-size: 30px;color: white;" onclick="openNav()">&#9776;</li>
        </ul>
        <ul class="m" style="padding-left:40px;display: inline-block; position: absolute;">
                    <li><a  href="dashboard.php">Home</a></li>
                    <li><a  href="rhyme.php">Rhymes</a></li>
                    <li><a  href="story.php">Stories</a></li>
                    <li><a  href="activity.php">Activity</a></li>
                    <li><a  href="profile.php">Profile</a></li>
                    <li><a  href="contact.php">Contact Us</a></li>
                    <li><a  href="logout.php">Log Out</a></li>
            </ul>
        </nav><hr/>
            <div id="sideNav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="dashboard.php">Home</a>
                    <a href="rhyme.php">Rhymes</a>
                    <a href="story.php">Stories</a>
                    <a href="activity.php">Activity</a>
                    <a href="profile.php">Profile</a>
                    <a href="contact.php">Contact Us</a>
                    <a href="logout.php">Log Out</a>
            </div>

            <script>
                function openNav(){
                    document.getElementById('sideNav').style.width="250px";
                    document.getElementById("main").style.marginLeft = "130px";
                    document.getElementById("main1").style.marginLeft="200px";
                    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";

                }
                function closeNav(){
                    document.getElementById('sideNav').style.width="0px";
                    document.getElementById("main").style.marginLeft = "0";
                    document.body.style.backgroundColor = "white";
                    document.getElementById("main1").style.marginLeft="0px";
                }

            </script>
        </body>
</html>
