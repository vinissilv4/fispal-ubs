<?php
include("cabecalho.php");
include('../config.php');
require_once('../Configuracoes.php');
$queryvisitas = "select * from dadosficha";
$resultadovisitas = mysqli_query($conexao, $queryvisitas);

$numerovisitas = mysqli_num_rows($resultadovisitas);



$queryvisitasqr = "select * from qrcode";
$resultadovisitasqr = mysqli_query($conexao, $queryvisitasqr);

$numerovisitasqr = mysqli_num_rows($resultadovisitasqr);




$queryvisitasimg = "select * from images";
$resultadovisitasimg = mysqli_query($conexao, $queryvisitasimg);

$numerovisitasimg = mysqli_num_rows($resultadovisitasimg);





$totalfichas = $numerovisitas + $numerovisitasqr + $numerovisitasimg;



$query = "SELECT * FROM `online`";
$resultado = mysqli_query($conexao, $query);






$queryNenhum = "SELECT * FROM `dadosficha` WHERE estadoregiao = \"Nenhum\"";
$resultadoNenhum = mysqli_query($conexao, $queryNenhum);
$quantidadeNenhum = mysqli_num_rows($resultadoNenhum);



$queryAC = "SELECT * FROM `dadosficha` WHERE estadoregiao = \"AC\"";
$resultadoAC = mysqli_query($conexao, $queryAC);
$quantidadeAC = mysqli_num_rows($resultadoAC);

$queryAL = "SELECT * FROM `dadosficha` WHERE estadoregiao = \"AL\"";
$resultadoAL = mysqli_query($conexao, $queryAL);
$quantidadeAL = mysqli_num_rows($resultadoAL);

$queryAP = "SELECT * FROM `dadosficha` WHERE estadoregiao = \"AP\"";
$resultadoAP = mysqli_query($conexao, $queryAP);
$quantidadeAP = mysqli_num_rows($resultadoAP);


$queryAM = "SELECT * FROM `dadosficha` WHERE estadoregiao = \"AM\"";
$resultadoAM = mysqli_query($conexao, $queryAM);
$quantidadeAM = mysqli_num_rows($resultadoAM);


$querysp = "SELECT * FROM `dadosficha` WHERE estadoregiao = \"SP\"";
$resultadosp = mysqli_query($conexao, $querysp);
$quantidadesp = mysqli_num_rows($resultadosp);




$queryBA = "SELECT * FROM `dadosficha` WHERE estadoregiao = \"BA\"";
$resultadoBA = mysqli_query($conexao, $queryBA);
$quantidadeBA = mysqli_num_rows($resultadoBA);


$queryCE = "SELECT * FROM `dadosficha` WHERE estadoregiao = \"CE\"";
$resultadoCE = mysqli_query($conexao, $queryCE);
$quantidadeCE = mysqli_num_rows($resultadoCE);


$queryES = "SELECT * FROM `dadosficha` WHERE estadoregiao = \"ES\"";
$resultadoES = mysqli_query($conexao, $queryES);
$quantidadeES = mysqli_num_rows($resultadoES);


$queryGO = "SELECT * FROM `dadosficha` WHERE estadoregiao = \"GO\"";
$resultadoGO = mysqli_query($conexao, $queryGO);
$quantidadeGO = mysqli_num_rows($resultadoGO);


$queryMA = "SELECT * FROM `dadosficha` WHERE estadoregiao = \"MA\"";
$resultadoMA = mysqli_query($conexao, $queryMA);
$quantidadeMA = mysqli_num_rows($resultadoMA);


$queryMT = "SELECT * FROM `dadosficha` WHERE estadoregiao = \"MT\"";
$resultadoMT = mysqli_query($conexao, $queryMT);
$quantidadeMT = mysqli_num_rows($resultadoMT);


$queryMS = "SELECT * FROM `dadosficha` WHERE estadoregiao = \"MS\"";
$resultadoMS = mysqli_query($conexao, $queryMS);
$quantidadeMS = mysqli_num_rows($resultadoMS);

$queryMG = "SELECT * FROM `dadosficha` WHERE estadoregiao = \"MG\"";
$resultadoMG = mysqli_query($conexao, $queryMG);
$quantidadeMG = mysqli_num_rows($resultadoMG);

$queryPA = "SELECT * FROM `dadosficha` WHERE estadoregiao = \"PA\"";
$resultadoPA = mysqli_query($conexao, $queryPA);
$quantidadePA = mysqli_num_rows($resultadoPA);


$queryPB = "SELECT * FROM `dadosficha` WHERE estadoregiao = \"PB\"";
$resultadoPB = mysqli_query($conexao, $queryPB);
$quantidadePB = mysqli_num_rows($resultadoPB);

$queryPR = "SELECT * FROM `dadosficha` WHERE estadoregiao = \"PR\"";
$resultadoPR = mysqli_query($conexao, $queryPR);
$quantidadePR = mysqli_num_rows($resultadoPR);

$queryPE = "SELECT * FROM `dadosficha` WHERE estadoregiao = \"PE\"";
$resultadoPE = mysqli_query($conexao, $queryPE);
$quantidadePE = mysqli_num_rows($resultadoPE);


$queryPI = "SELECT * FROM `dadosficha` WHERE estadoregiao = \"PI\"";
$resultadoPI = mysqli_query($conexao, $queryPI);
$quantidadePI = mysqli_num_rows($resultadoPI);

