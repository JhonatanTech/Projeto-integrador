<?php
// Sessão
session_start();
// Conexão
require_once '../db_connect.php';

if(isset($_POST['btn-editar-material'])){
	$nome 	= mysqli_escape_string($connect, $_POST['nome']);
	$local 	= mysqli_escape_string($connect, $_POST['local']);
	$qty 	= mysqli_escape_string($connect, $_POST['qty']);
	$obs	= mysqli_escape_string($connect, $_POST['obs']);
	$id 	= mysqli_escape_string($connect, $_POST['id']);

	$sql = "UPDATE material SET nome = '$nome', local = '$local', qtd = '$qty', obs = '$obs' WHERE id = '$id'";

	if(mysqli_query($connect, $sql)){
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: ../../view/stock.php');
	}else {
		$_SESSION['mensagem'] = "Erro ao atualizar";
		header('Location: ../../view/stock.php');
	}
}