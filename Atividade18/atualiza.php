<?php

$conn = new mysqli("localhost", "root", "", "clinica");
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
// Consultar os dados
$id = $_POST['id'];
$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$sintomas = $_POST['sintomas'];
$historico = $_POST['historico'];

$sql = "UPDATE pacientes SET nome=?, data_nascimento=?, cpf=?, telefone=?, email=?, sexo=?, sintomas=?, historico=? WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssssi", $nome, $data_nascimento, $cpf, $telefone, $email, $sexo, $sintomas, $historico, $id);

$stmt->execute();
header("Location: listar.php");
?>