$queryRJ = "SELECT * FROM `dadosficha` WHERE estadoregiao = \"RJ\"";
$resultadoRJ = mysqli_query($conexao, $queryRJ);
$quantidadeRJ = mysqli_num_rows($resultadoRJ);

$queryRN = "SELECT * FROM `dadosficha` WHERE estadoregiao = \"RN\"";
$resultadoRN = mysqli_query($conexao, $queryRN);
$quantidadeRN = mysqli_num_rows($resultadoRN);

$queryRS = "SELECT * FROM `dadosficha` WHERE estadoregiao = \"RS\"";
$resultadoRS = mysqli_query($conexao, $queryRS);
$quantidadeRS = mysqli_num_rows($resultadoRS);

$queryRO = "SELECT * FROM `dadosficha` WHERE estadoregiao = \"RO\"";
$resultadoRO = mysqli_query($conexao, $queryRO);
$quantidadeRO = mysqli_num_rows($resultadoRO);

$queryRR = "SELECT * FROM `dadosficha` WHERE estadoregiao = \"RR\"";
$resultadoRR = mysqli_query($conexao, $queryRR);
$quantidadeRR = mysqli_num_rows($resultadoRR);

$querySC = "SELECT * FROM `dadosficha` WHERE estadoregiao = \"SC\"";
$resultadoSC = mysqli_query($conexao, $querySC);
$quantidadeSC = mysqli_num_rows($resultadoSC);


$querySE = "SELECT * FROM `dadosficha` WHERE estadoregiao = \"SE\"";
$resultadoSE = mysqli_query($conexao, $querySE);
$quantidadeSE = mysqli_num_rows($resultadoSE);

$queryTO = "SELECT * FROM `dadosficha` WHERE estadoregiao = \"TO\"";
$resultadoTO = mysqli_query($conexao, $queryTO);
$quantidadeTO = mysqli_num_rows($resultadoTO);

$queryDF = "SELECT * FROM `dadosficha` WHERE estadoregiao = \"DF\"";
$resultadoDF = mysqli_query($conexao, $queryDF);
$quantidadeDF = mysqli_num_rows($resultadoDF);




//qrcode





$queryNenhum = "SELECT * FROM `qrcode` WHERE estadoregiao = \"Nenhum\"";
$resultadotbqrcodeNenhum = mysqli_query($conexao, $queryNenhum);
$quantidadetbqrcodeNenhum = mysqli_num_rows($resultadotbqrcodeNenhum);



$queryAC = "SELECT * FROM `qrcode` WHERE estadoregiao = \"AC\"";
$resultadotbqrcodeAC = mysqli_query($conexao, $queryAC);
$quantidadetbqrcodeAC = mysqli_num_rows($resultadotbqrcodeAC);

$queryAL = "SELECT * FROM `qrcode` WHERE estadoregiao = \"AL\"";
$resultadotbqrcodeAL = mysqli_query($conexao, $queryAL);
$quantidadetbqrcodeAL = mysqli_num_rows($resultadotbqrcodeAL);

$queryAP = "SELECT * FROM `qrcode` WHERE estadoregiao = \"AP\"";
$resultadotbqrcodeAP = mysqli_query($conexao, $queryAP);
$quantidadetbqrcodeAP = mysqli_num_rows($resultadotbqrcodeAP);


$queryAM = "SELECT * FROM `qrcode` WHERE estadoregiao = \"AM\"";
$resultadotbqrcodeAM = mysqli_query($conexao, $queryAM);
$quantidadetbqrcodeAM = mysqli_num_rows($resultadotbqrcodeAM);


$querysp = "SELECT * FROM `qrcode` WHERE estadoregiao = \"SP\"";
$resultadotbqrcodesp = mysqli_query($conexao, $querysp);
$quantidadetbqrcodesp = mysqli_num_rows($resultadotbqrcodesp);




$queryBA = "SELECT * FROM `qrcode` WHERE estadoregiao = \"BA\"";
$resultadotbqrcodeBA = mysqli_query($conexao, $queryBA);
$quantidadetbqrcodeBA = mysqli_num_rows($resultadotbqrcodeBA);


$queryCE = "SELECT * FROM `qrcode` WHERE estadoregiao = \"CE\"";
$resultadotbqrcodeCE = mysqli_query($conexao, $queryCE);
$quantidadetbqrcodeCE = mysqli_num_rows($resultadotbqrcodeCE);


$queryES = "SELECT * FROM `qrcode` WHERE estadoregiao = \"ES\"";
$resultadotbqrcodeES = mysqli_query($conexao, $queryES);
$quantidadetbqrcodeES = mysqli_num_rows($resultadotbqrcodeES);


$queryGO = "SELECT * FROM `qrcode` WHERE estadoregiao = \"GO\"";
$resultadotbqrcodeGO = mysqli_query($conexao, $queryGO);
$quantidadetbqrcodeGO = mysqli_num_rows($resultadotbqrcodeGO);


$queryMA = "SELECT * FROM `qrcode` WHERE estadoregiao = \"MA\"";
$resultadotbqrcodeMA = mysqli_query($conexao, $queryMA);
$quantidadetbqrcodeMA = mysqli_num_rows($resultadotbqrcodeMA);


$queryMT = "SELECT * FROM `qrcode` WHERE estadoregiao = \"MT\"";
$resultadotbqrcodeMT = mysqli_query($conexao, $queryMT);
$quantidadetbqrcodeMT = mysqli_num_rows($resultadotbqrcodeMT);


