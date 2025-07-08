<?php
$host = 'localhost';
$db = 'login_db';
$user = 'root';
$pass = ''; // Altere se necessário

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>
