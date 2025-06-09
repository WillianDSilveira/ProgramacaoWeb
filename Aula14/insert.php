<?php
// Configurações de conexão
$servername = "localhost";
$database = "teste2";
$username = "root";
$password = "";

// Criando a conexão
$conn = mysqli_connect($servername, $username, $password, $database);

// Verificando a conexão
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}

echo "Conectado com sucesso<br>";

// Comando SQL para inserir um aluno
$sql = "INSERT INTO aluno (id, nome) VALUES (NULL, 'Testing')";

// Executando o comando
if (mysqli_query($conn, $sql)) {
    echo "Novo registro criado com sucesso";
} else {
    echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
}

// Fechando a conexão
mysqli_close($conn);
?>
