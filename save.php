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
$clientehot = $_POST['clientehot'];
$tipodocliente = $_POST['tipodocliente'];
$porteempresa = $_POST['porteempresa'];
$orgg = isset($_POST['maquinasubs']) && is_array($_POST['maquinasubs']) ? $_POST['maquinasubs'] : [];
$maquinasubs = implode(', ', $orgg);
$vendedor = $_POST['vendedor'];
$dataehora = $_POST['dataehora'];
$parceiro = $_POST['parceiro'];
$estadoregiao = $_POST['estadoregiao'];
$org = isset($_POST['statuscliente']) && is_array($_POST['statuscliente']) ? $_POST['statuscliente'] : [];
$statuscliente = implode(', ', $org);

$agendarvisita = $_POST['agendarvisita'];
$agendardemo = $_POST['agendardemo'];



$agendarvisitahorario = $_POST['timevisita'];
$agendardemohorario = $_POST['timedemo'];


$tipocadastro = "cadastro completo";


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