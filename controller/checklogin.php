<?php
include "config.class.php";
include "database.fnc.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(!isset($_POST['email'])){
  disconnect($conn);
  die();
}

if(!isset($_POST['password'])){
  disconnect($conn);
  die();
}


$password = mysqli_real_escape_string($conn, base64_encode($_POST['password']));
$email = mysqli_real_escape_string($conn, $_POST['email']);

$tb1 = "useraccount";

$strSQL = "SELECT * FROM $tb1 a
           WHERE
            a.email = '$email'
            AND a.password = '$password'
            AND a.use_status = '1'
            AND a.allow_status = '1'
            AND a.delete_status = '0'";
$result = select($conn, $strSQL);

if($result){
  echo json_encode($result);
}else{
  echo $strSQL;
}

disconnect($conn);
die();
?>
