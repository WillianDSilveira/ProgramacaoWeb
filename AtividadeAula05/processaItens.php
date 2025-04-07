<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Produto Cadastrado</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            padding: 20px;
        }
        .container {
            width: 400px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border: 2px solid #ccc;
            border-radius: 8px;
        }
        h2 {
            text-align: center;
            color: #4CAF50;
        }
        p {
            font-size: 16px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Produto Cadastrado com Sucesso!</h2>
        <p><strong>Nome do Produto:</strong> <?= isset($_POST["nome"]) ? htmlspecialchars($_POST["nome"]) : 'Não informado' ?></p>
        <p><strong>Tipo do Produto:</strong> <?= isset($_POST["tipo"]) ? htmlspecialchars($_POST["tipo"]) : 'Não informado' ?></p>
        <p><strong>Quantidade:</strong> <?= isset($_POST["quantidade"]) ? htmlspecialchars($_POST["quantidade"]) : 'Não informado' ?></p>
        <p><strong>Preço:</strong> R$ <?= isset($_POST["preco"]) ? htmlspecialchars($_POST["preco"]) : 'Não informado' ?></p>
    </div>
</body>
</html>
