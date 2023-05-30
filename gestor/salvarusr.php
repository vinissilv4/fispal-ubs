<?php
require 'init.php';
$usuario = $_POST['user'];
$senhanova = make_hash($_POST['senha']);
$q = "UPDATE `admin` SET `usuario` = '{$usuario}', `senha` = '{$senhanova}' WHERE `admin`.`id` = 1;";
mysqli_query($conexao,$q);
header('Location: index.php');