<?php

$server="localhost";
$username="root";
$password="";
$dbname="login_register";

$dsn="mysql:host=$server;dbname=$dbname";
try{
$dbconnection=new PDO ($dsn,$username,$password);

// echo "connect";

}catch (PDOException $error){
echo $error;
}


?>