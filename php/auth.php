<?php
session_start();
//error_reporting(0);
require 'db.php';
require 'user.php';
require 'general.php';
if(logged_in()===true){
    $session=$_SESSION['user_id'];
    $data=  user_data($session,'user_id','name','age','username','email','password','active');
}
$error=array();