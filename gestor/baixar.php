<?php

$arquivo = $_GET['arquivo'];
header("Content-Type: application/pdf"); 
// informa o tipo do arquivo ao navegador
header("Content-Length: ".filesize($arquivo)); 
// informa o tamanho do arquivo ao navegador
header("Content-Disposition: attachment; filename=".basename($arquivo)); 
// informa ao navegador que é tipo anexo e faz abrir a janela de download, 
//tambem informa o nome do arquivo
readfile($arquivo); // lê o arquivo
exit; // aborta pós-ações
?>