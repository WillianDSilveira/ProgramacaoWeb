<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercícios PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            color: #333;
            margin: 20px;
        }

        h1 {
            color: #007BFF;
        }

        .container {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 30px;
            box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.1);
        }

        strong {
            color: #000;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Mostrar Nome e Idade</h2>
        <?php
        $nome = "Willian";
        $idade = 25;
        echo "<p><strong>Nome:</strong> $nome</p>";
        echo "<p><strong>Idade:</strong> $idade anos</p>";
        ?>
    </div>

</body>

</html>