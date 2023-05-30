<?php
include('../config.php');

$datainicial = $_POST['datainicial'];
$datainicialformatada = date('Y-m-d H:i:s', strtotime(str_replace('/', '-', $datainicial)));
$datafinal = $_POST['datafinal'];
$datafinalformatada = date('Y-m-d H:i:s', strtotime(str_replace('/', '-', $datafinal)));




$data_hora_inicial = date('d-m-Y H:i:s', strtotime($datainicialformatada)); 
$data_hora_final = date('d-m-Y H:i:s', strtotime($datafinalformatada));


$sql = "SELECT * FROM qrcode WHERE STR_TO_DATE(dataehora, '%d/%m/%Y %H:%i:%s') BETWEEN STR_TO_DATE('$data_hora_inicial', '%d-%m-%Y %H:%i:%s') AND STR_TO_DATE('$data_hora_final', '%d-%m-%Y %H:%i:%s')"; 

$resultado = mysqli_query($conexao, $sql);

// Exibir os resultados 

while($registro = mysqli_fetch_assoc($resultado)){ echo "Informação QRcode: " . $registro["qrcodeinfo"] . " <br>  Vendedor: " . $registro["vendedor"] . "<br> Informação extra: " . $registro["infoextra"] . "<br> Maquina de Interesse: " . $registro["maquinasubs"] . "<br><b> Status Cliente: " . $registro["clientehot"] . "</b><br> Cliente agendeu visita: " . $registro["agendarvisita"] . "<br> Estado: " . $registro["estadoregiao"] . "<br><br>"; };
?>
