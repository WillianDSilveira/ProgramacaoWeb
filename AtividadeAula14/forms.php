<?php
include 'db.php';

// Se for editar, pegar dados do aluno
$editando = false;
$alunoEdit = null;
if (isset($_GET['edit'])) {
    $id = intval($_GET['edit']);
    $result = $conn->query("SELECT * FROM aluno WHERE id = $id");
    if ($result->num_rows > 0) {
        $alunoEdit = $result->fetch_assoc();
        $editando = true;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <title>CRUD Aluno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="bg-light">
<div class="container mt-5">

    <h1 class="mb-4 text-center">Cadastro de Alunos</h1>

    <div class="card p-4 mb-5 shadow-sm">
        <form action="process.php" method="POST" class="row g-4">
            <input type="hidden" name="id" value="<?= $editando ? $alunoEdit['id'] : '' ?>">

            <div class="row-md-4">
                <input
                    type="text"
                    name="nome"
                    class="form-control form-control-lg"
                    placeholder="Nome do aluno"
                    required
                    value="<?= $editando ? htmlspecialchars($alunoEdit['nome']) : '' ?>"
                >
                
            </div>

            <div class="row-md-4">
                <input
                    type="number"
                    name="idade"
                    class="form-control form-control-lg"
                    placeholder="Idade"
                    required
                    value="<?= $editando ? htmlspecialchars($alunoEdit['idade']) : '' ?>"
                >
            </div>

            <div class="row-md-4">
                <?php if ($editando): ?>
                    <button type="submit" name="edit" class="btn btn-warning btn-lg w-100">Atualizar</button>
                    <a href="index.php" class="btn btn-secondary btn-lg w-100 mt-2">Cancelar</a>
                <?php else: ?>
                    <button type="submit" name="add" class="btn btn-primary btn-lg w-100">Adicionar</button>
                <?php endif; ?>
            </div>
        </form>
    </div>

    <h2 class="mb-3">Lista de Alunos</h2>
    <table class="table table-striped table-hover shadow-sm bg-white">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Idade</th>
                <th style="width: 150px;">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = $conn->query("SELECT * FROM aluno ORDER BY id DESC");
            if ($result->num_rows > 0):
                while ($row = $result->fetch_assoc()):
            ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= htmlspecialchars($row['nome']) ?></td>
                    <td><?= htmlspecialchars($row['idade']) ?></td>
                    <td>
                        <a href="?edit=<?= $row['id'] ?>" class="btn btn-sm btn-warning">Editar</a>
                        <a href="process.php?delete=<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Confirma exclusão do aluno?')">Excluir</a>
                    </td>
                </tr>
            <?php
                endwhile;
            else:
            ?>
                <tr><td colspan="3" class="text-center">Nenhum aluno cadastrado.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>

</div>
</body>
</html>
