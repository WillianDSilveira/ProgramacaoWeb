<?php
$conn = new mysqli("localhost", "root", "", "clinica2");
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

$resultado = $conn->query("SELECT * FROM pacientes");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Endereços</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Lista de Endereços</h1>
        <a href="formulario.html" class="btn btn-primary">Novo Cadastro</a>
    </div>

    <table class="table table-striped table-bordered align-middle">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Data Nascimento</th>
                <th>CPF</th>
                <th>Telefone</th>
                <th>E-mail</th>
                <th>Sexo</th>                
                <th style="width: 150px;">Ações</th>
            </tr>
        </thead>
        <tbody>
           <?php while ($linha = $resultado->fetch_assoc()): ?>
            <tr>
                <td><?= htmlspecialchars($linha['nome']) ?></td>

                <td><?= htmlspecialchars($linha['data nascimento']) ?></td>

                <td><?= htmlspecialchars($linha['cpf']) ?></td>

                <td><?= htmlspecialchars($linha['telefone']) ?></td>

                <td><?= htmlspecialchars($linha['email']) ?></td>

                <td><?= htmlspecialchars($linha['sexo']) ?></td>
                <td>
                    <a href="editar.php?id=<?= $linha['id'] ?>" class="btn btn-sm btn-warning">Editar</a>
                    <a href="excluir.php?id=<?= $linha['id'] ?>" onclick="return confirm('Tem certeza que deseja excluir?')" class="btn btn-sm btn-danger">Excluir</a>
                </td>
            </tr>
           <?php endwhile; ?>
        </tbody>
    </table>
</div>
</body>
</html>
