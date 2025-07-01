<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Carrinho de Compras - PDV Pet Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
    <style>
        body {
            background: linear-gradient(to right, #fceabb,rgb(248, 0, 0));  /* #f8b500 */
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
            <div class="text-center mb-6">
                <i class="fas fa-paw pet-icon"></i>
                <h1 class="mb-4 text-center">Pedido de Compras</h1>
            </div>
            
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
                    echo "<thead class='table-dark'><tr><th>ID</th><th>Nome</th><th>Preço (R$)</th></tr></thead><tbody>";

                    $total = 0;

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['nome']}</td>
                                <td>R$ " . number_format($row['preco'], 2, ',', '.') . "</td>

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
                    
                <?php
                }

                $conn->close();
                ?>
                <form action="processa.php" method="GET">
                    <div class="col-12 d-flex justify-content-center" action="processa.php">
                        <button href="formulario.php" type="submit" name="delete_produtos" class="btn btn-secondary btn-lg w-50 mt-1">Nova Compra</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>