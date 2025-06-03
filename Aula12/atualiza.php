<?php
$conn = new mysqli("localhost", "root", "", "cadastro");
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
// Consultar os dados
$id = $_POST['id'];
$nome = $_POST['nome'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];

if($_FILES['foto']['error'] == UPLOAD_ERR_OK) {
    $extensao = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
    $foto = 'uploads/' . uniqid() . '.' . strtolower($extensao);
    move_uploaded_file($_FILES['foto']['tmp_name'], $foto);
    $sql = "UPDATE pessoas SET nome=?, rua=?, numero=?, complemento=?, bairro=?, cidade=?, estado=?, cep=?, foto=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssssi", $nome, $rua, $numero, $complemento, $bairro, $cidade, $estado, $cep, $foto, $id);
} else {
    $sql = "UPDATE pessoas SET nome=?, rua=?, numero=?, complemento=?, bairro=?, cidade=?, estado=?, cep=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssi", $nome, $rua, $numero, $complemento, $bairro, $cidade, $estado, $cep, $id);
}
$stmt->execute();
header("Location: listar.php");
?>