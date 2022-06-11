<?php
define('HOST', 'us-cdbr-east-05.cleardb.net');
define('USUARIO', 'b65aa0efeb76d4');
define('SENHA', '27c4806a');
define('DB', 'heroku_40b808a177f815d');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die('Não foi possível conectar');