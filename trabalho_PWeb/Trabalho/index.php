<?php
session_start();
require 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $sql = "SELECT id, nome FROM usuario WHERE login = '$login' AND senha = '$senha'";
    $result = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['id_usuario'] = $row['id'];
        $_SESSION['nome_usuario'] = $row['nome'];
        header("Location: painel.php");
        exit;
    } else {
        $erro = "Login ou senha incorretos!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login do Sistema</title>
    <link rel="stylesheet" type="text/css" href="login.css"/>
</head>
<body>
    <h2>Autenticação de Usuário</h2>
    <?php if(isset($erro)) echo "<p style='color:red;'>$erro</p>"; ?>
    <form method="POST" action="">
        Login: <input type="text" name="login" required><br>
        Senha: <input type="password" name="senha" required><br>
        <input type="submit" value="Entrar">
    </form>
    
</body>
</html>