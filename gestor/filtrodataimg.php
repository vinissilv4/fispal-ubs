<?php
include('../config.php');

$datainicial = $_POST['datainicial'];
$datainicialformatada = date('Y-m-d H:i:s', strtotime(str_replace('/', '-', $datainicial)));
$datafinal = $_POST['datafinal'];
$datafinalformatada = date('Y-m-d H:i:s', strtotime(str_replace('/', '-', $datafinal)));




$data_hora_inicial = date('d-m-Y H:i:s', strtotime($datainicialformatada)); 
$data_hora_final = date('d-m-Y H:i:s', strtotime($datafinalformatada));


$sql = "SELECT * FROM images WHERE STR_TO_DATE(data, '%d/%m/%Y %H:%i:%s') BETWEEN STR_TO_DATE('$data_hora_inicial', '%d-%m-%Y %H:%i:%s') AND STR_TO_DATE('$data_hora_final', '%d-%m-%Y %H:%i:%s')"; 

$resultado = mysqli_query($conexao, $sql);

// Exibir os resultados 

while($registro = mysqli_fetch_assoc($resultado)){ echo "Empresa: " . $registro["nomeempresa"] . " <br>  Nome do cliente: " . $registro["nomecliente"] . " / <b>Status do cliente: " . $registro["clientehot"] . "</b> <br> Contato: " . $registro["whatsapp"] . " <br> <b>Visita agendada: " . $registro["agendarvisita"] . "</b> <br> Vendedor: <b>" . $registro["vendedor"] . "</b><br> Informação cliente: <b>" . $registro["statuscliente"] . "</b><br> Horario Cadastro: " . $registro["data"] . "<br><br><br>___________________________________________________________________________<br>"; };
?>
