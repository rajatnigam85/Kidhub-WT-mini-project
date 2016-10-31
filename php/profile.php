<?php
include 'auth.php';

require 'db.php';
if(empty($error)===true){
    global $name,$age,$mail,$uname;
    if(isset($_POST['pname'])){
        $name=$_POST['pname'];
    }
    if(isset($_POST['page'])){
        $age=$_POST['page'];
    }
    if(isset($_POST['pemail'])){
        $mail=$_POST['pemail'];
    }
    if(isset($_POST['uname'])){
        $uname=$_POST['uname'];
    }
    if(filter_var($mail,FILTER_VALIDATE_EMAIL) === false){
            $error[]='Please enter a valid email address!';
        }
}
if(logged_in()===false){
    $error[]='You need to login first!';?>
    <h3><?php echo output_errors($error);
    ?></h3>
    <div id="main" align="center"><a href="home.php">Login</a></div>
<?php
}else{ 
    include 'homepage.php';
    if(empty($_POST)===false && empty($error)===true){
        $update=array(
            'name'=>$name,
            'age'=>$age,
            'email'=>$mail,
            'username'=>$uname
        );
        update_data($update);
        }
    else{?><div id="main">
    <div id="mn"><?php
        echo output_errors($error);
    }
    ?></div>
    <div id='xmn' class="cont">
        <?php
            echo 'Your details have been updated';
        ?>
    </div>
    <div id="a" class="cont">
        <table border="1">
            <tr>
                <th style="padding: 25px;padding-left: 20px;font-size: 25px;">Name:</th>
                <td style="padding: 35px;padding-left: 50px;font-size: 24px;"><?php echo $data['name'] ?></td>
            </tr>
            <tr>
                <th style="padding: 25px;padding-left: 20px;font-size: 25px;">Age:</th>
                <td style="padding: 35px;padding-left: 60px;font-size: 24px;"><?php echo $data['age'] ?></td>
            </tr>
            <tr>
                <th style="padding: 25px;padding-left: 20px;font-size: 25px;">Email:</th>
                <td style="padding: 35px;padding-left: 50px;font-size: 24px;"><?php echo $data['email'] ?></td>
            </tr>
            <tr>
                <th style="padding: 25px;padding-left: 20px;font-size: 25px;">Username:</th>
                <td style="padding: 35px;padding-left: 50px;font-size: 24px;"><?php echo $data['username'] ?></td>
            </tr>
        </table>
        <div class="contain">
        <input type="button" class="button edit" value="Edit" onclick="edit()">
        </div>
    </div>
    <div class="con">
        <form id="abc" class="modal-content" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="container">
                <label><b>Name</b></label><br>
                <input type="text" placeholder="Enter Name" name="pname" value="<?php echo $data['name'] ?>" required><br>
                <label><b>Age</b></label><br>
                <input type="text" name="page" placeholder="Enter age" value="<?php echo $data['age'] ?>" required><br>
                <label><b>Email</b></label><br>
                <input type="text" name="pemail" placeholder="xyz@abc.com" value="<?php echo $data['email'] ?>" required><br>
                <label><b>Username</b></label><br>
                <input type="text" name="uname" placeholder="xxx" value="<?php echo $data['username'] ?>" required><br>
                <div align="center"><button type="submit" name="submit" onclick="save()" class="button edit">Save</button></div>
		</div>
        </form>
    </div>
    <br>
    <br>
    <hr/>
    </div>
    <script>
        var y=document.getElementById('abc');
        y.style.display='none';
        var x=document.getElementById('a');
        var z=document.getElementById('mn');
        z.style.display='none';
        var a=document.getElementById('xmn');
        a.style.display='none';
        function edit(){
            z.style.display='block';
            x.style.display='none';
            y.style.display='block';
        }
        function save(){
            x.style.display='block';
            y.style.display='none';
            z.style.display='none';
            a.style.display='block';
        }
    </script>
<?php    
}
include 'footer.php';