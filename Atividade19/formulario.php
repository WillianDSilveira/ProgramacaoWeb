<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Endereço</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <div class="card shadow-lg">            
            <h2 class="m-4 mt-5 text-center t">Formulário de Cadastro - Estágio Programação (ADS)</h2>
            <div class="card-body">
                <form action="processa.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nome" class="form-label">Nome completo</label>
                            <input type="text" class="form-control" name="nome" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Telefone</label>
                            <input type="text" class="form-control" name="telefone" inputmode="numeric" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Periodo Atual do Curso</label>
                            <select class="form-select" name="periodo" aria-label="Default select example" required>
                                <option selected>Selecione as opções</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md mb-3">
                            <label class="form-label">Linguagens de Conhecimento que Domina</label>
                            <input type="text" class="form-control" name="linguagens" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md mb-3">
                            <label class="form-label">Nivel de conhecimento</label>
                            <select class="form-select" name="nivel" aria-label="Default select example" required>
                                <option selected>Selecione as opções</option>
                                <option value="Junior">Junior</option>
                                <option value="Pleno">Pleno</option>
                                <option value="Senio">Senior</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md mb-3">
                            <label class="form-label">Disponibilidade de horário</label>
                            <input type="text" class="form-control" name="disponibiliade" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md mb-3">
                            <label class="form-label">Justificativa do interesse da vaga</label>
                            <textarea class="form-control" rows="3" name="justificativa"></textarea>
                        </div>
                    </div>

                    <div class="row m-1">
                        <button type="submit" class="btn btn-primary" href="listar.php">Enviar Cadastro</button>

                    </div>
                </form>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>