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
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Formulário de Primeira Consulta</h4>
            </div>
            <div class="card-body">
                <form action="processa.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome completo</label>
                        <input type="text" class="form-control" name="nome" required>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="rua" class="form-label">Data de Nascimento</label>
                            <input type="date" class="form-control" name="data_nascimento" required>
                        </div>
                        <div class="col-md- mb-3">
                            <label for="numero" class="form-label">CPF</label>                            
                            <input type="text" class="form-control" name="cpf" inputmode="numeric" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="complemento" class="form-label">Telefone</label>
                            <input type="text" class="form-control" name="telefone" inputmode="numeric" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="bairro" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="cidade" class="form-label">Sexo</label>
                            <select class="form-select" name="sexo" aria-label="Default select example" required>
                                <option selected>Selecione as opções</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Feminino">Feminino</option>
                            </select>

                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Sintomas ou Queixas
                                Principais</label>
                            <textarea class="form-control" id="sintomas" rows="3" name="sintomas"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Histórico Médico</label>
                            <textarea class="form-control" id="historico" rows="3" name="historico"></textarea>
                        </div>
                    </div>

                    <div class="row m-1">
                        <button type="submit" class="btn btn-primary" href="listar.php">Registrar Paciente</button>
        
                    </div>
                </form>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>