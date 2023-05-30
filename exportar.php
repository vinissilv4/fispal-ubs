<?php
include_once('config.php');
// Nome do Arquivo do Excel que será gerado

$query = "select * from dadosficha";
$resultado = mysqli_query($conexao, $query);

$arquivo = 'dados.xls';
// Criamos uma tabela HTML com o formato da planilha para excel
$tabela = '<table border="1">';
$tabela .= '<tr>';
$tabela .= '<td colspan="2">Tabela de Fichas</tr>';
$tabela .= '</tr>';
$tabela .= '<tr>';
$tabela .= '<td><b>Empresa</b></td>';
$tabela .= '<td><b>Nome do Cliente</b></td>';
$tabela .= '<td><b>Cargo</b></td>';
$tabela .= '<td><b>E-mail</b></td>';
$tabela .= '<td><b>Telefone Fixo</b></td>';
$tabela .= '<td><b>Whatsapp</b></td>';
$tabela .= '<td><b>Tipo da Empresa</b></td>';
$tabela .= '<td><b>Outros tipo Empresa</b></td>';
$tabela .= '<td><b>Comentarios</b></td>';
$tabela .= '<td><b>Cliente HOT</b></td>';
$tabela .= '<td><b>Tipo do Cliente</b></td>';
$tabela .= '<td><b>Porte da Empresa</b></td>';
$tabela .= '<td><b>Maquina de Interesse</b></td>';
$tabela .= '<td><b>Vendedor</b></td>';
$tabela .= '<td><b>Data e Hora</b></td>';
$tabela .= '<td><b>Parceiro</b></td>';
$tabela .= '<td><b>Estado / Região</b></td>';
$tabela .= '<td><b>Status do cliente</b></td>';
$tabela .= '</tr>';

// Puxando dados do Banco de dados


while($dados = mysqli_fetch_assoc($resultado))
{
$tabela .= '<tr>';
$tabela .= '<td>'.$dados['nomeempresa'].'</td>';
$tabela .= '<td>'.$dados['nomecliente'].'</td>';
$tabela .= '<td>'.$dados['cargo'].'</td>';
$tabela .= '<td>'.$dados['email'].'</td>';
$tabela .= '<td>'.$dados['telefonefixo'].'</td>';
$tabela .= '<td>'.$dados['whatsapp'].'</td>';
$tabela .= '<td>'.$dados['tipoempresa'].'</td>';
$tabela .= '<td>'.$dados['outrostipoempresa'].'</td>';
$tabela .= '<td>'.$dados['comentario'].'</td>';
$tabela .= '<td>'.$dados['clientehot'].'</td>';
$tabela .= '<td>'.$dados['tipodocliente'].'</td>';
$tabela .= '<td>'.$dados['porteempresa'].'</td>';
$tabela .= '<td>'.$dados['maquinasubs'].'</td>';
$tabela .= '<td>'.$dados['vendedor'].'</td>';
$tabela .= '<td>'.$dados['dataehora'].'</td>';
$tabela .= '<td>'.$dados['parceiro'].'</td>';
$tabela .= '<td>'.$dados['estadoregiao'].'</td>';
$tabela .= '<td>'.$dados['statuscliente'].'</td>';
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