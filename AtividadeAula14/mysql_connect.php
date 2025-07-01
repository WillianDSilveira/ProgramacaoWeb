<?php
$servername = "localhost";
$database = "teste";
$username =  "root";
$password = "";
// Criando a conexão
$conn = mysqli_connect($servername, $username, $password, $database, 3306);

// vereigficando a conexão
if(!$conn) {
    die("falha na conexão".mysqli_connect_error());
}

echo "Conecetado com sucesso";

// Fechando a conexão
mysqli_close($conn);
?>