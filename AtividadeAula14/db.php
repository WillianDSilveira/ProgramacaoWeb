<?php
// Conexão com banco de dados
$host = 'localhost'; // seu host
$user = 'root'; // seu usuário do banco
$pass = ''; // sua senha do banco
$db   = 'teste'; // nome do banco onde a tabela aluno está

$conn = new mysqli($host, $user, $pass, $db, 3306);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>