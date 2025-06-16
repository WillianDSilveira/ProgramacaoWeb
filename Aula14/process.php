<?php
include 'db.php';

// Adiciona aluno
if (isset($_POST['add'])) {
    $nome = $conn->real_escape_string($_POST['nome']);
    if(!empty($nome)) {
        $conn->query("INSERT INTO aluno (nome) VALUES ('$nome')");
    }
    header('Location: forms.php');
    exit();
}

// Atualizar aluno
if (isset($_POST['edit'])) {
    $id = intval($_POST['id']);
    $nome = $conn->real_escape_string($_POST['nome']);
    if (!empty($nome)) {
        $conn->query("UPDATE aluno SET nome='$nome' WHERE id=$id");
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