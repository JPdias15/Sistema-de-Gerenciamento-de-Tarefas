<?php
session_start();
require 'database.php';

if (!isset($_SESSION['id_usuario'])) {
    header("Location: index.php");
    exit;
}

$id_tarefa = $_GET['id'];
$id_usuario = $_SESSION['id_usuario'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $status = $_POST['status'];

    $sql = "UPDATE tarefa SET titulo='$titulo', descricao='$descricao', status='$status' WHERE id=$id_tarefa AND id_usuario=$id_usuario";
    
    if (mysqli_query($conexao, $sql)) {
        header("Location: painel.php");
        exit;
    } else {
        echo "Erro: " . mysqli_error($conexao);
    }
}

$sql_busca = "SELECT * FROM tarefa WHERE id=$id_tarefa AND id_usuario=$id_usuario";
$result = mysqli_query($conexao, $sql_busca);
$tarefa = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Alterar Tarefa</title>
    <link rel="stylesheet" type="text/css" href="login.css"/>
</head>
<body>
    <h2>Alteração de Tarefa</h2>
    <form method="POST" action="">
        Título: <input type="text" name="titulo" value="<?php echo $tarefa['titulo']; ?>" required><br>
        Descrição:<br> <textarea name="descricao" required><?php echo $tarefa['descricao']; ?></textarea><br>
        Status:
        <select name="status">
            <option value="Pendente" <?php if($tarefa['status'] == 'Pendente') echo 'selected'; ?>>Pendente</option>
            <option value="Em Andamento" <?php if($tarefa['status'] == 'Em Andamento') echo 'selected'; ?>>Em Andamento</option>
            <option value="Concluída" <?php if($tarefa['status'] == 'Concluída') echo 'selected'; ?>>Concluída</option>
        </select><br>
        <input type="submit" value="Atualizar Tarefa">
    </form>
    <br>
    <a href="painel.php">Voltar ao Painel</a>
</body>
</html>