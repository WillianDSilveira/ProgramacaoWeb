<?php
$conn = new mysqli("localhost", "root", "", "candidatos_ads");
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

$resultado = $conn->query("SELECT * FROM candidatos");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pacientes Cadastrados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Lista de Candidatos</h1>
    </div>
     <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="formulario.php" class="btn btn-primary">Novo Cadastro</a>
    </div>

    <table class="table table-striped table-bordered align-middle">
        <thead class="table-dark">
            <tr>            
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Período</th>
                <th>Linguagens</th>
                <th>Nível</th>
                <th>DataCadastro</th>                           
                <th style="width: 150px;">Ações</th>
            </tr>
        </thead>
        <tbody>
           <?php while ($linha = $resultado->fetch_assoc()): ?>
            <tr>               
                <td><?= htmlspecialchars($linha['nome']) ?></td>

                <td><?= htmlspecialchars($linha['email']) ?></td>

                <td><?= htmlspecialchars($linha['telefone']) ?></td>

                <td><?= htmlspecialchars($linha['periodo']) ?></td>

                <td><?= htmlspecialchars($linha['linguagens']) ?></td>

                <td><?= htmlspecialchars($linha['nivel']) ?></td>

                <td><?= htmlspecialchars($linha['datacadastro']) ?></td>                
                
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
