<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Veiculos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Sistema de Veículos</a>
            <div class="d-flex">
                <a class="nav-link text-white" href="#">Listar</a>
                <a class="nav-link text-white" href="#">Cadastrar</a>
            </div>
        </div>
    </nav>

    <!-- Lista -->
    <div class="card mt-5">
        <div class="card-body">
            <h4 class="text-primary">Veículos Cadastrados</h4>
            <table class="table table-bordered align-middle text-center">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Ano</th>
                        <th>Veículo</th>
                        <th>Tipo</th>
                        <th>Modelo</th>
                        <th>Marca</th>
                        <th>KM</th>
                        <th>Combustível</th>
                        <th>Ar Cond.</th>
                        <th>Direção</th>
                        <th>Fotos</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>7</td>
                        <td>2019</td>
                        <td>Automóveis</td>
                        <td>Automóvel</td>
                        <td>Corolla</td>
                        <td>Toyota</td>
                        <td>0</td>
                        <td>Gasolina</td>
                        <td>sim</td>
                        <td>Eletrica</td>
                        <td>
                            <img src="foto1.jpg" width="70">
                            <img src="foto2.jpg" width="70">
                        </td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="#">Editar</a>
                            <button class="btn btn-danger btn-sm" onclick="confirm('Remover este veículo?')">Remover</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>

</body>

</html>