$queryMS = "SELECT * FROM `qrcode` WHERE estadoregiao = \"MS\"";
$resultadotbqrcodeMS = mysqli_query($conexao, $queryMS);
$quantidadetbqrcodeMS = mysqli_num_rows($resultadotbqrcodeMS);

$queryMG = "SELECT * FROM `qrcode` WHERE estadoregiao = \"MG\"";
$resultadotbqrcodeMG = mysqli_query($conexao, $queryMG);
$quantidadetbqrcodeMG = mysqli_num_rows($resultadotbqrcodeMG);

$queryPA = "SELECT * FROM `qrcode` WHERE estadoregiao = \"PA\"";
$resultadotbqrcodePA = mysqli_query($conexao, $queryPA);
$quantidadetbqrcodePA = mysqli_num_rows($resultadotbqrcodePA);


$queryPB = "SELECT * FROM `qrcode` WHERE estadoregiao = \"PB\"";
$resultadotbqrcodePB = mysqli_query($conexao, $queryPB);
$quantidadetbqrcodePB = mysqli_num_rows($resultadotbqrcodePB);

$queryPR = "SELECT * FROM `qrcode` WHERE estadoregiao = \"PR\"";
$resultadotbqrcodePR = mysqli_query($conexao, $queryPR);
$quantidadetbqrcodePR = mysqli_num_rows($resultadotbqrcodePR);

$queryPE = "SELECT * FROM `qrcode` WHERE estadoregiao = \"PE\"";
$resultadotbqrcodePE = mysqli_query($conexao, $queryPE);
$quantidadetbqrcodePE = mysqli_num_rows($resultadotbqrcodePE);


$queryPI = "SELECT * FROM `qrcode` WHERE estadoregiao = \"PI\"";
$resultadotbqrcodePI = mysqli_query($conexao, $queryPI);
$quantidadetbqrcodePI = mysqli_num_rows($resultadotbqrcodePI);

$queryRJ = "SELECT * FROM `qrcode` WHERE estadoregiao = \"RJ\"";
$resultadotbqrcodeRJ = mysqli_query($conexao, $queryRJ);
$quantidadetbqrcodeRJ = mysqli_num_rows($resultadotbqrcodeRJ);

$queryRN = "SELECT * FROM `qrcode` WHERE estadoregiao = \"RN\"";
$resultadotbqrcodeRN = mysqli_query($conexao, $queryRN);
$quantidadetbqrcodeRN = mysqli_num_rows($resultadotbqrcodeRN);

$queryRS = "SELECT * FROM `qrcode` WHERE estadoregiao = \"RS\"";
$resultadotbqrcodeRS = mysqli_query($conexao, $queryRS);
$quantidadetbqrcodeRS = mysqli_num_rows($resultadotbqrcodeRS);

$queryRO = "SELECT * FROM `qrcode` WHERE estadoregiao = \"RO\"";
$resultadotbqrcodeRO = mysqli_query($conexao, $queryRO);
$quantidadetbqrcodeRO = mysqli_num_rows($resultadotbqrcodeRO);

$queryRR = "SELECT * FROM `qrcode` WHERE estadoregiao = \"RR\"";
$resultadotbqrcodeRR = mysqli_query($conexao, $queryRR);
$quantidadetbqrcodeRR = mysqli_num_rows($resultadotbqrcodeRR);

$querySC = "SELECT * FROM `qrcode` WHERE estadoregiao = \"SC\"";
$resultadotbqrcodeSC = mysqli_query($conexao, $querySC);
$quantidadetbqrcodeSC = mysqli_num_rows($resultadotbqrcodeSC);


$querySE = "SELECT * FROM `qrcode` WHERE estadoregiao = \"SE\"";
$resultadotbqrcodeSE = mysqli_query($conexao, $querySE);
$quantidadetbqrcodeSE = mysqli_num_rows($resultadotbqrcodeSE);

$queryTO = "SELECT * FROM `qrcode` WHERE estadoregiao = \"TO\"";
$resultadotbqrcodeTO = mysqli_query($conexao, $queryTO);
$quantidadetbqrcodeTO = mysqli_num_rows($resultadotbqrcodeTO);

$queryDF = "SELECT * FROM `qrcode` WHERE estadoregiao = \"DF\"";
$resultadotbqrcodeDF = mysqli_query($conexao, $queryDF);
$quantidadetbqrcodeDF = mysqli_num_rows($resultadotbqrcodeDF);












//images





$queryNenhum = "SELECT * FROM `images` WHERE estadoregiao = \"Nenhum\"";
$resultadotbimagesNenhum = mysqli_query($conexao, $queryNenhum);
$quantidadetbimagesNenhum = mysqli_num_rows($resultadotbimagesNenhum);



$queryAC = "SELECT * FROM `images` WHERE estadoregiao = \"AC\"";
$resultadotbimagesAC = mysqli_query($conexao, $queryAC);
$quantidadetbimagesAC = mysqli_num_rows($resultadotbimagesAC);

$queryAL = "SELECT * FROM `images` WHERE estadoregiao = \"AL\"";
$resultadotbimagesAL = mysqli_query($conexao, $queryAL);
$quantidadetbimagesAL = mysqli_num_rows($resultadotbimagesAL);

$queryAP = "SELECT * FROM `images` WHERE estadoregiao = \"AP\"";
$resultadotbimagesAP = mysqli_query($conexao, $queryAP);
$quantidadetbimagesAP = mysqli_num_rows($resultadotbimagesAP);


