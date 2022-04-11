<?php
session_start();
include('../db_connect.php');

var_dump($_POST);

if (empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('Location: ../../index.php');
    exit();
}

$usuario = mysqli_real_escape_string($connect, $_POST['usuario']);
$senha = mysqli_real_escape_string($connect, $_POST['senha']);

//select * from usuario where (email = 'jhonatancarvalhotorres12@gmail.com' or cpf = '501.720.748-19') and senha = MD5('123')

$query = "SELECT * FROM usuario WHERE (email = '{$usuario}' OR cpf = '{$usuario}') AND senha = MD5('{$senha}')";

$result = mysqli_query($connect, $query);

$row = mysqli_num_rows($result);

if ($row == 1) {
    $_SESSION['usuario'] = $usuario;
    header('Location: ../../view/stock.php');
    exit();
} else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: ../../index.php');
    exit();
}
