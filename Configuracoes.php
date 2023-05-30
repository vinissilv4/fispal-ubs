<?php include("config.php"); ?>
<?php 
    $ConnectDB = new mysqli($hostname_ConnectDB, $username_ConnectDB, $password_ConnectDB, $database_ConnectDB) or trigger_error(mysql_error(), E_USER_ERROR);
    mysqli_set_charset($ConnectDB, 'utf8');
    

    //determina um tempo para a varivel $tempo
    $tempo = time();
    // pega o IP do usurio

$remote_addr          = $_SERVER['REMOTE_ADDR'];



    $ip = $remote_addr;

    $local = $_SERVER['REQUEST_URI'];
    //faz uma consulta para verificar se o ip j existe no banco de dados
    $verifica = mysqli_query($ConnectDB, "SELECT * FROM online WHERE ip ='$ip'");
    //retorna a quantidade de linhas da consulta ou seja, pode retornar 0 ou 1 linha
    $linhas = mysqli_num_rows($verifica);
    //se no existir o ip no banco ele grava um com um tempo determinado
    if ($linhas == 0) {
        // gravando o IP e o tempo no DB
        $acrescenta = mysqli_query($ConnectDB, "INSERT INTO online (ip, tempo, local) VALUES ('$ip','$tempo', '$local')");
    } else {
        // se o IP j existe ele o pega e atualiza o tempo no DB no IP selecionado
        //pega o IP retornado da consulta
        $ip = mysqli_fetch_assoc($verifica);
        $ip = $ip['ip'];
        //faz um update para o registro do IP existente
        $atualiza = mysqli_query($ConnectDB, "UPDATE online SET tempo ='$tempo', local  ='$local' WHERE ip='$ip'");
    }
    //deleta a linha que no foi atualizada no tempo de 40 segundos
    mysqli_query($ConnectDB, "DELETE FROM online WHERE tempo <'$tempo'" . -"40");
?>