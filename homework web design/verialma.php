<?php

$servername = "localhost";
$username =  "root";
$password = "";
$dbname = "member";

$connect = new mysqli ($servername, $username, $password, $dbname);

if($connect->connect_error){

    die("BAĞLANAMADI :");

}


?>