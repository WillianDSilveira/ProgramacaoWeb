<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Dados da Pré-Matrícula</title>
</head>
<body>
  <h1>Dados da Pré-Matrícula</h1>

  <h2>Dados Pessoais:</h2>
  <p><strong>Nome do Aluno:</strong> <?php echo $_POST["nomeAluno"]; ?></p>
  <p><strong>Data de Nascimento:</strong> <?php echo $_POST["dia"] . "/" . $_POST["mes"] . "/" . $_POST["ano"]; ?></p>
  <p><strong>Nome da Mãe:</strong> <?php echo $_POST["nomeMae"]; ?></p>
  <p><strong>Nome do Pai:</strong> <?php echo $_POST["nomePai"]; ?></p>
  <p><strong>Telefone:</strong> (<?php echo $_POST["ddd"]; ?>) <?php echo $_POST["telefone"]; ?> - Ramal: <?php echo $_POST["ramal"]; ?></p>
  <p><strong>E-mail:</strong> <?php echo $_POST["email"]; ?></p>

  <h2>Informações da Matrícula:</h2>
  <p><strong>Série:</strong> <?php echo $_POST["serie"]; ?></p>
  <p><strong>Turno:</strong> <?php echo $_POST["turno"]; ?></p>

  <p><strong>Atividades Extracurriculares:</strong></p>
  <ul>
    <?php
      if (isset($_POST["atividades"])) {
        foreach ($_POST["atividades"] as $atividade) {
          echo "<li>" . htmlspecialchars($atividade) . "</li>";
        }
      } else {
        echo "<li>Nenhuma atividade selecionada</li>";
      }
    ?>
  </ul>
</body>
</html>
