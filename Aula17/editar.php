<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Editar Veículo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .foto-veiculo {
      width: 100px;
      margin-right: 10px;
      position: relative;
    }
    .foto-veiculo img {
      width: 100%;
      height: auto;
      border-radius: 4px;
    }
    .btn-remover-foto {
      position: absolute;
      top: -8px;
      right: -8px;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Sistema de Veículos</a>
    </div>
  </nav>

  <div class="container mt-4">
    <div class="card shadow">
      <div class="card-body">
        <h3 class="text-primary">Editar Veículo</h3>
        <form action="atualizar_veiculo.php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" value="7">
          <div class="row g-3">
            <div class="col-md-2">
              <label class="form-label">Ano</label>
              <input type="text" class="form-control" name="ano" value="2019">
            </div>
            <div class="col-md-3">
              <label class="form-label">Veículo</label>
              <input type="text" class="form-control" name="veiculo" value="Automóveis">
            </div>
            <div class="col-md-3">
              <label class="form-label">Tipo</label>
              <input type="text" class="form-control" name="tipo" value="Automóvel">
            </div>
            <div class="col-md-4">
              <label class="form-label">KM</label>
              <input type="text" class="form-control" name="km" value="0">
            </div>
            <div class="col-md-4">
              <label class="form-label">Modelo</label>
              <input type="text" class="form-control" name="modelo" value="Corolla">
            </div>
            <div class="col-md-4">
              <label class="form-label">Marca</label>
              <input type="text" class="form-control" name="marca" value="Toyota">
            </div>
            <div class="col-md-4">
              <label class="form-label">Combustível</label>
              <input type="text" class="form-control" name="combustivel" value="Gasolina">
            </div>
            <div class="col-md-4">
              <label class="form-label">Ar Condicionado</label>
              <input type="text" class="form-control" name="ar_condicionado" value="sim">
            </div>
            <div class="col-md-4">
              <label class="form-label">Direção</label>
              <input type="text" class="form-control" name="direcao" value="Eletrica">
            </div>
          </div>

          <!-- Fotos atuais -->
          <div class="mt-4">
            <label class="form-label">Fotos atuais</label>
            <div class="d-flex flex-wrap">
              <div class="foto-veiculo">
                <img src="foto1.jpg" alt="Foto 1">
                <button type="button" class="btn btn-danger btn-sm btn-remover-foto">×</button>
              </div>
              <div class="foto-veiculo">
                <img src="foto2.jpg" alt="Foto 2">
                <button type="button" class="btn btn-danger btn-sm btn-remover-foto">×</button>
              </div>
            </div>
          </div>

          <!-- Novas fotos -->
          <div class="mt-4">
            <label class="form-label">Adicionar novas fotos</label>
            <input type="file" class="form-control" name="fotos[]" multiple>
          </div>

          <!-- Botões -->
          <div class="mt-4 text-end">
            <button type="submit" class="btn btn-primary">Atualizar</button>
            <a href="listar_veiculos.php" class="btn btn-secondary">Cancelar</a>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
    