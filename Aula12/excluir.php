<?php
$conn = new mysqli("localhost", "root", "", "cadastro");

$id = $_GET['id'] ?? 0;

$conn->query("DELETE FROM enderecos WHERE id = $id");

header("Location: listar.php");
exit;
