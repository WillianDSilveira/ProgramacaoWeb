<?php
$conn = new mysqli("localhost", "root", "", "petshop");

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Inserção de novo produto
if (isset($_POST['nome']) && isset($_POST['preco']) && !isset($_POST['id'])) {
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $sql = "INSERT INTO produtos (nome, preco) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sd", $nome, $preco);
    $stmt->execute();
    header("Location: carrinho.php");
    exit;
}

// Atualização de produto
if (isset($_POST['update']) && isset($_POST['id'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $sql = "UPDATE produtos SET nome=?, preco=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sdi", $nome, $preco, $id);
    $stmt->execute();
    header("Location: carrinho.php");
    exit;
}

// Exclusão de produto
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $sql = "DELETE FROM produtos WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    header("Location: carrinho.php");
    exit;
}


if (isset($_GET['delete_produtos'])) {
    $sql = "TRUNCATE TABLE produtos";
    if ($conn->query($sql) === TRUE) {
        header("Location: formulario.php");
        exit;
    } else {
        echo "Erro ao deletar produtos: " . $conn->error;
    }
}


$conn->close();
?>
