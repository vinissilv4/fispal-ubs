<?php
include('../config.php');
$id = $_GET['id'];
$query = "DELETE FROM `images` WHERE `images`.`id` = {$id}";
if(mysqli_query($conexao, $query)){
    echo '<script type="text/javascript">alert("Excluido Com Sucesso");</script>';
    header ("Location: listarfotos.php?excluido=ok");
}else{
    echo "Falha Ao Excluir Informacoes<br>";
    echo mysqli_error($conexao);
};