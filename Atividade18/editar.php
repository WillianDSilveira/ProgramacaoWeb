<?php
$conn = new mysqli("localhost", "root", "", "clinica2");
$id = $_GET['id'] ?? 0;
$stmt = $conn->prepare("SELECT * FROM pacientes WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$dados = $result->fetch_assoc();
if (!$dados) {
    die("Registro não encontrado.");
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>Editar Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-header bg-warning text-dark">
                <h4 class="mb-0">Editar Cadastro</h4>
            </div>
            <div class="card-body">
                <form action="atualiza.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $dados['id'] ?>" />

                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome completo</label>
                        <input type="text" class="form-control" name="nome" value="<?= htmlspecialchars($dados['nome']) ?>" required />
                    </div>

                    <div class="row">
                        <div class="col-md-8 mb-3">
                            <label for="rua" class="form-label">Data Nascimento</label>
                            <input type="text" class="form-control" name="data_nascimento" value="<?= htmlspecialchars($dados['data_nascimento']) ?>" required />
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="numero" class="form-label">CPF</label>
                            <input type="text" class="form-control" name="cpf" value="<?= htmlspecialchars($dados['cpf']) ?>" required />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="complemento" class="form-label">Telefone</label>
                        <input type="text" class="form-control" name="telefone" value="<?= htmlspecialchars($dados['telefone']) ?>" />
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="bairro" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" value="<?= htmlspecialchars($dados['email']) ?>" required />
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="cidade" class="form-label">Sexo</label>
                            <input type="text" class="form-control" name="sexo" value="<?= htmlspecialchars($dados['sexo']) ?>" required />
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="estado" class="form-label">Sintomas</label>
                            <input type="text" class="form-control" name="sintomas" value="<?= htmlspecialchars($dados['sintomas']) ?>" maxlength="2" required />
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="cep" class="form-label">Histórico</label>
                        <input type="text" class="form-control" name="historico" value="<?= htmlspecialchars($dados['historico']) ?>" required />
                    </div>
    
                    <?php endif; ?>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-warning">Atualizar</button>
                    <a href="listar.php" class="btn btn-secondary">Voltar</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
