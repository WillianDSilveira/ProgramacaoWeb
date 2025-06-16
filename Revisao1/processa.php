<?php
// Verifica se os dados foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados do formulário
    $primeiroNome = $_POST['primeiroNome'] ?? '';
    $ultimoNome = $_POST['ultimoNome'] ?? '';
    $email = $_POST['email'] ?? '';
    $genero = $_POST['genero'] ?? '';

    // Exibe os dados
    echo "<h2>Dados Recebidos:</h2>";
    echo "<p><strong>Primeiro nome:</strong> $primeiroNome</p>";
    echo "<p><strong>Último nome:</strong> $ultimoNome</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Gênero:</strong> $genero</p>";
}
?>
