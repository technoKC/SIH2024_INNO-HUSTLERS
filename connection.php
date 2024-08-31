<?php
session_start();
$server = "localhost";
$username = "root";
$password = "";
$db = "sih";
$con = mysqli_connect($server, $username, $password, $db);

if($con){
    //echo "connection ok";
}
else{
    echo "connection failed".mysqli_connect_error();
}
?>