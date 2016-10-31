<?php
include 'template.php';
include 'auth.php';
if(empty($_POST)===false){
    global $uname,$new_pass,$confirm;
    if(isset($_POST['uname'])){
        $uname=$_POST['uname'];
    }
    if(isset($_POST['new_password'])){
        $new_pass=$_POST['new_password'];
    }
    if(isset($_POST['con_new_password'])){
        $confirm=$_POST['con_new_password'];
    }
    if(empty($error)===true){
        if($new_pass!==$confirm){
            $error[]="The passwords donot match!";
        }
        if(user_exists($uname)===false){
            $error[]="Incorrect username!";
        }
        if(strlen($new_pass)<6){
            $error[]='The password should contain atleast 6 characters!';
        }
    }
}
if(isset($_GET['success']) && empty($_GET['success'])){?>
   <div align="center"><?php echo '<h3>Your password has been changed successfully</h3>'?></div><?php 
}else{
    if(empty($_POST) === false && empty($error) === true)
       {
           change_password($uname,$new_pass);
           header('Location:changepassword.php?success');
           
           exit();
       }else{
           echo output_errors($error);
       }
}
?>
<div class="con">
    <form id="abc" class="modal-content" method="post" action="changepassword.php">
            <div class="container">
                <label><b>Username</b></label><br>
                <input type="text" name="uname" placeholder="xxx" required><br>
                <label><b>New Password</b></label><br>
                <input type="password" placeholder="Enter New Password" name="new_password" required><br>
                <label><b>Confirm New Password</b></label><br>
                <input type="password" name="con_new_password" placeholder="Confirm password" required><br>
                <div align="center"><button type="submit" name="submit" class="button edit">Change</button></div>
		</div>
        </form>
    <div align='center'><a href="home.php">Login</a></div>
    </div>
