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
    <div id="main">
    <div class="con">
        <h3>ACTIVITY</h3>
        <div>
            <div class="one">
            <a href="magic.php" >
                <img src="/web development/project/img/magic.jpg" height="200" width="200" alt="Unable to load!"> 
            </a>
            </div>
            <div class="two">
                <br><ul style="list-style-type: none">
                    <li style="font-style: italic;"><h4><a href="magic.php">MAGIC NUMBER</a></h4></li>
                </ul>
            </div>
        </div>        
    </div><hr/>
    <div class="con">
        <div>
            <div class="one">
            <a href="dd.php" >
                <img src="/web development/project/img/dd.png" height="200" width="200" alt="Unable to load!"> 
            </a>
            </div>
            <div class="two">
                <br><ul style="list-style-type: none">
                    <li style="font-style: italic;"><h4><a href="magic.php">DRAG AND DROP SHAPES</a></h4></li>
                </ul>
            </div>
        </div>        
    </div><hr/>
    <div class="con">
        <div>
            <div class="one">
            <a href="word.php" >
                <img src="/web development/project/img/word.jpg" height="200" width="200" alt="Unable to load!"> 
            </a>
            </div>
            <div class="two">
                <br><ul style="list-style-type: none">
                    <li style="font-style: italic;"><h4><a href="magic.php">DRAG AND DROP WORDS</a></h4></li>
                </ul>
            </div>
        </div>        
    </div><hr/>
    </div>
<?php
}
include 'footer.php';