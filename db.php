<?php
$host = 'localhost'; 
$dbname = 'crud_dupla11';
$username = 'root';
$password = 'root';

$conn = new mysqli($host, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }
?>