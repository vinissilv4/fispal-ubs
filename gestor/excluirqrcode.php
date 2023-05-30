<?php
include('../config.php');
$id = $_GET['id'];
$query = "DELETE FROM `qrcode` WHERE `qrcode`.`id` = {$id}";
if(mysqli_query($conexao, $query)){
    echo '<script type="text/javascript">alert("Excluido Com Sucesso");</script>';
    header ("Location: listarqrcode.php?excluido=ok");
}else{
    echo "Falha Ao Excluir Informacoes<br>";
    echo mysqli_error($conexao);
};