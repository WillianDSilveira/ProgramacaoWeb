<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema de Veículos</title>
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

  <!-- Cadastro -->
  <div class="container mt-4">
    <div class="card shadow">
      <div class="card-body">
        <h3 class="text-primary">Cadastro de Veículo</h3>
        <form>
          <div class="row g-3">
            <div class="row">
              <div class="col-md-3">
              <label for="ano" class="form-label">Ano do Bem</label>
              <input type="text" class="form-control" id="ano">
              </div>
              <div class="col-md-3">
              <label class="form-label">Veículo</label>
              <select class="form-select">
                <option selected>Automóveis</option>
              </select>
              </div>


            </div>
            
            
            <div class="col-md-3">
              <label class="form-label">Tipo</label>
              <select class="form-select">
                <option selected>Automóvel</option>
              </select>
            </div>
            <div class="col-md-4">
              <label class="form-label">KM</label>
              <input type="text" class="form-control" placeholder="Digite a quilometragem">
            </div>
            <div class="col-md-4">
              <label class="form-label">Modelo</label>
              <input type="text" class="form-control">
            </div>
            <div class="col-md-4">
              <label class="form-label">Marca</label>
              <input type="text" class="form-control">
            </div>
            <div class="col-md-4">
              <label class="form-label">Combustível</label>
              <select class="form-select">
                <option selected>Não informado</option>
                <option>Gasolina</option>
                <option>Etanol</option>
              </select>
            </div>
            <div class="col-md-4">
              <label class="form-label">Ar Condicionado</label>
              <select class="form-select">
                <option selected>Não informado</option>
                <option>sim</option>
              </select>
            </div>
            <div class="col-md-4">
              <label class="form-label">Direção</label>
              <select class="form-select">
                <option selected>Não informado</option>
                <option>Eletrica</option>
              </select>
            </div>
            <div class="col-md-12">
              <label class="form-label">Foto do Veículo</label>
              <input type="file" class="form-control">
            </div>
          </div>
          <div class="mt-4 text-end">
            <button type="submit" class="btn btn-success">Salvar Veículo</button>
          </div>
        </form>
      </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>