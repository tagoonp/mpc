<?php
header("Access-Control-Allow-Origin: *");
date_default_timezone_set("Asia/Bangkok");

// die();

$host = 'localhost';
$user = 'root';
// $password = 'na20v^U+';
$password = 'mandymorenn';
$dbname = 'ittr';
$dbprefix = 'ittr_';

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
  echo "Can not connect";
  die();
}

if(mysqli_connect_errno()){
  echo mysqli_connect_error();
}

$conn->set_charset("utf8");

// Define other system value
$sys_date = date('Y-m-d');
$sys_datetime = date('Y-m-d H:i:s');

$client_ip = $_SERVER['REMOTE_ADDR'];

?>
