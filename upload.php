<?php
// Include the database configuration file
ini_set('display_errors', 0);
error_reporting(E_ERROR | E_WARNING | E_PARSE); 
include('config.php');
$statusMsg = '';
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

$tipocadastro = "cadastro com foto";

$agendardemo = $_POST['agendardemo'];

$agendarvisitahorario = $_POST['timevisita'];
$agendardemohorario = $_POST['timedemo'];

$upper = implode('', range('A', 'Z')); // ABCDEFGHIJKLMNOPQRSTUVWXYZ
$lower = implode('', range('a', 'z')); // abcdefghijklmnopqrstuvwxyzy
$nums = implode('', range(0, 9)); // 0123456789

$alphaNumeric = $upper.$lower.$nums; // ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789
$string = '';
$len = 7; // numero de chars
for($i = 0; $i < $len; $i++) {
    $string .= $alphaNumeric[rand(0, strlen($alphaNumeric) - 1)];
}
 // ex: q02TAq3


// DEFINE O FUSO HORARIO COMO O HORARIO DE BRASILIA
    date_default_timezone_set('America/Sao_Paulo');
// CRIA UMA VARIAVEL E ARMAZENA A HORA ATUAL DO FUSO-HORÀRIO DEFINIDO (BRASÍLIA)
    $dataLocal = date('d/m/Y', time());

// File upload path
$targetDir = "uploads/";
$fileName = $string . basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $query = "INSERT INTO `dadosficha` (`id`, `nomeempresa`, `nomecliente`, `cargo`, `email`, `telefonefixo`, `whatsapp`, `tipoempresa`, `outrostipoempresa`, `comentario`, `clientehot`, `tipodocliente`, `porteempresa`, `maquinasubs`, `vendedor`, `dataehora`, `parceiro`, `estadoregiao`, `statuscliente`, `agendarvisita`, `tipocadastro`, `qrcodeinfo`, `file_name`, `uploaded_on`, `status`, `agendardemo`, `horariovisita`, `horariodemo`) VALUES (NULL, '{$nomeempresa}', '{$nomecliente}', '{$cargo}', '{$email}', '{$telefonefixo}', '{$whatsapp}', '{$tipoempresa}', '{$outrostipoempresa}', '{$comentario}', '{$clientehot}', '{$tipodocliente}', '{$porteempresa}', '{$maquinasubs}', '{$vendedor}', '{$dataLocal}', '{$parceiro}', '{$estadoregiao}', '{$statuscliente}', '{$agendarvisita}', '{$tipocadastro}', '0', '{$fileName}', 'teste', 'teste', '{$agendardemo}', '{$agendarvisitahorario}', '{$agendardemohorario}');";
            mysqli_query($conexao, $query);
            if($query){
                $statusMsg = '<script type="text/javascript">
        alert("Cadastro efetuado com sucesso!");
    </script>';
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Meu Redirect</title>

    <meta http-equiv="refresh" content="0; URL='../ubs/?vendedor=<?php echo $vendedor ?>'"/>
</head>
<body>
...
</body>
</html>