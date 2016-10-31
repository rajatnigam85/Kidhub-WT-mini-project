<?php
include 'auth.php';

if(logged_in()===false){
    $error[]='You need to login first!';?>
    <h3><?php echo output_errors($error);
    ?></h3>
    <div id="main" align="center"><a href="home.php">Login</a></div>
<?php
}else{include 'homepage.php';   ?>
            <div id="main" class="con">
                <h2>For further information contact us:</h2><hr/>
                <table border="1">
                    <thead><div><h3>Contact info</h3></div></thead>
                    <tr>
                        <th style="padding: 15px">Sl no.</th>
                        <th style="padding: 15px">Name</th>
                        <th style="padding: 15px">Email Id</th>
                        <th style="padding: 15px">Phone Number</th>
                    </tr>
                    <tr>
                        <td style="padding: 25px" align="center">1.</td>
                        <td style="padding: 25px">Priyanka TS</td>
                        <td style="padding: 25px"><a href="mailto:Priyankaprinks1997@gmail.com">Priyankaprinks1997@gmail.com</a></td>
                        <td style="padding: 25px">8123665752</td>
                    </tr>
                    <tr>
                        <td style="padding: 25px" align="center">2.</td>
                        <td style="padding: 25px">Rajat Nigam</td>
                        <td style="padding: 25px"><a href="mailto:rjrajatnigam@gmail.com">rjrajatnigam@gmail.com</a></td>
                        <td style="padding: 25px">7073069785</td>
                    </tr>
                    <tr>
                        <td style="padding: 25px" align="center">3.</td>
                        <td style="padding: 25px">Rishabh Dutt</td>
                        <td style="padding: 25px"><a href="mailto:rishabh97dutt@gmail.com">rishabh97dutt@gmail.com</a></td>
                        <td style="padding: 25px">8762450421</td>
                    </tr>
                </table><br>
                <hr/>
            </div>
    
<?php
}
include 'footer.php';