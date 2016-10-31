<?php
include 'template.php';
include 'auth.php';
require 'db.php';
if(empty($_POST)===false){
    global $uname,$age,$email,$pname,$pword;
    if(isset($_POST['uname'])){
        $uname=  $_POST['uname'];
    }
    if(isset($_POST['pword'])){
        $pword=  md5($_POST['pword']);
    }
    if(isset($_POST['name'])){
        $pname=  $_POST['name'];
    }
    if(isset($_POST['age'])){   
       $age  =  $_POST['age'];
    }
    if(isset($_POST['email'])){
        $email=  $_POST['email'];
    }
    if(empty($error)===true){
        if(user_exists($uname) === true){
            $error[]='Sorry, the username \''.$uname.'\' has already been taken!';
        }
        if(preg_match("/\\s/", $uname) == true){
            $error[]='The username must not contain any spaces!';
        }
        if(strlen($pword)<6){
            $error[]='The password should contain atleast 6 characters!';
        }
        if(filter_var($email,FILTER_VALIDATE_EMAIL) === false){
            $error[]='Please enter a valid email address!';
        }
        if(email_exists($email)){
            $error[]='Sorry, the email is \''.$email.'\' already in use!';
        }
    }
}
if(isset($_GET['success']) && empty($_GET['success'])){?>
<div align="center"><?php echo '<h3>You have been registered successfully!<br>Click here to login</h3><a href="home.php">Login</a>';?></div>
<?php
}else{
   if(empty($_POST) === false && empty($error) === true)
   {
       $register=array(
           'name'=>$pname,
           'age'=>$age,
           'username'=>$uname,
           'email'=>$email,
           'password'=>$pword,
           'active'=>1
       );
       new_user($register);
       header('Location:register.php?success');
       exit();
   }else{
       echo output_errors($error);
   }
}
include 'footer.php';