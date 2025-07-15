<?php
$conn = new mysqli("localhost", "root", "", "candidatos_ads");
$id = $_GET['id'] ?? 0;
$stmt = $conn->prepare("SELECT * FROM candidatos WHERE id = ?");
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

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nome" class="form-label">Nome completo</label>
                            <input type="text" class="form-control" name="nome" value="<?= htmlspecialchars($dados['nome']) ?>" required />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="rua" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" value="<?= htmlspecialchars($dados['email']) ?>" required />
                        </div>                        
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="numero" class="form-label">Telefone</label>
                            <input type="text" class="form-control" name="telefone" value="<?= htmlspecialchars($dados['telefone']) ?>" required />
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="complemento" class="form-label">Periodo Atual do curso</label>
                            <input type="text" class="form-control" name="periodo" value="<?= htmlspecialchars($dados['periodo']) ?>" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md mb-3">
                            <label for="bairro" class="form-label">Linguagens</label>
                            <input type="text" class="form-control" name="linguagens" value="<?= htmlspecialchars($dados['linguagens']) ?>" required />
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md mb-3">
                            <label for="cidade" class="form-label">Nivel</label>
                            <input type="text" class="form-control" name="nivel" value="<?= htmlspecialchars($dados['nivel']) ?>" required />
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md mb-3">
                            <label for="estado" class="form-label">Disponibilidade</label>
                            <input type="text" class="form-control" name="disponibilidade" value="<?= htmlspecialchars($dados['disponibilidade']) ?>" required />
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3">
                            <label for="cep" class="form-label">Justficativa</label>
                            <input type="text" class="form-control" name="justificativa" value="<?= htmlspecialchars($dados['justificativa']) ?>" required />
                        </div>
                    </div>
            </div>

            <div class=" m-5 text-center">
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