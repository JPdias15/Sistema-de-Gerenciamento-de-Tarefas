<?php
session_start();
require 'database.php';

if (!isset($_SESSION['id_usuario'])) {
    header("Location: index.php");
    exit;
}

$id_usuario = $_SESSION['id_usuario'];
$sql = "SELECT * FROM tarefa WHERE id_usuario = $id_usuario";
$result = mysqli_query($conexao, $sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Painel de Tarefas</title>
    <link rel="stylesheet" type="text/css" href="login.css"/>
</head>
<body>
    <h2>Bem-vindo(a), <?php echo $_SESSION['nome_usuario']; ?>!</h2>
    <div>
        <a href="nova_tarefa.php">Inserir Nova Tarefa</a>
        <a href="logout.php">Sair</a>
    </div>
    <hr>
    <h3>Consulta de Dados (Suas Tarefas)</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Descrição</th>
            <th>Status</th>
            <th>Ações</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['titulo']; ?></td>
            <td><?php echo $row['descricao']; ?></td>
            <td><?php echo $row['status']; ?></td>
            <td>
                <a href="editar_tarefa.php?id=<?php echo $row['id']; ?>">Alterar</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>