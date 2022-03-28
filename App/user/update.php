<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-editar-usuario'])):
	$nome = 		mysqli_escape_string($connect, $_POST['nome']);
	$sobrenome =	mysqli_escape_string($connect, $_POST['sobrenome']);
	$cpf = 			mysqli_escape_string($connect, $_POST['cpf']);
	$contato = 		mysqli_escape_string($connect, $_POST['contato']);
	$funcao = 		mysqli_escape_string($connect, $_POST['funcao']);
	$email = 		mysqli_escape_string($connect, $_POST['email']);
	$senha = 		mysqli_escape_string($connect, $_POST['senha']);

	$id = 		mysqli_escape_string($connect, $_POST['id']);

	// echo ($_POST['nome']);

	$sql = "UPDATE usuario SET nome = '$nome', sobrenome = '$sobrenome', cpf = '$cpf', contato = '$contato', funcao = '$funcao', email = '$email', senha = MD5('$senha') WHERE id = '$id'";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: ../../view/stock.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar" + $_POST;
		header('Location: ../../view/stock.php');
	endif;
endif;