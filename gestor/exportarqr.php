<?php
include_once('../config.php');
// Nome do Arquivo do Excel que será gerado

$query = "select * from qrcode";
$resultado = mysqli_query($conexao, $query);

$arquivo = 'Cadastro_Fichas_QRcode.xls';
// Criamos uma tabela HTML com o formato da planilha para excel
$tabela = '<table border="1">';
$tabela .= '<tr>';
$tabela .= '<td colspan="2">Tabela de Fichas</tr>';
$tabela .= '</tr>';
$tabela .= '<tr>';
$tabela .= '<td><b>Informação do QRcode</b></td>';
$tabela .= '<td><b>Data e Hora</b></td>';
$tabela .= '<td><b>Informação Extras</b></td>';
$tabela .= '<td><b>Maquina</b></td>';
$tabela .= '<td><b>Cliente HOT</b></td>';
$tabela .= '<td><b>Visitas</b></td>';
$tabela .= '<td><b>Estado</b></td>';
$tabela .= '<td><b>Vendedor</b></td>';
$tabela .= '</tr>';

// Puxando dados do Banco de dados


while($dados = mysqli_fetch_assoc($resultado))
{
$tabela .= '<tr>';
$tabela .= '<td>'.$dados['qrcodeinfo'].'</td>';
$tabela .= '<td>'.$dados['dataehora'].'</td>';
$tabela .= '<td>'.$dados['infoextra'].'</td>';
$tabela .= '<td>'.$dados['maquinasubs'].'</td>';
$tabela .= '<td>'.$dados['clientehot'].'</td>';
$tabela .= '<td>'.$dados['agendarvisita'].'</td>';
$tabela .= '<td>'.$dados['estadoregiao'].'</td>';
$tabela .= '</tr>';
}
$tabela .= '</table>';

// Força o Download do Arquivo Gerado
header ('Cache-Control: no-cache, must-revalidate');
header ('Pragma: no-cache');
header('Content-Type: application/x-msexcel');
header ("Content-Disposition: attachment; filename=\"{$arquivo}\"");
echo $tabela;











?>