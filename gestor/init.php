<?php
include('../config.php');
// constantes com as credenciais de acesso ao banco MySQL
define('DB_HOST', $hostname_ConnectDB);
define('DB_USER', $username_ConnectDB);
define('DB_PASS', $password_ConnectDB);
define('DB_NAME', $database_ConnectDB);
 
// habilita todas as exibições de erros
ini_set('display_errors', true);
error_reporting(E_ALL);
 
// inclui o arquivo de funçõees
require_once 'functions.php';