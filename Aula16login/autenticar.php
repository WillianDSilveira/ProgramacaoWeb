<?php
session_start();
require 'db.php';

$email = $_POST['email'];
$senha = sha1($_POST['senha']); // Use password_hash e password_verify para maior segurança

$sql = "SELECT * FROM usuarios WHERE email = ? AND senha = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $email, $senha);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $_SESSION['usuario'] = $email;
    header("Location: home.php");
    exit;
} else {
    echo "Usuário ou senha incorretos.";
}
?>
