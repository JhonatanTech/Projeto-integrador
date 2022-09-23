<?php
// Sessão
session_start();
// Conexão
require_once '../db_connect.php';
// Clear
function clear($input) {
	global $connect;
	// sql
	$var = mysqli_escape_string($connect, $input);
	// xss
	$var = htmlspecialchars($var);
	return $var;
}

if(isset($_POST['btn-cadastrar-material'])){
	$nome 	= clear($_POST['nome']);
	$local 	= clear($_POST['local']);
	$qty 	= clear($_POST['qty']);
	$obs 	= clear($_POST['obs']);

	$qtyConvertido = intval($_POST['qty']);

	$extensao = '.' . pathinfo($_FILES['arquivo']['name'])['extension'];

	$diretorio = "../../upload/"; //define o diretorio para onde enviaremos o arquivo
	$novo_nome = md5(time()) . $extensao; //define o nome do arquivo

	move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . $novo_nome); //efetua o upload

	if ($qtyConvertido > 0) {
		$sql = "INSERT INTO material (nome, local, qtd, obs, imagem) VALUES ('$nome', '$local', '$qty', '$obs', '$novo_nome')";
		if (mysqli_query($connect, $sql)) {
			$_SESSION['mensagem'] = "Cadastrado com sucesso!";
			header('Location: ../../view/stock.php');
		}else {
			$_SESSION['mensagem'] = "Erro ao cadastrar";
			header('Location: ../../view/stock.php');
		}
	}else{
		$_SESSION['mensagem'] = "Erro ao cadastrar: Quantidade deve ser maior que zero.";
		header('Location: ../../view/stock.php');
	}
}