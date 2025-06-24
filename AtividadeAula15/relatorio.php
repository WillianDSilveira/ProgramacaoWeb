<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Carrinho de Compras - PDV Pet Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
    <style>
        body {
            background: linear-gradient(to right, #fceabb, #f8b500);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .card {
            border: none;
            border-radius: 20px;
            background-color: #fffdf5;
        }

        .form-control:focus {
            border-color: #ffb84d;
            box-shadow: 0 0 0 0.2rem rgba(255, 184, 77, 0.25);
        }

        .btn-primary {
            background-color: #ff914d;
            border: none;
        }

        .btn-primary:hover {
            background-color: #ff7b1f;
        }

        .pet-icon {
            font-size: 200px;
            color: #ff914d;
        }

        .table-orange {
            background-color: #ffb84d;
            color: black;           
        }

        .table-orange th,
        .table-orange td {
            background-color: #ffe0b3;
            color: black;       
        }
    </style>

</head>

<body class="bg-light">

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="w-100" style="max-width: 900px;">
            <h1 class="mb-4 text-center">Carrinho de Produtos Comprados</h1>
            <div class="card shadow-sm p-4">

                <?php
                $conn = new mysqli("localhost", "root", "", "petshop");
                if ($conn->connect_error) {
                    die("<div class='alert alert-danger'>Erro na conexão: " . $conn->connect_error . "</div>");
                }

                $sql = "SELECT * FROM produtos";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo "<table class='table table-bordered table-striped table-hover table table-bordered table-orange'>";
                    echo "<thead class='table-dark'><tr><th>ID</th><th>Nome</th><th>Preço (R$)</th><th>Ações</th></tr></thead><tbody>";

                    $total = 0;

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['nome']}</td>
                                <td>R$ " . number_format($row['preco'], 2, ',', '.') . "</td>
                                <td>
                                    <a href='relatorio.php?edit={$row['id']}' class='btn btn-warning btn-sm'>Editar</a>
                                    <a href='processa.php?delete={$row['id']}' class='btn btn-danger btn-sm' onclick=\"return confirm('Tem certeza que deseja excluir?');\">Excluir</a>
                                </td>
                              </tr>";
                        $total += $row['preco'];
                    }

                    echo "</tbody>
                          <tfoot><tr class='table-secondary'>
                              <td colspan='2'><strong>Total</strong></td>
                              <td colspan='2'><strong>R$ " . number_format($total, 2, ',', '.') . "</strong></td>
                          </tr></tfoot>
                          </table>";
                } else {
                    echo "<p class='text-center'>Nenhum produto cadastrado.</p>";
                }

                // Edição
                if (isset($_GET['edit'])) {
                    $id = intval($_GET['edit']);
                    $res = $conn->query("SELECT * FROM produtos WHERE id = $id");
                    $produto = $res->fetch_assoc();
                ?>
                    <hr>
                    <form action="processa.php" method="POST">
                        <input type="hidden" name="id" value="<?= $produto['id'] ?>">
                        <div class="mb-3">
                            <label>Nome do Produto</label>
                            <input type="text" name="nome" class="form-control" value="<?= $produto['nome'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label>Preço</label>
                            <input type="number" name="preco" step="0.01" class="form-control" value="<?= $produto['preco'] ?>" required>
                        </div>
                        <button type="submit" name="update" class="btn btn-success">Salvar Alterações</button>
                        <a href="relatorio.php" class="btn btn-secondary">Cancelar</a>
                    </form>
                <?php
                }

                $conn->close();
                ?>

                <div class="text-center mt-4">
                    <a href="formulario.php" class="btn btn-primary">Voltar ao Cadastro</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>