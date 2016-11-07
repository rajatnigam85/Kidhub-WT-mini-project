<?php
include 'auth.php';

if(logged_in()===false){
    $error[]='You need to login first!';?>
    <h3><?php echo output_errors($error);
    ?></h3>
    <div id="main" align="center"><a href="home.php">Login</a></div>
<?php
}else{ include 'homepage.php';   ?>
  <style type="text/css">
  .x{
    background-image: url('/web development/project/img/wall9.jpg');
    background-size: cover;
    background-position: -50px 10px;
    z-index: -1;
  }
  </style>
  <div class="x">
            <div id="main" class="con">

                <div style="padding-left: 120px;padding-top: 0px;">
                <table border="2">
                    <br>
                    <thead><div><h3>Contact info</h3></div></thead>
                    <tr>
                        <th style="padding: 15px;font-size: 25px;">Sl no.</th>
                        <th style="padding: 15px;font-size: 25px;">Name</th>
                        <th style="padding: 15px;font-size: 25px;">Email Id</th>
                        <th style="padding: 15px;font-size: 25px;">Phone Number</th>
                    </tr>
                    <tr>
                        <td style="padding: 25px" align="center">1.</td>
                        <td style="padding: 25px;font-size: 30px;">Priyanka TS</td>
                        <td style="padding: 25px;font-size: 25px;"><a href="mailto:prinkspriyanka@gmail.com">prinkspriyanka@gmail.com</a></td>
                        <td style="padding: 25px;color: black;font-size: 25px;">8762221544</td>
                    </tr>
                    <tr>
                        <td style="padding: 25px" align="center">2.</td>
                        <td style="padding: 25px;font-size: 30px;">Rajat Nigam</td>
                        <td style="padding: 25px;font-size: 25px;"><a href="mailto:rajatnigam@gmail.com">rajatnigam@gmail.com</a></td>
                        <td style="padding: 25px;color: black;font-size: 25px;">8645113456</td>
                    </tr>
                    <tr>
                        <td style="padding: 25px" align="center">3.</td>
                        <td style="padding: 25px;font-size: 30px;">Rishabh Dutt</td>
                        <td style="padding: 25px;font-size: 25px;"><a href="mailto:rishabhrdx@gmail.com">rishabhrdx@gmail.com</a></td>
                        <td style="padding: 25px;color: black;font-size: 25px;">8467913579</td>
                    </tr>
                </table>
              </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <hr/>
            </div>
</div>
<?php
}
include 'footer.php';
