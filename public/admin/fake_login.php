<?php
session_start();
$_SESSION['is_logged_in']=true;
var_dump($_SESSION['is_logged_in']);
header('location: http://'.$_SERVER['HTTP_HOST'].'/admin');
exit();