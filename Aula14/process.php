<?php
include 'db.php';

// Adiciona aluno
if (isset($_POST['add'])) {
    $nome = $conn->real_escape_string($_POST['nome']);
    $idade = $conn->real_escape_string($_POST['idade']);
    if(!empty($nome)) {
        $conn->query("INSERT INTO aluno (nome, idade) VALUES ('$nome', '$idade')");
    }
    header('Location: forms.php');
    exit();
}

// Atualizar aluno
if (isset($_POST['edit'])) {
    $id = intval($_POST['id']);
    $nome = $conn->real_escape_string($_POST['nome']);
    $idade = $conn->real_escape_string($_POST['idade']);
    if (!empty($nome)) {
        $conn->query("UPDATE aluno SET nome='$nome', idade='$idade' WHERE id=$id");
    }
    header('Location: forms.php');
    exit();
}

// Deletar aluno
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $conn->query("DELETE FROM aluno WHERE id=$id");
    header('Location: forms.php');
    exit();
}
?>