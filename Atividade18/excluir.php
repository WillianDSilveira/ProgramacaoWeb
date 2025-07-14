<?php
$conn = new mysqli("localhost", "root", "", "clinica");

$id = $_GET['id'] ?? 0;

$conn->query("DELETE FROM pacientes WHERE id = $id");

header("Location: listar.php");
exit;
