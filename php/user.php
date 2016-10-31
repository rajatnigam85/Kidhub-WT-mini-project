<?php
function change_password($uname,$pass){
    $pass=md5($pass);
    $uname=  sanitize($uname);
    mysql_query("UPDATE `users` SET `password` = '$pass' WHERE `username` = '$uname' ") or die(mysql_error());
}
function update_data($update){
    global $session;
    $x=array();
    array_walk($update, 'array_sanitize');
    foreach($update as $field=>$data){
        $x[]='`'.$field.'`=\''.$data.'\'';
    }
    mysql_query("UPDATE `users` SET " . implode(', ', $x) . " WHERE `user_id` = $session");
}
function user_data($user_id){
    $data=array();
    $user_id= (int)$user_id;
    
    $arg_num=  func_num_args();
    $get_arg=  func_get_args();
    
    if($arg_num>1){
        unset($get_arg[0]);
        
        $fields=  '`'.implode('`, `', $get_arg).'`';
        $data= mysql_fetch_assoc(mysql_query("SELECT $fields FROM `users` WHERE `user_id` = $user_id"));
        
        return $data;
    }
}
function user_exists($username){
    $username=  sanitize($username);
    $query=  mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `username` = '$username'");
    return (mysql_result($query,0)==1) ? true : false;
}
function user_id($username){
    $username=  sanitize($username);
    return mysql_result(mysql_query("SELECT `user_id` FROM `users` WHERE `username` ='$username'"), 0,
            'user_id');
}
function login($a,$b){
    
    $user_id=  user_id($a);
    $a=  sanitize($a);
    $b=  md5($b);
    return (mysql_result(mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `username`='$a' AND `password`='$b'"), 0)==1)?$user_id:false;
}
function logged_in(){
    return isset($_SESSION['user_id'])?true:false;
}
function email_exists($email){
    $email=  sanitize($email);
    $query=  mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `email` = '$email'");
    return (mysql_result($query,0)==1) ? true : false;
}
function new_user($register_data){
    array_walk($register_data, 'array_sanitize');
    $fields = '`'.implode('`, `',  array_keys($register_data)).'`';
    $data = '\''.implode('\', \'', $register_data).'\'';
    
    mysql_query("INSERT INTO `users` ($fields) VALUES ($data)");
}
