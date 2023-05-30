<?php
$hostname_ConnectDB = "localhost"; // HOSTNAME NORMALMENTE LOCALHOST
$database_ConnectDB = "fichaubs"; // NOME DO BANCO DE DADOS
$username_ConnectDB = "root"; // USUÁRIO DO BANCO DE DADOS
$password_ConnectDB = ""; // SENHA DO BANCO DE DADOS
$conexao = mysqli_connect($hostname_ConnectDB,$username_ConnectDB,$password_ConnectDB,$database_ConnectDB);
mysqli_set_charset($conexao,"utf8");
?>