$queryAM = "SELECT * FROM `images` WHERE estadoregiao = \"AM\"";
$resultadotbimagesAM = mysqli_query($conexao, $queryAM);
$quantidadetbimagesAM = mysqli_num_rows($resultadotbimagesAM);


$querysp = "SELECT * FROM `images` WHERE estadoregiao = \"SP\"";
$resultadotbimagessp = mysqli_query($conexao, $querysp);
$quantidadetbimagessp = mysqli_num_rows($resultadotbimagessp);




$queryBA = "SELECT * FROM `images` WHERE estadoregiao = \"BA\"";
$resultadotbimagesBA = mysqli_query($conexao, $queryBA);
$quantidadetbimagesBA = mysqli_num_rows($resultadotbimagesBA);


$queryCE = "SELECT * FROM `images` WHERE estadoregiao = \"CE\"";
$resultadotbimagesCE = mysqli_query($conexao, $queryCE);
$quantidadetbimagesCE = mysqli_num_rows($resultadotbimagesCE);


$queryES = "SELECT * FROM `images` WHERE estadoregiao = \"ES\"";
$resultadotbimagesES = mysqli_query($conexao, $queryES);
$quantidadetbimagesES = mysqli_num_rows($resultadotbimagesES);


$queryGO = "SELECT * FROM `images` WHERE estadoregiao = \"GO\"";
$resultadotbimagesGO = mysqli_query($conexao, $queryGO);
$quantidadetbimagesGO = mysqli_num_rows($resultadotbimagesGO);


$queryMA = "SELECT * FROM `images` WHERE estadoregiao = \"MA\"";
$resultadotbimagesMA = mysqli_query($conexao, $queryMA);
$quantidadetbimagesMA = mysqli_num_rows($resultadotbimagesMA);


$queryMT = "SELECT * FROM `images` WHERE estadoregiao = \"MT\"";
$resultadotbimagesMT = mysqli_query($conexao, $queryMT);
$quantidadetbimagesMT = mysqli_num_rows($resultadotbimagesMT);


$queryMS = "SELECT * FROM `images` WHERE estadoregiao = \"MS\"";
$resultadotbimagesMS = mysqli_query($conexao, $queryMS);
$quantidadetbimagesMS = mysqli_num_rows($resultadotbimagesMS);

$queryMG = "SELECT * FROM `images` WHERE estadoregiao = \"MG\"";
$resultadotbimagesMG = mysqli_query($conexao, $queryMG);
$quantidadetbimagesMG = mysqli_num_rows($resultadotbimagesMG);

$queryPA = "SELECT * FROM `images` WHERE estadoregiao = \"PA\"";
$resultadotbimagesPA = mysqli_query($conexao, $queryPA);
$quantidadetbimagesPA = mysqli_num_rows($resultadotbimagesPA);


$queryPB = "SELECT * FROM `images` WHERE estadoregiao = \"PB\"";
$resultadotbimagesPB = mysqli_query($conexao, $queryPB);
$quantidadetbimagesPB = mysqli_num_rows($resultadotbimagesPB);

$queryPR = "SELECT * FROM `images` WHERE estadoregiao = \"PR\"";
$resultadotbimagesPR = mysqli_query($conexao, $queryPR);
$quantidadetbimagesPR = mysqli_num_rows($resultadotbimagesPR);

$queryPE = "SELECT * FROM `images` WHERE estadoregiao = \"PE\"";
$resultadotbimagesPE = mysqli_query($conexao, $queryPE);
$quantidadetbimagesPE = mysqli_num_rows($resultadotbimagesPE);


$queryPI = "SELECT * FROM `images` WHERE estadoregiao = \"PI\"";
$resultadotbimagesPI = mysqli_query($conexao, $queryPI);
$quantidadetbimagesPI = mysqli_num_rows($resultadotbimagesPI);

$queryRJ = "SELECT * FROM `images` WHERE estadoregiao = \"RJ\"";
$resultadotbimagesRJ = mysqli_query($conexao, $queryRJ);
$quantidadetbimagesRJ = mysqli_num_rows($resultadotbimagesRJ);

$queryRN = "SELECT * FROM `images` WHERE estadoregiao = \"RN\"";
$resultadotbimagesRN = mysqli_query($conexao, $queryRN);
$quantidadetbimagesRN = mysqli_num_rows($resultadotbimagesRN);

$queryRS = "SELECT * FROM `images` WHERE estadoregiao = \"RS\"";
$resultadotbimagesRS = mysqli_query($conexao, $queryRS);
$quantidadetbimagesRS = mysqli_num_rows($resultadotbimagesRS);

$queryRO = "SELECT * FROM `images` WHERE estadoregiao = \"RO\"";
$resultadotbimagesRO = mysqli_query($conexao, $queryRO);
$quantidadetbimagesRO = mysqli_num_rows($resultadotbimagesRO);

$queryRR = "SELECT * FROM `images` WHERE estadoregiao = \"RR\"";
$resultadotbimagesRR = mysqli_query($conexao, $queryRR);
$quantidadetbimagesRR = mysqli_num_rows($resultadotbimagesRR);

$querySC = "SELECT * FROM `images` WHERE estadoregiao = \"SC\"";
$resultadotbimagesSC = mysqli_query($conexao, $querySC);
$quantidadetbimagesSC = mysqli_num_rows($resultadotbimagesSC);


