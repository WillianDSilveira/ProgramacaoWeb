<?php
$conn = new mysqli("localhost", "root", "", "candidatos_ads");

$id = $_GET['id'] ?? 0;

$conn->query("DELETE FROM candidatos WHERE id = $id");

header("Location: listar.php");
exit;
