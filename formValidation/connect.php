<?php
// Database connection details
$servername = "localhost";
$username = "root";  
$passwordDB = "";  
$dbname = "login_register";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $passwordDB);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 

catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>