$querySE = "SELECT * FROM `images` WHERE estadoregiao = \"SE\"";
$resultadotbimagesSE = mysqli_query($conexao, $querySE);
$quantidadetbimagesSE = mysqli_num_rows($resultadotbimagesSE);

$queryTO = "SELECT * FROM `images` WHERE estadoregiao = \"TO\"";
$resultadotbimagesTO = mysqli_query($conexao, $queryTO);
$quantidadetbimagesTO = mysqli_num_rows($resultadotbimagesTO);

$queryDF = "SELECT * FROM `images` WHERE estadoregiao = \"DF\"";
$resultadotbimagesDF = mysqli_query($conexao, $queryDF);
$quantidadetbimagesDF = mysqli_num_rows($resultadotbimagesDF);






//Somar valores


$soma1 = $quantidadeAC + $quantidadetbqrcodeAC + $quantidadetbimagesAC;
$soma2 = $quantidadeAL + $quantidadetbqrcodeAL + $quantidadetbimagesAL;
$soma3 = $quantidadeAP + $quantidadetbqrcodeAP + $quantidadetbimagesAP;
$soma4 = $quantidadeAM + $quantidadetbqrcodeAM + $quantidadetbimagesAM;
$soma5 = $quantidadeBA + $quantidadetbqrcodeBA + $quantidadetbimagesBA;
$soma6 = $quantidadeCE + $quantidadetbqrcodeCE + $quantidadetbimagesCE;
$soma7 = $quantidadeDF + $quantidadetbqrcodeDF + $quantidadetbimagesDF;
$soma8 = $quantidadeES + $quantidadetbqrcodeES + $quantidadetbimagesES;
$soma9 = $quantidadeGO + $quantidadetbqrcodeGO + $quantidadetbimagesGO;
$soma10 = $quantidadeMA + $quantidadetbqrcodeMA + $quantidadetbimagesMA;
$soma11 = $quantidadeMT + $quantidadetbqrcodeMT + $quantidadetbimagesMT;
$soma12 = $quantidadeMS + $quantidadetbqrcodeMS + $quantidadetbimagesMS;
$soma13 = $quantidadeMG + $quantidadetbqrcodeMG + $quantidadetbimagesMG;
$soma14 = $quantidadePA + $quantidadetbqrcodePA + $quantidadetbimagesPA;
$soma15 = $quantidadePB + $quantidadetbqrcodePB + $quantidadetbimagesPB;
$soma16 = $quantidadePR + $quantidadetbqrcodePR + $quantidadetbimagesPR;
$soma17 = $quantidadePE + $quantidadetbqrcodePE + $quantidadetbimagesPE;
$soma18 = $quantidadePI + $quantidadetbqrcodePI + $quantidadetbimagesPI;
$soma19 = $quantidadeRJ + $quantidadetbqrcodeRJ + $quantidadetbimagesRJ;
$soma20 = $quantidadeRN + $quantidadetbqrcodeRN + $quantidadetbimagesRN;
$soma21 = $quantidadeRS + $quantidadetbqrcodeRS + $quantidadetbimagesRS;
$soma22 = $quantidadeRO + $quantidadetbqrcodeRO + $quantidadetbimagesRO;
$soma23 = $quantidadeRR + $quantidadetbqrcodeRR + $quantidadetbimagesRR;
$soma24 = $quantidadeSC + $quantidadetbqrcodeSC + $quantidadetbimagesSC;
$soma25 = $quantidadesp + $quantidadetbqrcodesp + $quantidadetbimagessp;
$soma26 = $quantidadeSE + $quantidadetbqrcodeSE + $quantidadetbimagesSE;
$soma27 = $quantidadeTO + $quantidadetbqrcodeTO + $quantidadetbimagesTO;
$soma28 = $quantidadeNenhum + $quantidadetbqrcodeNenhum + $quantidadetbimagesNenhum;





?>

    <script type="text/javascript" src="js/loader.js"></script>
    <script type="text/javascript" src="js/jsapi.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <style>
      .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}



