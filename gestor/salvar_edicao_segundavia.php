<?php

include('../config.php');

@ini_set('display_errors', '1');
error_reporting(E_ALL);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "casasbahia2email";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$id = $_POST["id"];
$nomecliente = $_POST["nomecliente"];
$cpf = $_POST["cpf"];
$vencimento = $_POST["vencimento"];
$hoje = $_POST["hoje"];
$preco = $_POST["preco"];
$numeroboleto = $_POST["numeroboleto"];
$endereco = $_POST["endereco"];
$numero = $_POST["numero"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$cep = $_POST["cep"];
$celular = $_POST["celular"];
$email = $_POST["email"];
$statuspedido = $_POST["statuspedido"];
$nomeproduto = $_POST["nomeproduto"];

$sql = "UPDATE segundavia SET nomecliente='$nomecliente', cpf='$cpf', vencimento='$vencimento', hoje='$hoje', preco='$preco', numeroboleto='$numeroboleto', endereco='$endereco', numero='$numero', bairro='$bairro', cidade='$cidade', estado='$estado', cep='$cep', celular='$celular', email='$email', statuspedido='$statuspedido', nomeproduto='$nomeproduto' WHERE id='$id'";

 
 // Prepare statement
  $stmt = $conn->prepare($sql);

  // execute the query
  $stmt->execute();

  // echo a message to say the UPDATE succeeded
  echo $stmt->rowCount() . " Atualizado com sucesso!";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
 

?>