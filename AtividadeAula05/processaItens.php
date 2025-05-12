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
            color:rgb(76, 111, 175);
        }
        p {
            font-size: 16px;
            margin-bottom: 10px;
        }
        .link{
            text-align: center;
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
        <div class="link">
            <a href="pagina2.html">Ir para a próxima página</a>
        </div>
    </div>
    
</body>
</html>
