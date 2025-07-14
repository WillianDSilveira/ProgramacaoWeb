<?php

$conn = new mysqli("localhost", "root", "", "clinica");
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Receber os dados do formulário
$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$sintomas = $_POST['sintomas'];
$historico = $_POST['historico'];


// Inserir no banco 
$stmt = $conn->prepare("INSERT INTO pacientes (nome, data_nascimento, cpf, telefone, email, sexo, sintomas, historico) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssss", $nome, $data_nascimento, $cpf, $telefone, $email, $sexo, $sintomas, $historico);
$stmt->execute();
header('Location: listar.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro Realizado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="alert alert-success">
            <h4 class="alert-heading">Cadastro Realizado com Sucesso!</h4>
            <p>Os dados foram armazenados no banco e a foto foi salva.</p>
            <hr>
            <a href="formulario.html" class="btn btn-primary">Cadastrar novo</a>
            <a href="listar.php" class="btn btn-secondary">Ver cadastros</a>
        </div>
        <div class="card">
            <div class="card-header">
                <strong>Detalhes do Cadastro</strong>
            </div>
            <div class="card-body">
                <p><strong>Nome:</strong> <?= htmlspecialchars($nome) ?></p>
                <p><strong>Data Nascimento:</strong> <?= htmlspecialchars($data_nascimento) ?></p>                   
                <p><strong>CPF:</strong> <?= htmlspecialchars($cpf) ?></p>
                <p><strong>Telefone:</strong> <?= htmlspecialchars($telefone) ?></p>
                <p><strong>Email:</strong> <?= htmlspecialchars($email) ?></p>
                <p><strong>Sexo:</strong> <?= htmlspecialchars($sexo) ?></p>
                <p><strong>Sintomas:</strong> <?= htmlspecialchars($sintomas) ?></p>
                <p><strong>Historico:</strong> <?= htmlspecialchars($historico) ?></p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>