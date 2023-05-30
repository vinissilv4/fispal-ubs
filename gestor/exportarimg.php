<?php
include_once('../config.php');
// Nome do Arquivo do Excel que será gerado

$query = "select * from images";
$resultado = mysqli_query($conexao, $query);

$arquivo = 'Cadastro_Fichas_Imagens.xls';
// Criamos uma tabela HTML com o formato da planilha para excel
$tabela = '<table border="1">';
$tabela .= '<tr>';
$tabela .= '<td colspan="2">Tabela de Fichas</tr>';
$tabela .= '</tr>';
$tabela .= '<tr>';
$tabela .= '<td><b>Empresa</b></td>';
$tabela .= '<td><b>Nome Cliente</b></td>';
$tabela .= '<td><b>Whatsapp</b></td>';
$tabela .= '<td><b>Comentario</b></td>';
$tabela .= '<td><b>Status Cliente</b></td>';
$tabela .= '<td><b>Maquinas</b></td>';
$tabela .= '<td><b>Cliente HOT</b></td>';
$tabela .= '<td><b>Visita agendada</b></td>';
$tabela .= '<td><b>Estado</b></td>';
$tabela .= '<td><b>Vendedor</b></td>';
$tabela .= '<td><b>Data</b></td>';
$tabela .= '</tr>';

// Puxando dados do Banco de dados


while($dados = mysqli_fetch_assoc($resultado))
{
$tabela .= '<tr>';
$tabela .= '<td>'.$dados['nomeempresa'].'</td>';
$tabela .= '<td>'.$dados['nomecliente'].'</td>';
$tabela .= '<td>'.$dados['whatsapp'].'</td>';
$tabela .= '<td>'.$dados['comentario'].'</td>';
$tabela .= '<td>'.$dados['statuscliente'].'</td>';
$tabela .= '<td>'.$dados['maquinasubs'].'</td>';
$tabela .= '<td>'.$dados['clientehot'].'</td>';
$tabela .= '<td>'.$dados['agendarvisita'].'</td>';
$tabela .= '<td>'.$dados['estadoregiao'].'</td>';
$tabela .= '<td>'.$dados['vendedor'].'</td>';
$tabela .= '<td>'.$dados['data'].'</td>';
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