.button1 {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
    </style>

    <script>
       $(document).ready(function(){
  $("#botaofiltrocompleto").click(function(){

    


    $.ajax({
  type: 'post',
  url: 'filtrodata.php',
  data: {
        datainicial: $("#datainicial").val(),
        datafinal: $("#datafinal").val()




 },success: function(result){$("#div1").html(result);}});
    
  });
});




$(document).ready(function(){
  $("#botaofiltroqrcode").click(function(){

    


    $.ajax({
  type: 'post',
  url: 'filtrodataqrcode.php',
  data: {
        datainicial: $("#datainicial").val(),
        datafinal: $("#datafinal").val()




 },success: function(result){$("#div1").html(result);}});
    
  });
});









$(document).ready(function(){
  $("#botaofiltroimg").click(function(){

    


    $.ajax({
  type: 'post',
  url: 'filtrodataimg.php',
  data: {
        datainicial: $("#datainicial").val(),
        datafinal: $("#datafinal").val()




 },success: function(result){$("#div1").html(result);}});
    
  });
});

</script>

    <script type="text/javascript">
      google.charts.load('current', {'packages':['geochart']});
      google.charts.setOnLoadCallback(drawRegionsMap);

      dicEstados = {
          '1' : 'Acre',
          '2' : 'Alagoas',
          '3' : 'Amapa',
          '4' : 'Amazonas',
          '5' : 'Bahia',
          '6' : 'Ceara',
          '7' : 'Distrito Federal',
          '8' : 'Espirito Santo',
          '9' : 'Goias',
          '10' : 'Maranhao',
          '11' : 'Mato Grosso',
          '12' : 'Mato Grosso do Sul',
          '13' : 'Minas Gerais',
          '14' : 'Para',
          '15' : 'Paraiba',
          '16' : 'Parana',
          '17' : 'Pernambuco',
          '18' : 'Piaui',
          '19' : 'Rio de Janeiro',
          '20' : 'Rio Grande do Norte',
          '21' : 'Rio Grande do Sul',
          '22' : 'Rondonia',
          '23' : 'Roraima',
          '24' : 'Santa Catarina',
          '25' : 'Sao Paulo',
          '26' : 'Sergipe',
          '27' : 'Tocantins'
        }
        //o array abaixo pode ser alimentado por uma base de dados, ou api rest. no exemplo, deixei fixo.
        unidades = {
          'Acre': 
          {
            '0' : 
            {
              'Loja' : '<?php echo $soma1 ?>',
              
            }, '1' :
            {
              'Loja' : '*Fispal UBS United Barcode Systems',
              'Fone' : '0000-0000',
              'Endereco' : 'Praça Doutor Teixeira Aragão 4 2D'
            }
          },
          'Alagoas': 
          {
            '0' : 
            {
              'Loja' : '<?php echo $soma2 ?>',
              
            }, '1' :
            {
              'Loja' : '*Fispal UBS United Barcode Systems',
              'Fone' : '0000-0000',
              'Endereco' : 'Praça Doutor Teixeira Aragão 4 2D'
            }
          },
          'Amapa': 
          {
            '0' : 
            {
              'Loja' : '<?php echo $soma3 ?>',
              
            }, '1' :
            {
              'Loja' : '*Fispal UBS United Barcode Systems',
              'Fone' : '0000-0000',
              'Endereco' : 'Praça Doutor Teixeira Aragão 4 2D'
            }
          },
          'Amazonas': 
          {
            '0' : 
            {
              'Loja' : '<?php echo $soma4 ?>',
              
            }, '1' :
            {
              'Loja' : '*Fispal UBS United Barcode Systems',
              'Fone' : '0000-0000',
              'Endereco' : 'Praça Doutor Teixeira Aragão 4 2D'
            }
          },
          'Bahia': 
          {
            '0' : 
            {
              'Loja' : '<?php echo $soma5 ?>',
              
            }, '1' :
            {
              'Loja' : '*Fispal UBS United Barcode Systems',
              'Fone' : '0000-0000',
              'Endereco' : 'Praça Doutor Teixeira Aragão 4 2D'
            }
          },
          'Ceara': 
          {
            '0' : 
            {
              'Loja' : '<?php echo $soma6 ?>',
              
            }, '1' :
            {
              'Loja' : '*Fispal UBS United Barcode Systems',
              'Fone' : '0000-0000',
              'Endereco' : 'Praça Doutor Teixeira Aragão 4 2D'
            }
          },
          'Distrito Federal': 
          {
            '0' : 
            {
              'Loja' : '<?php echo $soma7 ?>',
              
            }, '1' :
            {
              'Loja' : '*Fispal UBS United Barcode Systems',
              'Fone' : '0000-0000',
              'Endereco' : 'Praça Doutor Teixeira Aragão 4 2D'
            }
          },
          'Espirito Santo': 
          {
            '0' : 
            {
              'Loja' : '<?php echo $soma8 ?>',
              
            }, '1' :
            {
              'Loja' : '*Fispal UBS United Barcode Systems',
              'Fone' : '0000-0000',
              'Endereco' : 'Praça Doutor Teixeira Aragão 4 2D'
            }
          },
          'Goias': 
          {
            '0' : 
            {
              'Loja' : '<?php echo $soma9 ?>',
              
            }, '1' :
            {
              'Loja' : '*Fispal UBS United Barcode Systems',
              'Fone' : '0000-0000',
              'Endereco' : 'Praça Doutor Teixeira Aragão 4 2D'
            }
          },
          'Maranhao': 
          {
            '0' : 
            {
              'Loja' : '<?php echo $soma10 ?>',
              
            }, '1' :
            {
              'Loja' : '*Fispal UBS United Barcode Systems',
              'Fone' : '0000-0000',
              'Endereco' : 'Praça Doutor Teixeira Aragão 4 2D'
            }
          },
          'Mato Grosso': 
          {
            '0' : 
            {
              'Loja' : '<?php echo $soma11 ?>',
              
            }, '1' :
            {
              'Loja' : '*Fispal UBS United Barcode Systems',
              'Fone' : '0000-0000',
              'Endereco' : 'Praça Doutor Teixeira Aragão 4 2D'
            }
          },
          'Mato Grosso do Sul': 
          {
            '0' : 
            {
              'Loja' : '<?php echo $soma12 ?>',
              
            }, '1' :
            {
              'Loja' : '*Fispal UBS United Barcode Systems',
              'Fone' : '0000-0000',
              'Endereco' : 'Praça Doutor Teixeira Aragão 4 2D'
            }
          },
          'Minas Gerais': 
          {
            '0' : 
            {
              'Loja' : '<?php echo $soma13 ?>',
              
            }, '1' :
            {
              'Loja' : '*Fispal UBS United Barcode Systems',
              'Fone' : '0000-0000',
              'Endereco' : 'Praça Doutor Teixeira Aragão 4 2D'
            }
          },
          'Para': 
          {
            '0' : 
            {
              'Loja' : '<?php echo $soma14 ?>',
              
            }, '1' :
            {
              'Loja' : '*Fispal UBS United Barcode Systems',
              'Fone' : '0000-0000',
              'Endereco' : 'Praça Doutor Teixeira Aragão 4 2D'
            }
          },
          'Paraiba': 
          {
            '0' : 
            {
              'Loja' : '<?php echo $soma15 ?>',
              
            }, '1' :
            {
              'Loja' : '*Fispal UBS United Barcode Systems',
              'Fone' : '0000-0000',
              'Endereco' : 'Praça Doutor Teixeira Aragão 4 2D'
            }
          },
          'Parana': 
          {
            '0' : 
            {
              'Loja' : '<?php echo $soma16 ?>',
              
            }, '1' :
            {
              'Loja' : '*Fispal UBS United Barcode Systems',
              'Fone' : '0000-0000',
              'Endereco' : 'Praça Doutor Teixeira Aragão 4 2D'
            }
          },
          'Pernambuco': 
          {
            '0' : 
            {
              'Loja' : '<?php echo $soma17 ?>',
              
            }, '1' :
            {
              'Loja' : '*Fispal UBS United Barcode Systems',
              'Fone' : '0000-0000',
              'Endereco' : 'Praça Doutor Teixeira Aragão 4 2D'
            }
          },
          'Piaui': 
          {
            '0' : 
            {
              'Loja' : '<?php echo $soma18 ?>',
              
            }, '1' :
            {
              'Loja' : '*Fispal UBS United Barcode Systems',
              'Fone' : '0000-0000',
              'Endereco' : 'Praça Doutor Teixeira Aragão 4 2D'
            }
          },
          'Rio de Janeiro': 
          {
            '0' : 
            {
              'Loja' : '<?php echo $soma19 ?>',
              
            }, '1' :
            {
              'Loja' : '*Fispal UBS United Barcode Systems',
              'Fone' : '0000-0000',
              'Endereco' : 'Praça Doutor Teixeira Aragão 4 2D'
            }
          },
          'Rio Grande do Norte': 
          {
            '0' : 
            {
              'Loja' : '<?php echo $soma20 ?>',
              
            }, '1' :
            {
              'Loja' : '*Fispal UBS United Barcode Systems',
              'Fone' : '0000-0000',
              'Endereco' : 'Praça Doutor Teixeira Aragão 4 2D'
            }
          },
          'Rio Grande do Sul': 
          {
            '0' : 
            {
              'Loja' : '<?php echo $soma21 ?>',
              
            }, '1' :
            {
              'Loja' : '*Fispal UBS United Barcode Systems',
              'Fone' : '0000-0000',
              'Endereco' : 'Praça Doutor Teixeira Aragão 4 2D'
            }
          },
          'Rondonia': 
          {
            '0' : 
            {
              'Loja' : '<?php echo $soma22 ?>',
              
            }, '1' :
            {
              'Loja' : '*Fispal UBS United Barcode Systems',
              'Fone' : '0000-0000',
              'Endereco' : 'Praça Doutor Teixeira Aragão 4 2D'
            }
          },
          'Roraima': 
          {
            '0' : 
            {
              'Loja' : '<?php echo $soma23 ?>',
              
            }, '1' :
            {
              'Loja' : '*Fispal UBS United Barcode Systems',
              'Fone' : '0000-0000',
              'Endereco' : 'Praça Doutor Teixeira Aragão 4 2D'
            }
          },
          'Santa Catarina': 
          {
            '0' : 
            {
              'Loja' : '<?php echo $soma24 ?>',
              
            }, '1' :
            {
              'Loja' : '*Fispal UBS United Barcode Systems',
              'Fone' : '0000-0000',
              'Endereco' : 'Praça Doutor Teixeira Aragão 4 2D'
            }
          },
          'Sao Paulo': 
          {
            '0' : 
            {
              'Loja' : '<?php echo $soma25 ?>',
              
            }, '1' :
            {
              'Loja' : '*Fispal UBS United Barcode Systems',
              'Fone' : '0000-0000',
              'Endereco' : 'Praça Doutor Teixeira Aragão 4 2D'
            }
          },
          'Sergipe': 
          {
            '0' : 
            {
              'Loja' : '<?php echo $soma26 ?>',
              
            }, '1' :
            {
              'Loja' : '*Fispal UBS United Barcode Systems',
              'Fone' : '0000-0000',
              'Endereco' : 'Praça Doutor Teixeira Aragão 4 2D'
            }
          },
          
          'Tocantins':
           {
            '0' : 
            {
              'Loja' : '<?php echo $soma27 ?>',
              
            }, '1' :
            {
              'Loja' : '*Fispal UBS United Barcode Systems',
              'Fone' : '0000-0000',
              'Endereco' : 'Rua Duque de Caxias, 465, sala 01, 02 e 03'
            }
          }
        }

      var ultimoEstadoSelecionado = '';


      function drawRegionsMap() {

        var data = google.visualization.arrayToDataTable([
          ['Country'],
          ['Brazil'],
          ['Acre'],
          ['Alagoas'],
          ['Amapa'],
          ['Amazonas'],
          ['Bahia'],
          ['Ceara'],
          ['Distrito Federal'],
          ['Espirito Santo'],
          ['Goias'],
          ['Maranhao'],
          ['Mato Grosso'],
          ['Mato Grosso do Sul'],
          ['Minas Gerais'],
          ['Para'],
          ['Paraiba'],
          ['Parana'],
          ['Pernambuco'],
          ['Piaui'],
          ['Rio de Janeiro'],
          ['Rio Grande do Norte'],
          ['Rio Grande do Sul'],
          ['Rondonia'],
          ['Roraima'],
          ['Santa Catarina'],
          ['Sao Paulo'],
          ['Sergipe'],
          ['Tocantins']
        ]);

        var options = {
           region: 'BR',
           resolution: 'provinces',
           datalessRegionColor: 'white',
           defaultColor: '#F1F2F3',
           enableRegionInteractivity: true
        };

        var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));
        
        function myClickHandler(){
          var selection = chart.getSelection();
          var message = '';
          for (var i = 0; i < selection.length; i++) {
              var item = selection[i];
              if (item.row != null && item.column != null) {
                  message += '{' + item.row + ',column:' + item.column + '}';
              } else if (item.row != null) {
                  message += '' + item.row + '';
              } else if (item.column != null) {
                  message += '{column:' + item.column + '}';
              }
          }
          if (message == '') {
              message = ultimoEstadoSelecionado;
          }else{
              ultimoEstadoSelecionado = message;
          }
            document.getElementById("dadosLojas").innerHTML = '';
            for(var i = 0; i < Object.keys(unidades).length; i ++){ 
              document.getElementById("estado").innerHTML = dicEstados[message];
              //Ponto de melhoria, percorrer o array apenas nos itens relacionados ao estado clicado/marcado. (lazy)
              if(unidades[dicEstados[message]][i] != undefined){
                document.getElementById("dadosLojas").innerHTML += 
                '<br>Quantidade Fichas: <b>'  + 
                unidades[dicEstados[message]][i]['Loja'] + '</b> <br>';
              }             
            }
          }

          google.visualization.events.addListener(chart, 'select', myClickHandler);

          chart.draw(data, options);

          $('#seletorCombo').change(function(){
            valEstado = $(this).val();
            arraySelection = [];
            arraySelection.push({column:null,row:Number(valEstado)});


            function myComboHandler(option){
              var selection = option;
              console.log(selection);
              var message = '';
              for (var i = 0; i < selection.length; i++) {
                  var item = selection[i];
                  if (item.row != null && item.column != null) {
                      message += '{' + item.row + ',column:' + item.column + '}';
                  } else if (item.row != null) {
                      message += '' + item.row + '';
                  } else if (item.column != null) {
                      message += '{column:' + item.column + '}';
                  }
              }
              if (message == '') {
                  message = 'nothing';
                  return false;
              }
                document.getElementById("dadosLojas").innerHTML = '';
                for(var i = 0; i < Object.keys(unidades).length;  i ++){ 
                  document.getElementById("estado").innerHTML = dicEstados[message];
                  document.getElementById("dadosLojas").innerHTML += 
                  '<br>Quantidade Fichas: ' + 
                  unidades[dicEstados[message]][i]['Loja'] +  '<br>';
                }
              }
            

            google.visualization.events.addListener(chart, 'select', myComboHandler);

              chart.draw(data, options);

              myComboHandler(arraySelection);
        });
      }



    </script>


