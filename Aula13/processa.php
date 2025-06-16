<?php
function limparEntrada($dado) {
    return htmlspecialchars(trim($dado));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $primeiro_nome = limparEntrada($_POST["primeiro_nome"] ?? '');
    $ultimo_nome   = limparEntrada($_POST["ultimo_nome"] ?? '');
    $email         = limparEntrada($_POST["email"] ?? '');
    $sexo          = limparEntrada($_POST["sexo"] ?? '');

    if (empty($primeiro_nome) || empty($ultimo_nome) || empty($email) || empty($sexo)) {
        echo "<p style='color:red;'>Erro: Todos os campos são obrigatórios.</p>";
    } else {
        echo "<h2>Dados recebidos:</h2>";
        echo "Primeiro Nome: $primeiro_nome<br>";
        echo "Último Nome: $ultimo_nome<br>";
        echo "Email: $email<br>";
        echo "Sexo: $sexo<br>";
    }
} else {
    echo "<p>Formulário não enviado corretamente.</p>";
}
?>
