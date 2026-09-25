<?php
$database = 'pweb';
$user = 'fatec';
$password = 'fatec2021';
$host = 'localhost';

$conexao = mysqli_connect($host, $user, $password, $database);

if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}
?>