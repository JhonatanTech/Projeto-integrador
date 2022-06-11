<?php
// Conexão com banco de dados
$servername = "us-cdbr-east-05.cleardb.net";
$username = "b65aa0efeb76d4";
$password = "27c4806a";
$db_name = "heroku_40b808a177f815d";

$connect = mysqli_connect($servername, $username, $password, $db_name);
mysqli_set_charset($connect, "utf8");

if (mysqli_connect_error()) :
	echo "Erro na conexão: " . mysqli_connect_error();
endif;
