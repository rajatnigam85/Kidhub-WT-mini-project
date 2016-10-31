<?php
$localhost='localhost';
$dbuser='root';
$dbpsw='';
$dbname='info';
$con=mysql_connect($localhost,$dbuser,$dbpsw)or die("Database Connection Failed" .mysql_error());
$select_db=mysql_select_db($dbname,$con)or die("Database Selection Failed!" .mysql_error());
