<?php
$conn = new mysqli("localhost", "root", "", "cadastro");
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

$resultado = $conn->query("SELECT * FROM enderecos ORDER BY criado_em DESC");
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
                <th>Nome</th>
                <th>Estado</th>
                <th>CEP</th>
                <th>Foto</th>
                <th style="width: 150px;">Ações</th>
            </tr>
        </thead>
        <tbody>
           <?php while ($linha = $resultado->fetch_assoc()): ?>
            <tr>
                <td><?= htmlspecialchars($linha['nome']) ?></td>

                <td>
                    <?= htmlspecialchars($linha['rua']) ?>, <?= htmlspecialchars($linha['numero']) ?>
                    <?php if ($linha['complemento']): ?>
                        (<?= htmlspecialchars($linha['complemento']) ?>)
                    <?php endif; ?>
                    <br>
                    <?= htmlspecialchars($linha['bairro']) ?>, <?= htmlspecialchars($linha['cidade']) ?> - <?= htmlspecialchars($linha['estado']) ?>
                </td>
                <td><?= htmlspecialchars($linha['cep']) ?></td>
                <td>
                    <?php if ($linha['foto']): ?>
                        <img src="<?= htmlspecialchars($linha['foto']) ?>" alt="Foto" class="img-thumbnail" style="max-width: 100px;">
                    <?php else: ?>
                        <span class="text-muted">Sem foto</span>
                    <?php endif; ?>
                </td>
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
