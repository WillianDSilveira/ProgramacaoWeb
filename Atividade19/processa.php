<?php

$conn = new mysqli("localhost", "root", "", "candidatos_ads");
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Receber os dados do formulário
$nome = $_POST['nome'];
$data_nascimento = $_POST['email'];
$telefone = $_POST['telefone'];
$periodo = $_POST['periodo'];
$linguagens = $_POST['linguagens'];
$nivel = $_POST['nivel'];
$disponibilidade = $_POST['disponibilidade'];
$justificativa = $_POST['justificativa'];


// Inserir no banco 
$stmt = $conn->prepare("INSERT INTO candidatos (nome, email, telefone, periodo, linguagens, nivel, disponibilidade, justificativa) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssss", $nome, $email, $telefone, $periodo, $linguagens, $nivel, $disponibilidade, $justificativa);
$stmt->execute();
header('Location: listar.php');
?>

