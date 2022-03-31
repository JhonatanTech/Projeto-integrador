<?php
session_start();
include('../connect.php');

if (empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('Location: ../../index.php');
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

//select email,cpf,senha from usuario where (email = 'jhonatancarvalhotorres12@gmail.com' or cpf = '501.720.748-19') and senha = MD5('12345')

$query = "select usuario from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

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
