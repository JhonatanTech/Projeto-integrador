<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-deletar-usuario'])):
	
	$id = mysqli_escape_string($connect, $_POST['id']);

	$sql = "DELETE FROM usuario WHERE id = '$id'";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Deletado com sucesso!";
		header('Location: ../../view/stock.php');
	else:
		$_SESSION['mensagem'] = "Erro ao deletar";
		header('Location: ../../view/stock.php');
	endif;
endif;