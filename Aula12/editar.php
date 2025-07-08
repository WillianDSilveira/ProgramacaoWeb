<?php
$conn = new mysqli("localhost", "root", "", "cadastro2");
$id = $_GET['id'] ?? 0;
$stmt = $conn->prepare("SELECT * FROM enderecos WHERE id = ?");
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
                <form action="atualiza.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $dados['id'] ?>" />

                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome completo</label>
                        <input type="text" class="form-control" name="nome" value="<?= htmlspecialchars($dados['nome']) ?>" required />
                    </div>

                    <div class="row">
                        <div class="col-md-8 mb-3">
                            <label for="rua" class="form-label">Rua</label>
                            <input type="text" class="form-control" name="rua" value="<?= htmlspecialchars($dados['rua']) ?>" required />
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="numero" class="form-label">Número</label>
                            <input type="text" class="form-control" name="numero" value="<?= htmlspecialchars($dados['numero']) ?>" required />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="complemento" class="form-label">Complemento</label>
                        <input type="text" class="form-control" name="complemento" value="<?= htmlspecialchars($dados['complemento']) ?>" />
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="bairro" class="form-label">Bairro</label>
                            <input type="text" class="form-control" name="bairro" value="<?= htmlspecialchars($dados['bairro']) ?>" required />
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="cidade" class="form-label">Cidade</label>
                            <input type="text" class="form-control" name="cidade" value="<?= htmlspecialchars($dados['cidade']) ?>" required />
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="estado" class="form-label">UF</label>
                            <input type="text" class="form-control" name="estado" value="<?= htmlspecialchars($dados['estado']) ?>" maxlength="2" required />
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="cep" class="form-label">CEP</label>
                        <input type="text" class="form-control" name="cep" value="<?= htmlspecialchars($dados['cep']) ?>" required />
                    </div>

                    <div class="mb-3">
                        <label for="foto" class="form-label">Trocar Foto</label>
                        <input type="file" class="form-control" name="foto" accept="image/*" />
                        <?php if ($dados['foto'] && file_exists($dados['foto'])): ?>
                            <div class="mt-2">
                                <img src="<?= htmlspecialchars($dados['foto']) ?>" alt="Foto Atual" class="img-thumbnail" style="max-width: 150px;" />
                            </div>
                        <?php endif; ?>
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
