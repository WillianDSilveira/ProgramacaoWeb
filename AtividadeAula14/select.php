<?php
// Configuração da conexão com o banco de dados
$servername = "localhost";
$database = "teste";
$username = "root";
$password = "";

// Conectando ao banco de dados
$conn = mysqli_connect($servername, $username, $password, $database);

// Verifica a conexão
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}

// Executa a query desejada
$query = "SELECT id, nome FROM aluno";
$resultado = mysqli_query($conn, $query) or die(mysqli_error($conn));

// Exibe os dados encontrados
while ($row = mysqli_fetch_array($resultado)) {
    echo $row["id"] . " -- " . $row["nome"] . "<br>";
}

// Fecha a conexão
mysqli_close($conn);
?>
