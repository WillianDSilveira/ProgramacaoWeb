<?php
$conn = new mysqli ("localhost", "root", "", "cadastro");
if ($conn->connect_error) {
    die("Erro na conexão " . $conn->connect_error);
}

// Receber os dados do formulário
$nome = $_POST['nome'] ?? '';
$rua = $_POST['rua'] ?? '';
$numero = $_POST['numero'] ?? '';
$complemento = $_POST['complemento'] ?? '';
$bairro = $_POST['bairro'] ?? '';
$cidade = $_POST['cidade'] ?? '';
$estado = $_POST['estado'] ?? '';
$cep = $_POST['cep'] ?? '';
$foto = null;

// Upload da foto
if (isset($_FILES['foto']) && $_FILES['foto']['error'] == UPLOAD_ERR_OK){
    $extensao = strtolower(pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION));
    $permitidas = ['jpg', 'jpeg', 'png', 'gif'];
    if (in_array($extensao, $permitidas)) {
        if(!is_dir('uploads')) {
            mkdir('uploads', 0755, true);
        }
        $foto = 'uploads/' . uniqid() . '.' . $extensao;
        move_uploaded_file($_FILES['foto']['tmp_name'], $foto);
    } 
}

// Inserir no banco 
$stmt = $conn->prepare("INSERT INTO enderecos (nome, rua, numero, complemento, bairro, cidade, estado, cep, foto) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssssss", $nome, $rua, $numero, $complemento, $bairro, $cidade, $estado, $cep, $foto);
$stmt->execute();
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
                <p><strong>Endereço:</strong> <?= htmlspecialchars("$rua, $numero") ?>
                    <?= $complemento ? "( " . htmlspecialchars($complemento) . " )" : "" ?></p>
                <p><strong>Bairro:</strong> <?= htmlspecialchars($bairro) ?></p>
                <p><strong>Cidade / Estado:</strong> <?= htmlspecialchars("$cidade / $estado") ?></p>
                <p><strong>CEP:</strong> <?= htmlspecialchars($cep) ?></p>

                <?php if ($foto && file_exists($foto)): ?>
                    <p><strong>Foto enviada:</strong></p>
                    <img src="<?= htmlspecialchars($foto) ?>" alt="Foto do cadastro" class="img-thumbnail" style="max-width: 300px;">
                <?php else: ?>
                    <p><strong>Foto:</strong> Nenhuma foto enviada.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>