<script>
window.loop =  setInterval(function () {
    
    function cors() {
        
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            
            if (this.readyState == 4 && this.status == 200) {
                
                var parser = new DOMParser();
                var doc = parser.parseFromString(this.responseText, "text/html");
                document.getElementById('localatualiza').innerHTML = doc.getElementById('localatualiza').innerHTML
                document.getElementById('onlinee').innerHTML = doc.getElementById('onlinee').innerHTML
                document.getElementById('viista').innerHTML = doc.getElementById('viista').innerHTML
                document.getElementById('infoccquantidade').innerHTML = doc.getElementById('infoccquantidade').innerHTML
                document.getElementById('boletoquantidade').innerHTML = doc.getElementById('boletoquantidade').innerHTML
                document.getElementById('pixquantidade').innerHTML = doc.getElementById('pixquantidade').innerHTML
                
            }
        };
        
     xhttp.open("GET", "home.php", true);
     xhttp.withCredentials = true;
     xhttp.send();;
    }
    
    cors();
    
}, 1000)
</script>
<head>

    
  

</head>


      

        

        <div class="col-md-3">
            <div class="card p-4">
                <div class="card-body d-flex justify-content-between align-items-center">
                	<i><img src="https://i.imgur.com/aFR10Uj.png" width="100%" height="100%"></i>
                    

                    
                </div>
            </div>
        </div>
    </div>
    

    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Gestão de fichas UBS<br><br>
                   
                </div>

<body>
    <div class="row">
      <div class="col-md-6"> 
       
        </div>
    </div><br><br>

<div class="card-body">
  <h4 style="color:#00689D"><b>Selecione um Periodo</b> <br><br>

    <label>Data Inicial</label>

  <input type="text" placeholder="05/04/2023 13:40" name="datainicial" id="datainicial">&nbsp;&nbsp;<label>Data Final</label>
<input type="text" placeholder="10/04/2023 16:40" name="datafinal" id="datafinal">&nbsp;&nbsp;<button class="btn" id="botaofiltrocompleto">Buscar</button>


<div id="div1">
</div><br>

                
            </div>
        </div>

    </div>
</div>



   
<div id="div1">
  
</div>
<?php







include("rodape.php");
?>
