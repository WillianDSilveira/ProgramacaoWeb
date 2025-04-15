<?php
// Verifica se os dados foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados do formulário
    $nome = isset($_POST['nome']) ? trim($_POST['nome']) : '';
    $preco = isset($_POST['preco']) ? trim($_POST['preco']) : '';

    // Verifica se os campos não estão vazios
    if ($nome === '' || $preco === '') {
        echo "<p style='color: red;'>Erro: Todos os campos são obrigatórios!</p>";
    } elseif (!is_numeric($preco) || $preco <= 0) {
        echo "<p style='color: red;'>Erro: Preço inválido.</p>";
    } else {
        // Exibe os dados recebidos
        echo "<h2>Produto cadastrado com sucesso!</h2>";
        echo "<p><strong>Nome:</strong> " . htmlspecialchars($nome) . "</p>";
        echo "<p><strong>Preço:</strong> R$ " . number_format($preco, 2, ',', '.') . "</p>";
    }
} else {
    echo "<p style='color: red;'>Acesso inválido.</p>";
}
?>
