<?php
include 'auth.php';
include 'template.php';
if(empty($_POST)===false){
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    if(user_exists($username)===false){
        $error[]='The entered user doesnot exists.<br>Please Register!';
    }else{
        if(strlen($password)>32){
            $error[]='The password is too long';
        }
        $login=login($username,$password);
        if($login===false){
            $error[]= 'The entered password and username combination is wrong!';
        }else{
            $_SESSION['user_id']=$login;
            header('Location: dashboard.php');
            exit();
        }
    }
}?>
<div align="center">
    <?php
        echo '<h2>Well we could not log you in as.......</h2>';        
        echo output_errors($error);
        echo '<br><a href="home.php">Home</a>';
    ?>
</div>    
<?php
include 'footer.php';  