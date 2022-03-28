<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';
// Clear
function clear($input) {
	global $connect;
	// sql
	$var = mysqli_escape_string($connect, $input);
	// xss
	$var = htmlspecialchars($var);
	return $var;
}

if(isset($_POST['btn-cadastrar-usuario'])):
	$nome 		= clear($_POST['nome']);
	$sobrenome 	= clear($_POST['sobrenome']);
	$cpf 		= clear($_POST['cpf']);
	$contato 	= clear($_POST['contato']);
	$funcao 	= clear($_POST['funcao']);
	$email 		= clear($_POST['email']);
	$senha 		= clear($_POST['senha']);

	$extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); //pega a extensao do arquivo
	$diretorio = "../../upload/"; //define o diretorio para onde enviaremos o arquivo
	$novo_nome = md5(time()) . $extensao; //define o nome do arquivo

	move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . $novo_nome); //efetua o upload

	$sql = "INSERT INTO usuario (nome, sobrenome, cpf, contato, funcao, email, senha, imagem) VALUES ('$nome', '$sobrenome', '$cpf', '$contato', '$funcao', '$email', MD5('$senha'), '$novo_nome')";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com sucesso!";
		header('Location: ../../view/stock.php');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('Location: ../../view/stock.php');
	endif;
endif;