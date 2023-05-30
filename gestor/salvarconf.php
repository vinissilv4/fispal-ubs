<?php
include("../config.php");
$url = $_POST['url'];
$venc = $_POST['venc'];
$bloqueado = $_POST['bloquear'];
$diasboleto = $_POST['diasboleto'];
$smtp = $_POST['smtp'];
$falhacc = $_POST['falhacc'];

$query = "UPDATE `configuracoes` SET `boleto` = '{$boleto}', `diasboleto` = '{$diasboleto}', `bloqueado` = '{$bloqueado}', `url` = '{$url}', `smtp` = '{$smtp}', `falhacc` = '{$falhacc}' WHERE `configuracoes`.`id` = 1;";
if(mysqli_query($conexao,$query)){
    header ("Location: configuracoes.php?salvo=ok");

} else {
    echo "Falha";
    echo mysqli_error($conexao);
};
