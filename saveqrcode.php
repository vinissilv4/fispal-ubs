<?php
include('config.php');

ini_set('display_errors', 0);
error_reporting(E_ERROR | E_WARNING | E_PARSE); 


$nomeempresa = $_POST['nomeempresa'];
$nomecliente = $_POST['nomecliente'];
$cargo = $_POST['cargo'];
$email = $_POST['email'];
$telefonefixo = $_POST['telefonefixo'];
$whatsapp = $_POST['whatsapp'];
$tipoempresa = $_POST['tipoempresa'];
$outrostipoempresa = $_POST['outrostipoempresa'];
$comentario = $_POST['comentario'];
$tipodocliente = $_POST['tipodocliente'];
$porteempresa = $_POST['porteempresa'];
$parceiro = $_POST['parceiro'];
$qrcode = $_POST['qrcode'];
$vendedor = $_POST['vendedor'];
$maquinasubs = $_POST['maquinasubs'];
$clientehot = $_POST['clientehot'];
$estadoregiao = $_POST['estadoregiao'];
$agendarvisita = $_POST['agendarvisita'];
$statuscliente = $_POST['statuscliente'];
$tipocadastro = "Cadastro QRcode";
$agendardemo = $_POST['agendardemo'];
$agendarvisitahorario = $_POST['timevisita'];
$agendardemohorario = $_POST['timedemo'];
// DEFINE O FUSO HORARIO COMO O HORARIO DE BRASILIA
    date_default_timezone_set('America/Sao_Paulo');
// CRIA UMA VARIAVEL E ARMAZENA A HORA ATUAL DO FUSO-HORÀRIO DEFINIDO (BRASÍLIA)
    $dataehora = date('d/m/Y', time());



 $query = "INSERT INTO `dadosficha` (`id`, `nomeempresa`, `nomecliente`, `cargo`, `email`, `telefonefixo`, `whatsapp`, `tipoempresa`, `outrostipoempresa`, `comentario`, `clientehot`, `tipodocliente`, `porteempresa`, `maquinasubs`, `vendedor`, `dataehora`, `parceiro`, `estadoregiao`, `statuscliente`, `agendarvisita`, `tipocadastro`, `qrcodeinfo`, `file_name`, `uploaded_on`, `status`, `agendardemo`, `horariovisita`, `horariodemo`) VALUES (NULL, '{$nomeempresa}', '{$nomecliente}', '{$cargo}', '{$email}', '{$telefonefixo}', '{$whatsapp}', '{$tipoempresa}', '{$outrostipoempresa}', '{$comentario}', '{$clientehot}', '{$tipodocliente}', '{$porteempresa}', '{$maquinasubs}', '{$vendedor}', '{$dataehora}', '{$parceiro}', '{$estadoregiao}', '{$statuscliente}', '{$agendarvisita}', '{$tipocadastro}', '{$qrcode}', NULL, 'teste', 'teste', '{$agendardemo}', '{$agendarvisitahorario}', '{$agendardemohorario}');";
mysqli_query($conexao, $query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
	<script type="text/javascript">
		alert("Cadastro efetuado com sucesso!");
	</script>
	<meta http-equiv="refresh" content="0; URL='index.php?vendedor=<?php echo $vendedor ?>'"/>

</head>
<body>



</body>
</html>