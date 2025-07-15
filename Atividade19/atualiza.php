<?php
$conn = new mysqli("localhost", "root", "", "candidatos_ads");
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Pega os dados do POST
$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$periodo = $_POST['periodo'];
$linguagens = $_POST['linguagens'];
$nivel = $_POST['nivel'];
$disponibilidade = $_POST['disponibilidade'];
$justificativa = $_POST['justificativa'];

// Prepara a query
$sql = "UPDATE candidatos SET nome=?, email=?, telefone=?, periodo=?, linguagens=?, nivel=?, disponibilidade=?, justificativa=? WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssssi", $nome, $email, $telefone, $periodo, $linguagens, $nivel, $disponibilidade, $justificativa, $id);

// Executa e redireciona
if ($stmt->execute()) {
    header("Location: listar.php");
    exit;
} else {
    echo "Erro ao atualizar: " . $stmt->error;
}
?>
