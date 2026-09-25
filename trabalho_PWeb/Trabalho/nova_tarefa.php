<?php
session_start();
require 'database.php';

if (!isset($_SESSION['id_usuario'])) {
    header("Location: index.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $status = $_POST['status'];
    $id_usuario = $_SESSION['id_usuario'];

    $sql = "INSERT INTO tarefa (titulo, descricao, status, id_usuario) VALUES ('$titulo', '$descricao', '$status', $id_usuario)";
    
    if (mysqli_query($conexao, $sql)) {
        header("Location: painel.php");
        exit;
    } else {
        echo "Erro: " . mysqli_error($conexao);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Nova Tarefa</title>
    <link rel="stylesheet" type="text/css" href="login.css"/>
</head>
<body>
    <h2>Inserção de Tarefa</h2>
    <form method="POST" action="">
        Título: <input type="text" name="titulo" required><br>
        Descrição:<br> <textarea name="descricao" required></textarea><br>
        Status:
        <select name="status">
            <option value="Pendente">Pendente</option>
            <option value="Em Andamento">Em Andamento</option>
            <option value="Concluída">Concluída</option>
        </select><br>
        <input type="submit" value="Salvar Tarefa">
    </form>
    <br>
    <a href="painel.php">Voltar ao Painel</a>
</body>
</html>