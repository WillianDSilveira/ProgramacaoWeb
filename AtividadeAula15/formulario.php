<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>PDV Pet Shop - Cadastro de Produtos</title>
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
            font-size: 40px;
            color: #ff914d;
        }
    </style>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="w-100" style="max-width: 600px;">
            <div class="text-center mb-4">
                <i class="fas fa-paw pet-icon"></i>
                <h1 class="mt-2">PDV Pet Shop</h1>
                <p class="text-muted">Cadastro de Produtos</p>
            </div>

            <div class="card p-4 shadow-sm">
                <form action="processa.php" method="POST" class="row g-3">
                    <div class="col-12">
                        <input type="text" id="nome" name="nome" class="form-control form-control-lg" placeholder="Nome do Produto" required>
                    </div>

                    <div class="col-12">
                        <input type="number" id="preco" name="preco" step="0.01" required class="form-control form-control-lg" placeholder="Preço do Produto">
                    </div>

                    <div class="col-12">
                        <input type="submit" value="Cadastrar Produto" class="btn btn-primary btn-lg w-100">
                        <a href="relatorio.php" class="btn btn-secondary btn-lg w-100 mt-2">Ver Relatório de Compras</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
