<?php

$servername = "localhost";
$username =  "root";
$password = "";
$dbname = "member";

$connect = new mysqli ($servername, $username, $password, $dbname);

if($connect->connect_error){

    die("BAĞLANAMADI :");

}

$name = $_POST["name"];
$contact = $_POST["contact"];
$hospital = $_POST["hospital"];
$comment = $_POST ["comment"];
$blood = $_POST ["blood"]; 
$gender = $_POST ["gender"];


$ekle = "INSERT INTO users(name,contact,hospital,comment,blood,gender) values('$name','$contact','$hospital','$comment', '$blood','$gender')";
    if(mysqli_query($connect,$ekle)) {
        header('Location: guncel.php');

        
    }
    else {
    echo "Kayıt yapılamadı lütfen eksiksiz bilgi giriniz ...";
        

    }

?>

