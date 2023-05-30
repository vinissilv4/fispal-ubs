<?php
include('../config.php');



$datainicial = $_POST['datainicial'];
$datainicialformatada = date('Y-m-d H:i:s', strtotime(str_replace('/', '-', $datainicial)));
$datafinal = $_POST['datafinal'];
$datafinalformatada = date('Y-m-d H:i:s', strtotime(str_replace('/', '-', $datafinal)));

$data_hora_inicial = date('d-m-Y H:i:s', strtotime($datainicialformatada)); 
$data_hora_final = date('d-m-Y H:i:s', strtotime($datafinalformatada));

$sql = "SELECT * FROM dadosficha WHERE STR_TO_DATE(dataehora, '%d/%m/%Y %H:%i:%s') BETWEEN STR_TO_DATE('$data_hora_inicial', '%d-%m-%Y %H:%i:%s') AND STR_TO_DATE('$data_hora_final', '%d-%m-%Y %H:%i:%s')"; 

$resultado = mysqli_query($conexao, $sql);

// Contar o número de registros que possuem 'SP' na coluna estadoeregiao durante o período selecionado
$sql_count = "SELECT COUNT(*) as total_count, 
                      SUM(CASE WHEN estadoregiao='AC' THEN 1 ELSE 0 END) as ac_count,
                      SUM(CASE WHEN estadoregiao='AL' THEN 1 ELSE 0 END) as al_count,
                      SUM(CASE WHEN estadoregiao='AP' THEN 1 ELSE 0 END) as ap_count,
                      SUM(CASE WHEN estadoregiao='AM' THEN 1 ELSE 0 END) as am_count,
                      SUM(CASE WHEN estadoregiao='BA' THEN 1 ELSE 0 END) as ba_count,
                      SUM(CASE WHEN estadoregiao='CE' THEN 1 ELSE 0 END) as ce_count,
                      SUM(CASE WHEN estadoregiao='DF' THEN 1 ELSE 0 END) as df_count,
                      SUM(CASE WHEN estadoregiao='ES' THEN 1 ELSE 0 END) as es_count,
                      SUM(CASE WHEN estadoregiao='GO' THEN 1 ELSE 0 END) as go_count,
                      SUM(CASE WHEN estadoregiao='MA' THEN 1 ELSE 0 END) as ma_count,
                      SUM(CASE WHEN estadoregiao='MT' THEN 1 ELSE 0 END) as mt_count,
                      SUM(CASE WHEN estadoregiao='MS' THEN 1 ELSE 0 END) as ms_count,
                      SUM(CASE WHEN estadoregiao='MG' THEN 1 ELSE 0 END) as mg_count,
                      SUM(CASE WHEN estadoregiao='PA' THEN 1 ELSE 0 END) as pa_count,
                      SUM(CASE WHEN estadoregiao='PB' THEN 1 ELSE 0 END) as pb_count,
                      SUM(CASE WHEN estadoregiao='PR' THEN 1 ELSE 0 END) as pr_count,
                      SUM(CASE WHEN estadoregiao='PE' THEN 1 ELSE 0 END) as pe_count,
                      SUM(CASE WHEN estadoregiao='PI' THEN 1 ELSE 0 END) as pi_count,
                      SUM(CASE WHEN estadoregiao='RJ' THEN 1 ELSE 0 END) as rj_count,
                      SUM(CASE WHEN estadoregiao='RN' THEN 1 ELSE 0 END) as rn_count,
                      SUM(CASE WHEN estadoregiao='RS' THEN 1 ELSE 0 END) as rs_count,
                      SUM(CASE WHEN estadoregiao='RO' THEN 1 ELSE 0 END) as ro_count,
                      SUM(CASE WHEN estadoregiao='RR' THEN 1 ELSE 0 END) as rr_count,
                      SUM(CASE WHEN estadoregiao='SC' THEN 1 ELSE 0 END) as sc_count,
                      SUM(CASE WHEN estadoregiao='SP' THEN 1 ELSE 0 END) as sp_count,
                      SUM(CASE WHEN estadoregiao='SE' THEN 1 ELSE 0 END) as se_count,
                      SUM(CASE WHEN estadoregiao='TO' THEN 1 ELSE 0 END) as to_count,
                      SUM(CASE WHEN estadoregiao='(Latam) Argentina' THEN 1 ELSE 0 END) as argentina_count,
                      SUM(CASE WHEN estadoregiao='(Latam) Bolívia' THEN 1 ELSE 0 END) as bolivia_count,
                      SUM(CASE WHEN estadoregiao='(Latam) Chile' THEN 1 ELSE 0 END) as chile_count,
                      SUM(CASE WHEN estadoregiao='(Latam) Colômbia' THEN 1 ELSE 0 END) as colombia_count,
                      SUM(CASE WHEN estadoregiao='(Latam) Costa Rica' THEN 1 ELSE 0 END) as costarica_count,
                      SUM(CASE WHEN estadoregiao='(Latam) Cuba' THEN 1 ELSE 0 END) as cuba_count,
                      SUM(CASE WHEN estadoregiao='(Latam) Equador' THEN 1 ELSE 0 END) as equador_count,
                      SUM(CASE WHEN estadoregiao='(Latam) El Salvador' THEN 1 ELSE 0 END) as elsavador_count,
                      SUM(CASE WHEN estadoregiao='(Latam) Guatemala' THEN 1 ELSE 0 END) as guatemala_count,
                      SUM(CASE WHEN estadoregiao='(Latam) Haiti' THEN 1 ELSE 0 END) as haiti_count,
                      SUM(CASE WHEN estadoregiao='(Latam) Honduras' THEN 1 ELSE 0 END) as honduras_count,
                      SUM(CASE WHEN estadoregiao='(Latam) México' THEN 1 ELSE 0 END) as mexico_count,
                      SUM(CASE WHEN estadoregiao='(Latam) Nicarágua' THEN 1 ELSE 0 END) as nicaragua_count,
                      SUM(CASE WHEN estadoregiao='(Latam) Panamá' THEN 1 ELSE 0 END) as panama_count,
                      SUM(CASE WHEN estadoregiao='(Latam) Paraguai' THEN 1 ELSE 0 END) as paraguai_count,
                      SUM(CASE WHEN estadoregiao='(Latam) Peru' THEN 1 ELSE 0 END) as peru_count,
                      SUM(CASE WHEN estadoregiao='(Latam) República Dominicana' THEN 1 ELSE 0 END) as republicadominicana_count,
                      SUM(CASE WHEN estadoregiao='(Latam) Uruguai' THEN 1 ELSE 0 END) as uruguai_count,
                      SUM(CASE WHEN estadoregiao='(Latam) Venezuela' THEN 1 ELSE 0 END) as venezuela_count,
                      SUM(CASE WHEN estadoregiao='Nenhum' THEN 1 ELSE 0 END) as Nenhum
               FROM dadosficha 
               WHERE estadoregiao IN ('AC', 'AL', 'AP', 'AM', 'BA', 'CE', 'DF', 'ES', 'GO', 'MA', 'MT', 'MS', 'MG', 'PA', 'PB', 'PR', 'PE', 'PI', 'RJ', 'RN', 'RS', 'RO', 'RR', 'SC', 'SP', 'SE', 'TO', '(Latam) Argentina', '(Latam) Bolívia', '(Latam) Chile', '(Latam) Colômbia', '(Latam) Costa Rica', '(Latam) Cuba', '(Latam) Equador', '(Latam) El Salvador', '(Latam) Guatemala', '(Latam) Haiti', '(Latam) Honduras', '(Latam) México', '(Latam) Nicarágua', '(Latam) Panamá', '(Latam) Paraguai', '(Latam) Peru', '(Latam) República Dominicana', '(Latam) Uruguai', '(Latam) Venezuela', 'Nenhum') 
               AND STR_TO_DATE(dataehora, '%d/%m/%Y %H:%i:%s') BETWEEN STR_TO_DATE('$data_hora_inicial', '%d-%m-%Y %H:%i:%s') AND STR_TO_DATE('$data_hora_final', '%d-%m-%Y %H:%i:%s')";

$resultado_count = mysqli_query($conexao, $sql_count);
$registro_count = mysqli_fetch_assoc($resultado_count);




$sql_count_hot = "SELECT COUNT(*) as total_counthot, 
                      SUM(CASE WHEN clientehot='ClienteHot' THEN 1 ELSE 0 END) as hot_count
               FROM dadosficha 
               WHERE clientehot IN ('ClienteHot') 
               AND STR_TO_DATE(dataehora, '%d/%m/%Y %H:%i:%s') BETWEEN STR_TO_DATE('$data_hora_inicial', '%d-%m-%Y %H:%i:%s') AND STR_TO_DATE('$data_hora_final', '%d-%m-%Y %H:%i:%s')";

$resultado_count_hot = mysqli_query($conexao, $sql_count_hot);
$registro_count_hot = mysqli_fetch_assoc($resultado_count_hot);




$sql_coun_porte = "SELECT COUNT(*) as total_countporte, 
                      SUM(CASE WHEN porteempresa='A' THEN 1 ELSE 0 END) as a_count,
                      SUM(CASE WHEN porteempresa='AA' THEN 1 ELSE 0 END) as aa_count,
                      SUM(CASE WHEN porteempresa='AAA' THEN 1 ELSE 0 END) as aaa_count
               FROM dadosficha 
               WHERE porteempresa IN ('A', 'AA', 'AAA') 
               AND STR_TO_DATE(dataehora, '%d/%m/%Y %H:%i:%s') BETWEEN STR_TO_DATE('$data_hora_inicial', '%d-%m-%Y %H:%i:%s') AND STR_TO_DATE('$data_hora_final', '%d-%m-%Y %H:%i:%s')";

$resultado_count_porte = mysqli_query($conexao, $sql_coun_porte);
$registro_count_porte = mysqli_fetch_assoc($resultado_count_porte);



$sql_count_agendamento = "SELECT COUNT(*) as total_countagendamento
               FROM dadosficha
               WHERE agendarvisita
               AND STR_TO_DATE(dataehora, '%d/%m/%Y %H:%i:%s') BETWEEN STR_TO_DATE('$data_hora_inicial', '%d-%m-%Y %H:%i:%s') AND STR_TO_DATE('$data_hora_final', '%d-%m-%Y %H:%i:%s')";

$resultado_count_agendamento = mysqli_query($conexao, $sql_count_agendamento);


$registro_count_agendamento = mysqli_fetch_assoc($resultado_count_agendamento)['total_countagendamento'];





$sql_count_agendamentodemo = "SELECT COUNT(*) as total_countagendamentodemo
               FROM dadosficha
               WHERE agendardemo
               AND STR_TO_DATE(dataehora, '%d/%m/%Y %H:%i:%s') BETWEEN STR_TO_DATE('$data_hora_inicial', '%d-%m-%Y %H:%i:%s') AND STR_TO_DATE('$data_hora_final', '%d-%m-%Y %H:%i:%s')";

$resultado_count_agendamentodemo = mysqli_query($conexao, $sql_count_agendamentodemo);


$registro_count_agendamentodemo = mysqli_fetch_assoc($resultado_count_agendamentodemo)['total_countagendamentodemo'];


?>




<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script>(function($) {
	$(document).ready(function(){
			//Exibe box de parceiros correspondetes em cada estado quando houver click.
	    $('#map .state').click(function(){
			var estado = $(this).attr('data-state');
		    var box_estado = '#box_'+estado;

		    console.log('.state_'+estado+' .shape');

		    // Reseta o estado e seu label para a cor padrão
		    $('.state .label_icon_state').css({'fill': '#666'});
		    $('.state .shape').css({'fill': '#ddd'});

		    // Colore o estado selecionado
		    $('#state_'+estado+' .label_icon_state').css({'fill': '#FFF'});
		    $('#state_'+estado+' .shape').css({'fill': '#fd7132'});


		    //Verifica se o cadastro de contato do estado existe
		    if($('#box_'+estado).length == 0){
		    	console.log('Não existe');
		    }else{
		    	$('.parca .estado').addClass('some');
			    $('.parca .estado').css({'opacity': 0 , 'visibitity':'hidden'});

			    $(box_estado).removeClass('some');
			    $(box_estado).css({'opacity': 1 , 'visibitity':'visible'});
		    }
	    });

	    $('#map .state').click(function(e){
	    	e.preventDefault();
	    });

	    //Change select responsive
		$('#seletory').change(function () {
			$('.parca .estado').css({'opacity': 0 , 'visibitity':'hidden'});
			$('#box_'+$(this).val()).css({'opacity': 1 , 'visibitity':'visible'});
		});
	});
})(jQuery);</script>

<style>

/* MAPA */
.box-mapa{
	position: relative;
  z-index: 1;
  float: left;
	padding: 20px 0 0 15px;
}
#map {
	display: none;
	transform: scale(1.2);
	transform: scale(1);
	display: table !important;
	margin: 0 auto;
	float: left;
}
#map .state {
    cursor: pointer;
}
#map .state .shape {
    cursor: pointer;
    -width: 0;
}
#map .state .label_icon_state {
    fill: #fff;
    font-family: Arial;
    font-size: 11px;
    line-height: 12px;
    font-weight: normal;
}
#map .state .label_state {
    display: none;
    font-family: Arial;
    font-size: 14px;
    line-height: 16px;
    font-weight: bold;
}
#map .model-davi .state:hover .label_state {
    display: block;
		fill: #FFF !important;
}
#map .model-davi .state .shape {
    fill: #ddd;
}
#map .model-davi .state:hover .shape{
	fill: #039be5 !important;
}
#map .model-davi .state .icon_state{
    fill: #284779;
}
#map .model-davi .state:hover .icon_state{
	fill: #039be5;
}
#map .model-davi .state .icon_state + .label_icon_state{
	fill: #FFF;
}
#map .model-davi .state:hover .icon_state + .label_icon_state{
	
}
#map .model-davi .state .label_icon_state {
    fill: #666;
}
#map .model-davi .state:hover .label_icon_state{
	fill: #FFF;
}
#map .model-davi .state .label_state {
    fill: #666;
    display: none;
}
#map .model-davi .state .shape{	
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    -ms-transition: all .3s ease-in-out;
    -o-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out;
}
#map .model-davi .state:hover .shape {
    fill: #0288d1;
}


.parca{
	position: relative;
	float: left;
	padding: 0 0 0 15%;
}
.parca select{
	display: none;
	margin: 0 auto;
	width: 230px;
	border: 1px solid #999;
	height: 40px;
	padding: 9px;
	border-radius: 0;
}
.parca .estado{
       -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    -ms-transition: all .3s ease-in-out;
    -o-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out;
    border: 1px solid #DDD;
    position: absolute;
    margin-top: 45px;
    opacity: 0;
		border-radius: 5px;
    visibility: visible;
    padding: 10px;
    left: 0;
    right: 0;
    min-width: 230px;
    display: table;
    margin: 57px 0 0 80px;
	  box-shadow: 0 1px 80px 0 rgba(0,0,0,.3);
}
.parca .estado h3{
	margin-top: 0;
	display: block;
	background-color: #1e88e5;
	padding: 10px;
	text-transform: uppercase;
	color: #FFF;
	margin-bottom: 20px;
}
.parca .estado ul{
	padding-left: 0px;
}
.parca .estado ul li{
	line-height: 24px;
}
.parca #box_mg.estado{
	opacity: 1;
	visibility: visible;
}




@media(max-width: 1199px){
	#map{
		transform: scale(1);
	}
}
@media(max-width: 991px){
	.parceiros .two .parca .estado{
		display: block;
		margin: 45px auto;
		float: none;
		position: absolute;
		left: 0;
		right: 0;
		min-width: 160px;
		max-width: 306px;
	}
.box-mapa{
	    position: relative;
	    top: 0;
	    left: initial;
	    display: table;
	    margin: 0 auto;
	}
}
@media(max-width: 500px){
	.box-mapa{
		display: none;
	}
	.parca select{
		display: block;
	}
}
.author{
	position: absolute;
	bottom: 0;
	z-index: 2;
	width: 100%;
	padding: 30px 15px 15px;
	background: rgba(0,0,0,0);
	background: -moz-linear-gradient(top, rgba(0,0,0,0) 0%, rgba(0,0,0,0.54) 54%, rgba(0,0,0,1) 100%);
	background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(0,0,0,0)), color-stop(54%, rgba(0,0,0,0.54)), color-stop(100%, rgba(0,0,0,1)));
	background: -webkit-linear-gradient(top, rgba(0,0,0,0) 0%, rgba(0,0,0,0.54) 54%, rgba(0,0,0,1) 100%);
	background: -o-linear-gradient(top, rgba(0,0,0,0) 0%, rgba(0,0,0,0.54) 54%, rgba(0,0,0,1) 100%);
	background: -ms-linear-gradient(top, rgba(0,0,0,0) 0%, rgba(0,0,0,0.54) 54%, rgba(0,0,0,1) 100%);
	background: linear-gradient(to bottom, rgba(0,0,0,0) 0%, rgba(0,0,0,0.54) 54%, rgba(0,0,0,1) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#000000', GradientType=0 );
	a{
		font-size: 16px;
		display: table;
		margin: 0 auto;
		text-decoration: none;
		color: $white;
		font-weight: 700;
		span{
			color: $red;
		}
	}	
}
</style>

<style>
	.informacao{
		background-color: blue+;
	}

</style>
	

</head>

<body><br>


	<div class="container-fluid">
  <div class="row">
    <div class="col-md-3">
      <div class="card p-4">
        <div class="card-body d-flex justify-content-between align-items-center">
          <div id="viista">
            <span class="h4 d-block font-weight-normal mb-2"><?php echo $registro_count["total_count"]; ?></span>
            <span class="font-weight-light">Quantidade fichas</span>
          </div>

          <div class="h2 text-muted">
            <i class="icon icon-people"></i>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card p-4">
        <div class="card-body d-flex justify-content-between align-items-center">
          <div id="viista">
            <span class="h4 d-block font-weight-normal mb-2"><?php echo $registro_count["Nenhum"]; ?></span>
            <span class="font-weight-light">SEM MARCAÇÃO DE ESTADO</span>
          </div>

          <div class="h2 text-muted">
           <i><img src="https://cdn-icons-png.flaticon.com/512/47/47442.png" width="45px" height="45px"></i>
          </div>
        </div>
      </div>
    </div>
     <div class="col-md-3">
      <div class="card p-4">
        <div class="card-body d-flex justify-content-between align-items-center">
          <div id="viista">
            <span class="h4 d-block font-weight-normal mb-2"><?php echo $registro_count_hot["hot_count"]; ?></span>
            <span class="font-weight-light">Quantidades ClientesHOTS</span>
          </div>

          <div class="h2 text-muted">
            <i><img src="https://www.imagensempng.com.br/wp-content/uploads/2021/08/0-1.png" width="45px" height="45px"></i>
          </div>
        </div>
      </div>
    </div>
     <div class="col-md-3">
      <div class="card p-4">
        <div class="card-body d-flex justify-content-between align-items-center">
          <div id="viista">
            <span class="h4 d-block font-weight-normal mb-2">A: <?php echo $registro_count_porte["a_count"]; ?> AA: <?php echo $registro_count_porte["aa_count"]; ?> AAA: <?php echo $registro_count_porte["aaa_count"]; ?></span>
            <span class="font-weight-light">Porte Empresa</span>
          </div>

          <div class="h2 text-muted">
           <i><img src="https://cdn-icons-png.flaticon.com/512/5741/5741577.png" width="45px" height="45px"></i>
          </div>
        </div>
      </div>
    </div>
     <div class="col-md-3">
      <div class="card p-4">
        <div class="card-body d-flex justify-content-between align-items-center">
          <div id="viista">
            <span class="h4 d-block font-weight-normal mb-2"><?php echo $registro_count_agendamento; ?></span>
            <span class="font-weight-light">Visitas Agendadas</span>
          </div>

          <div class="h2 text-muted">
            <i><img src="https://cdn-icons-png.flaticon.com/512/990/990060.png" width="45px" height="45px"></i>
          </div>
        </div>
      </div>
    </div>
     <div class="col-md-3">
      <div class="card p-4">
        <div class="card-body d-flex justify-content-between align-items-center">
          <div id="viista">
            <span class="h4 d-block font-weight-normal mb-2"><?php echo $registro_count_agendamentodemo; ?></span>
            <span class="font-weight-light">Demos Agendadas</span>
          </div>
          <i><img src="https://cdn-icons-png.flaticon.com/512/990/990060.png" width="45px" height="45px"></i>

          <div class="h2 text-muted">
            
          </div>
        </div>
      </div>
    </div>
     
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




  

<div style="float:left; border: 1px solid #000; margin-right: 55px;" id="div1">

		<table border="1">
    <tr>
        <td>Estado</td>
        <td>Quantidade</td>
    </tr>
    <tr>
        <td>AC</td>
        <td><?php echo $registro_count["ac_count"]; ?></td>

    </tr>
    <tr>
        <td>AL</td>
        <td><?php echo $registro_count["al_count"]; ?></td>

    </tr>
    <tr>
        <td>AP</td>
        <td><?php echo $registro_count["ap_count"]; ?></td>

    </tr>
    <tr>
        <td>AM</td>
        <td><?php echo $registro_count["am_count"]; ?></td>

    </tr>
    <tr>
        <td>BA</td>
        <td><?php echo $registro_count["ba_count"]; ?></td>

    </tr>
    <tr>
        <td>CE</td>
        <td><?php echo $registro_count["ce_count"]; ?></td>

    </tr>
    <tr>
        <td>DF</td>
        <td><?php echo $registro_count["df_count"]; ?></td>

    </tr>
    <tr>
        <td>ES</td>
        <td><?php echo $registro_count["es_count"]; ?></td>

    </tr>
    <tr>
        <td>GO</td>
        <td><?php echo $registro_count["go_count"]; ?></td>

    </tr>
    <tr>
        <td>MA</td>
        <td><?php echo $registro_count["ma_count"]; ?></td>

    </tr>
    <tr>
        <td>MT</td>
        <td><?php echo $registro_count["mt_count"]; ?></td>

    </tr>
    <tr>
        <td>MS</td>
        <td><?php echo $registro_count["ms_count"]; ?></td>

    </tr>
    <tr>
        <td>MG</td>
        <td><?php echo $registro_count["mg_count"]; ?></td>

    </tr>
    <tr>
        <td>PA</td>
        <td><?php echo $registro_count["pa_count"]; ?></td>

    </tr>
    <tr>
        <td>PB</td>
        <td><?php echo $registro_count["pb_count"]; ?></td>

    </tr>
    <tr>
        <td>PR</td>
        <td><?php echo $registro_count["pr_count"]; ?></td>

    </tr>
    <tr>
        <td>PE</td>
        <td><?php echo $registro_count["pe_count"]; ?></td>

    </tr>
    <tr>
        <td>PI</td>
        <td><?php echo $registro_count["pi_count"]; ?></td>

    </tr>
    <tr>
        <td>RJ</td>
        <td><?php echo $registro_count["rj_count"]; ?></td>

    </tr>
    <tr>
        <td>RN</td>
        <td><?php echo $registro_count["rn_count"]; ?></td>

    </tr>
    <tr>
        <td>RS</td>
        <td><?php echo $registro_count["rs_count"]; ?></td>

    </tr>
    <tr>
        <td>RO</td>
        <td><?php echo $registro_count["ro_count"]; ?></td>

    </tr>
    <tr>
        <td>RR</td>
        <td><?php echo $registro_count["rr_count"]; ?></td>

    </tr>
    <tr>
        <td>SC</td>
        <td><?php echo $registro_count["sc_count"]; ?></td>

    </tr>
    <tr>
        <td>SP</td>
        <td><?php echo $registro_count["sp_count"]; ?></td>

    </tr>
    <tr>
        <td>SE</td>
        <td><?php echo $registro_count["se_count"]; ?></td>

    </tr>
    <tr>
        <td>TO</td>
        <td><?php echo $registro_count["to_count"]; ?></td>

    </tr>


    
</table></div>
<div style="border: 1px solid #000; float:left;">
<h4>Países LATAM</h4>
	<table  border="1">
    <tr>
        <td>Países (LATAM)</td>
        <td>Quantidade</td>
    </tr>
    <tr>
        <td>Argentina</td>
        <td><?php echo $registro_count["argentina_count"]; ?></td>

    </tr>
    <tr>
        <td>Bolívia</td>
        <td><?php echo $registro_count["bolivia_count"]; ?></td>

    </tr>
    <tr>
        <td>Chile</td>
        <td><?php echo $registro_count["chile_count"]; ?></td>

    </tr>
    <tr>
        <td>Colômbia</td>
        <td><?php echo $registro_count["colombia_count"]; ?></td>

    </tr>
    <tr>
        <td>Costa Rica</td>
        <td><?php echo $registro_count["costarica_count"]; ?></td>

    </tr>
    <tr>
        <td>Cuba</td>
        <td><?php echo $registro_count["cuba_count"]; ?></td>

    </tr>
    <tr>
        <td>Equador</td>
        <td><?php echo $registro_count["equador_count"]; ?></td>

    </tr>
    <tr>
        <td>El Salvador</td>
        <td><?php echo $registro_count["elsavador_count"]; ?></td>

    </tr>
    <tr>
        <td>Guatemala</td>
        <td><?php echo $registro_count["guatemala_count"]; ?></td>

    </tr>
    <tr>
        <td>Haiti</td>
        <td><?php echo $registro_count["haiti_count"]; ?></td>

    </tr>
    <tr>
        <td>Honduras</td>
        <td><?php echo $registro_count["honduras_count"]; ?></td>

    </tr>
    <tr>
        <td>México</td>
        <td><?php echo $registro_count["mexico_count"]; ?></td>

    </tr>
    <tr>
        <td>Nicarágua</td>
        <td><?php echo $registro_count["nicaragua_count"]; ?></td>

    </tr>
    <tr>
        <td>Panamá</td>
        <td><?php echo $registro_count["panama_count"]; ?></td>

    </tr>
    <tr>
        <td>Paraguai</td>
        <td><?php echo $registro_count["paraguai_count"]; ?></td>

    </tr>
    <tr>
        <td>Peru</td>
        <td><?php echo $registro_count["peru_count"]; ?></td>

    </tr>
    <tr>
        <td>República Dominicana</td>
        <td><?php echo $registro_count["republicadominicana_count"]; ?></td>

    </tr>
    <tr>
        <td>Uruguai</td>
        <td><?php echo $registro_count["uruguai_count"]; ?></td>

    </tr>
    <tr>
        <td>Venezuela</td>
        <td><?php echo $registro_count["venezuela_count"]; ?></td>

    </tr>
    
    </table>
		</div></div>

		<div class="box-mapa">
			<svg id="map" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="460" height="465" style="display: inline;">
				<g class="model-davi">

					<desc>Brasil</desc>

					<a href="#" id="state_ba" class="state" data-state="ba" xlink:href="">
						<desc id="description_ba">Bahia</desc>
						<path id="shape_ba" class="shape" d="m 396.7483,280.14568 c 0.71501,-2.34867 2.32435,-8.20598 2.77544,-10.88304 1.06631,-4.36755 3.22976,-8.56454 2.89307,-13.15018 0.24433,-9.74093 0.23297,-19.53715 1.88542,-29.15165 -1.15228,-2.73068 4.27262,-3.15317 1.98097,-5.4068 -1.73917,-0.58345 0.40641,-3.0821 1.62874,-3.43559 1.53619,-0.44426 2.9396,0.42062 4.0554,2.55291 1.73062,0.80718 2.10721,-1.34658 3.44153,-2.3963 1.76038,-3.59872 4.5629,-7.82465 6.35375,-9.78217 -2.85539,-2.53678 -4.39697,-3.48364 -5.47699,-5.95478 -1.15551,-2.64388 -2.51321,-6.38726 -0.69554,-8.62811 0.8232,-1.01486 3.09325,0.53899 3.88851,-0.49791 1.1238,-1.46527 -0.15589,-3.75867 -0.74511,-5.48947 -1.13553,-3.33554 -2.18056,-8.25892 -3.93647,-11.01495 -1.1871,-1.86324 -2.8669,-3.41295 -4.68577,-4.65245 -1.85469,-1.26391 -3.96204,-2.60677 -6.16293,-2.71187 -2.38216,-0.11376 -4.32187,2.50569 -6.51221,3.70588 -2.22637,1.21993 -3.59855,3.30495 -6.73716,3.55179 -2.5361,0.19943 -4.2372,-1.37704 -4.99484,-3.97769 -1.27754,-2.23433 -2.44172,-3.74646 -4.4687,-3.83434 -1.22531,-0.0531 -2.13234,1.21325 -3.13497,1.91584 -1.84821,1.29512 -3.35747,3.05441 -5.28854,4.22383 -2.25784,1.3673 -4.62557,2.88087 -7.24986,3.19641 -4.15038,0.49906 -7.72576,-3.98224 -11.99836,-2.01778 -1.36462,0.62742 -0.32681,2.83249 -0.58534,4.30555 -0.33094,1.88625 -0.65365,3.87203 -1.6678,5.49956 -1.355,2.17451 -3.19835,4.27941 -5.45026,5.51555 -2.29861,1.26176 -5.1901,2.01727 -7.79672,1.71113 -2.61965,-0.30767 -5.09356,-1.52312 -7.08001,-3.18076 -1.74634,-1.45727 -2.82984,-5.60291 -3.86531,-5.62313 -1.87079,-0.0365 -3.74146,7.10626 -5.89576,11.98985 -0.63247,1.43375 3.11949,4.1232 3.31557,6.66498 0.12788,1.65771 -1.66882,3.00996 -1.75071,4.67058 -0.10329,2.09443 1.48709,2.87468 1.61775,6.07936 0.0931,2.28225 -0.95868,4.37663 -1.04047,6.60343 -0.12668,3.44858 0.0489,6.69098 0.85673,10.31719 0.72509,3.2546 3.17304,5.19269 -0.24445,10.0002 5.13924,1.05891 11.15958,-5.0548 16.30713,-7.39931 2.60854,-0.70728 4.8401,-1.06363 6.82943,0.0373 1.54993,0.85775 1.35847,3.49706 2.83011,4.48183 2.27406,1.5217 5.47244,0.63594 8.09762,1.41941 5.655,1.68766 6.77439,7.11151 16.25437,6.99917 2.75517,-0.0327 3.16261,4.36921 5.5539,5.73076 3.11222,2.36598 11.11558,0.63149 12.80505,4.85243 2.29565,5.73537 -7.71302,12.19482 -7.12466,15.98706 0.43899,2.82945 3.71881,5.52173 6.1833,7.75474 0.97504,0.88346 2.13673,2.26039 3.46556,2.05997 0.51461,-0.0776 0.78079,-0.71097 1.04711,-1.15809 0.26778,-0.44957 0.52248,-1.48034 0.52248,-1.48034 z"></path>
						<text id="label_icon_state_ba" class="label_icon_state" x="365" y="216">BA</text>
						<text id="label_state_ba" class="label_state" x="419" y="15">Bahia</text>
					</a>

					<a href="#" id="state_se" class="state" data-state="se" xlink:href="">
						<desc id="description_se">Sergipe</desc>
						<path id="shape_se" class="shape" d="m 426.78167,203.57812 c 1.64447,-3.64352 3.42828,-4.24703 5.65355,-5.03924 0.7999,-0.47026 1.75861,-1.31119 2.62132,-2.07247 1.41405,-0.97145 2.25072,-1.02012 3.68672,-1.58986 -4.04896,-2.86239 -7.79503,-5.819 -11.61154,-8.83301 -1.44855,-1.14396 -2.89164,-2.2969 -4.28272,-3.51008 -1.8488,-1.61237 -4.21709,-3.83037 -5.39571,-5.00464 -0.68913,0.29035 0.62068,3.13542 1.40885,5.58396 0.91366,2.83838 1.4495,3.92905 2.02235,5.94236 0.72816,2.55913 0.69119,4.41636 0.47121,5.49087 -0.14526,0.70943 -0.74247,1.41382 -1.42358,1.66008 -1.08126,0.39093 -2.12116,-1.61768 -3.33247,-0.28322 -0.98648,1.08677 -0.0189,3.2511 0.65831,4.66967 1.22373,2.5632 2.30258,5.60329 5.81317,6.23013 0.68452,0.11035 1.33713,-0.37081 2.00568,-0.5562 0.74465,-0.75158 1.28679,-1.71089 1.70483,-2.68835 z"></path>
						<circle id="icon_se" class="icon_state" r="12" cx="425" cy="201"></circle>
						<text id="label_icon_state_se" class="label_icon_state" x="418" y="205">SE</text>
						<text id="label_state_se" class="label_state" x="405" y="15">Sergipe</text>
					</a>

					<a href="#" id="state_pe" class="state" data-state="pe" xlink:href="">
						<desc id="description_pe">Pernambuco</desc>
						<path id="shape_pe" class="shape" d="m 441.9826,173.10391 c 2.36676,-0.70977 4.58715,-0.13527 7.22191,0.13138 1.82638,0.18483 3.44025,0.87342 4.41808,0.23325 1.00624,-0.65877 1.63869,-4.51633 1.41834,-6.31378 0.0595,-3.34539 0.21633,-6.20496 0.15389,-9.22199 -1.73161,0 -3.46321,0 -5.19482,0 -0.54521,0.77482 -1.3153,1.48135 -2.16966,1.94193 -1.10574,0.5961 -2.3991,0.78957 -3.64305,0.96443 -1.73074,0.24329 -3.59216,-0.46872 -5.24218,0.10758 -2.19267,0.76583 -1.94183,2.81779 -5.54043,4.22519 -2.04335,-0.2539 -2.45818,-0.42452 -3.34444,-1.21233 -0.956,-0.84979 -1.55304,-1.59561 -1.72159,-3.42942 0.2967,-1.83175 1.09129,-3.04116 2.01034,-4.62397 -0.37066,-2.15268 -1.6376,-2.3687 -2.34872,-1.43263 -3.06771,3.52234 -5.81468,4.79938 -9.80446,5.49254 -3.67278,0.6381 -5.45493,-3.31495 -7.97288,-2.75408 -7.44533,1.65844 -6.67752,-2.83728 -10.27057,-3.86914 -3.15212,-0.77802 -5.03805,1.98704 -8.53566,1.1163 -2.65553,-0.6611 0.0134,5.24326 -1.27421,7.49682 -0.84237,1.47427 -1.81076,1.77483 -4.15158,2.95161 -1.29847,0.65276 -3.05831,0.95663 -3.13529,2.23844 -0.091,1.51555 2.29776,1.99001 3.36363,3.07127 1.273,1.29138 1.98102,3.53737 3.61016,4.06947 4.89624,1.5992 8.71339,-6.05409 13.73053,-6.17679 2.60291,-0.0637 5.00739,1.56698 7.27159,2.85251 2.13919,1.21455 4.21629,3.73116 5.83486,4.51839 1.78404,-0.50316 4.35199,-2.38062 6.52333,-2.43443 4.34574,-0.10769 7.64389,4.75741 12.03796,4.32411 2.42901,-0.92385 4.30578,-3.53218 6.75492,-4.26666 z"></path>
						<text id="label_icon_state_pe" class="label_icon_state" x="412" y="170">PE</text>
						<text id="label_state_pe" class="label_state" x="372" y="15">Pernambuco</text>
					</a>

					<a href="#" id="state_al" class="state" data-state="al" xlink:href="">
						<desc id="description_al">Alagoas</desc>
						<path id="shape_al" class="shape" d="m 453.46387,177.17818 c 0.29049,-0.78832 0.95205,-1.88642 -1.08674,-2.2741 -1.84328,-0.19775 -7.57404,-1.02914 -10.51605,0.28446 -1.68548,0.75255 -2.34466,2.27573 -4.10208,3.09228 -4.41746,3.01846 -8.11775,-1.68491 -12.32575,-3.00427 -1.23213,-0.35909 -2.95429,-0.58741 -4.0963,0 -1.51768,0.78064 -1.81516,0.71019 -2.84926,1.57671 5.65758,4.10096 10.23737,8.17407 15.37059,12.24282 1.89201,1.49966 3.79987,3.17707 5.6867,4.48548 1.39908,-1.39976 3.19423,-3.10758 4.59331,-4.50733 3.16784,-3.85441 7.67462,-7.41578 9.32558,-11.89605 z"></path>
						<circle id="icon_al" class="icon_state" r="12" cx="445" cy="182"></circle>
						<text id="label_icon_state_al" class="label_icon_state" x="439" y="186">AL</text>
						<text id="label_state_al" class="label_state" x="403" y="15">Alagoas</text>
					</a>

					<a href="#" id="state_am" class="state" data-state="am" xlink:href="">
						<desc id="description_am">Amazonas</desc>
						<path id="shape_am" class="shape" d="m 85.966736,177.23229 c 1.199049,-0.9651 2.097067,-2.7261 3.353172,-3.17466 3.305207,-0.0661 7.758246,1.47554 11.389492,0.36112 3.70782,-1.13792 8.53877,-5.42599 9.4207,-6.82904 4.38755,-6.98014 5.02799,-8.65162 9.23711,-10.85562 2.40622,-1.25995 4.63756,-1.09996 8.10852,-0.80503 2.67991,0.22772 3.89841,4.02839 5.84072,5.56689 1.59248,1.2614 3.45147,2.25448 5.40357,2.81879 8.22025,2.37629 17.12739,2.07423 25.58727,2.10456 5.10856,-0.019 13.74027,-0.32558 15.28309,-1.3167 1.60111,-1.34103 3.56726,-16.80884 3.74129,-18.05051 -0.48584,-0.97818 -2.5308,-4.04833 -3.30135,-6.86727 -0.707,-2.58646 2.24806,-8.32967 3.57579,-10.88379 1.29514,-2.49141 4.30522,-8.71573 6.95306,-13.12034 1.62338,-3.54696 4.84872,-9.53017 7.39323,-15.2024 2.68904,-5.994415 5.46325,-9.236698 3.99576,-13.456964 -1.07366,-3.08766 -4.10398,-3.91473 -8.20282,-5.039217 -3.77151,-1.034686 -8.3815,-1.057561 -11.64202,-3.452932 -3.26066,-2.395478 -5.2466,-5.653555 -7.1127,-9.895583 -1.46623,-3.333053 -2.77581,-7.900294 -2.88061,-9.684285 -2.56762,-0.30482 -5.85484,-1.4376 -8.69084,0.01986 -3.88726,1.997714 -1.08178,7.288883 -5.92069,10.137036 -4.75349,2.797869 -6.74739,-1.219877 -9.87455,-0.190801 -3.12391,1.028009 -3.49067,5.763404 -7.82342,6.011231 -3.8635,0.220987 -6.34555,-2.519384 -8.06909,-4.99528 -5.45339,-7.833864 -1.11407,-18.971611 -5.45746,-27.469 -1.17847,-2.305564 -2.93591,-5.403241 -5.47072,-5.948141 -1.58797,-0.341362 -1.56698,0.39064 -3.79638,1.361051 l -4.03007,1.764383 0,1.411506 0,1.411507 -1.54343,1.323287 c -0.85747,0.705754 -3.42985,2.293698 -5.83074,3.352328 l -4.28731,2.029041 -3.172614,3.352328 c -3.515594,3.705205 -4.115818,3.969862 -4.115818,2.11726 0,-0.705754 -0.342984,-1.499726 -0.771715,-1.764383 l -0.771716,-0.529315 -3.344102,1.235068 -3.344102,1.235068 -3.344102,-2.558356 -3.344101,-2.558355 -1.543432,0 -1.543431,0 -0.514478,-3.616986 -0.514477,-3.616985 -1.543431,-1.940822 -1.543432,-1.940821 -2.572386,2.558356 -2.572386,2.558355 -1.114701,-0.970411 -1.1147,-0.97041 -1.629178,1.235068 -1.629178,1.235068 -7.974396,0 -7.974397,0 0,1.676164 c 0,0.970411 -0.257238,2.293698 -0.514477,3.087671 l -0.514477,1.411506 3.344102,0 c 3.432227,-0.287339 5.765931,1.085744 5.40201,4.499177 -0.449673,3.816457 -2.555383,2.831759 -4.801787,1.676164 -1.772088,0.705753 -3.544176,1.411507 -5.316264,2.11726 l 0,3.616985 0,3.616986 3.001117,2.999451 3.001117,2.999452 c -1.279263,1.388133 -0.381312,2.182174 0.428731,3.793424 l 1.286193,2.558355 c 1.796303,10.638115 -1.239304,30.646811 -6.430965,39.963281 -2.936421,-0.11653 -5.096036,-0.97162 -8.060143,-1.85261 -3.322682,3.82376 -8.668819,2.2321 -12.144213,3.53164 -1.750321,0.70001 -4.49055,3.43768 -4.49055,3.43768 -3.603215,1.45275 -5.181181,-1.38313 -6.919407,0.13356 -2.410594,2.10337 -1.48372,6.4061 -1.48372,9.48233 0.156812,3.08526 -1.019949,4.69688 -2.4008937,7.23397 0.5915266,5.53869 -3.8355555,6.47183 -5.2853015,11.76766 5.6456029,4.333 10.4135992,4.97732 16.6676682,5.99276 18.08602,2.93656 25.075134,6.33284 35.495774,10.50958 8.680602,3.47931 21.764427,9.54469 25.583782,11.51503 1.926577,-0.85389 3.289365,-2.05004 4.795403,-3.26223 z"></path>
						<text id="label_icon_state_am" class="label_icon_state" x="95" y="112">AM</text>
						<text id="label_state_am" class="label_state" x="388" y="15">Amazonas</text>
					</a>

					<a href="#" id="state_pa" class="state" data-state="pa" xlink:href="">
						<desc id="description_pa">Pará</desc>
						<path id="shape_pa" class="shape" d="m 286.69466,158.05116 c 0.96048,-3.183 -0.736,-6.80596 0.28828,-9.9701 1.28047,-3.95552 4.11144,-7.58331 7.01624,-10.32348 2.40459,-2.26831 4.90523,-4.91945 5.07399,-8.09722 0.14854,-2.79687 -4.30544,-7.06671 -3.68601,-7.5567 3.0455,-2.40908 9.4202,-5.94995 13.15555,-9.99148 3.6103,-3.90623 6.20631,-8.68389 8.61482,-13.421367 2.89303,-5.6905 5.56767,-12.503043 6.92342,-17.850674 0.74204,-2.926881 1.52128,-3.891378 -2.86329,-5.904282 -2.56986,-1.179791 -5.94015,-3.082689 -12.36549,-4.228621 -13.51053,-2.391387 -6.41979,-5.497379 -9.99177,-7.729821 -5.74644,-3.59145 -9.09921,-5.826368 -18.23217,-9.005728 -2.15211,0.865559 -4.15606,0.358453 -6.03691,0.10815 -3.82363,3.446277 -11.39704,11.34998 -13.19111,14.404201 -7.6488,13.021314 -7.1472,7.425659 -10.77217,3.294924 -1.63972,-1.868495 -2.64369,-3.304413 -3.46731,-6.105445 -1.35808,-3.229745 -3.96488,-1.725413 -4.8106,-5.033126 0.13801,-9.621923 -2.74945,-10.645502 -6.60589,-16.650464 -2.19934,-3.424662 -6.90367,-4.917027 -11.3286,-4.617053 -3.36082,-0.06275 -1.80358,-4.103648 -2.46238,-6.352032 -0.74638,-2.389069 -4.16182,-1.344016 -6.05663,-0.65209 -2.26763,1.13395 -4.59032,0.440952 -6.90881,-0.111973 -2.52079,1.958231 2.43659,5.045631 -0.0948,6.638611 -1.86774,1.973384 -4.95597,0.09028 -7.3702,0.336849 -3.08528,0.01217 -6.35577,-1.289821 -9.31156,-0.359023 -2.00233,1.788998 -15.40637,8.098012 -17.86013,9.078435 -0.33697,4.890314 -0.40551,8.121748 0.16806,12.585907 0.82326,6.407592 3.72736,12.519776 7.90611,16.334595 3.49247,3.18829 9.91736,3.40027 13.42605,4.633961 2.27241,0.799001 6.74414,0.965241 8.4067,5.950445 1.54257,4.625454 -4.48071,12.622621 -7.04934,18.861651 -2.34759,5.70215 -5.6098,11.39779 -8.60112,17.01565 -2.99132,5.61786 -5.58861,9.19749 -6.85264,14.58848 -0.61038,2.60321 1.78879,5.63443 3.57528,8.33369 2.21297,3.34363 4.18393,7.93805 4.17874,12.95668 0.15312,4.51962 1.16083,5.20063 3.27655,7.36097 2.36877,2.41872 3.98568,4.62226 6.88696,5.64687 4.65617,1.64437 13.45668,1.33188 19.78235,1.62482 6.32568,0.29293 12.65669,0.5925 18.94185,0.89582 6.28515,0.30332 12.52444,0.6104 18.66666,0.91838 6.14221,0.30797 12.18736,0.61684 18.08421,0.92373 1.73292,-5.91558 9.44448,-11.56407 11.54711,-18.53214 z"></path>
						<text id="label_icon_state_pa" class="label_icon_state" x="241" y="111">PA</text>
						<text id="label_state_pa" class="label_state" x="426" y="15">Pará</text>
					</a>

					<a href="#" id="state_mt" class="state" data-state="mt" xlink:href="">
						<desc id="description_mt">Mato Grosso</desc>
						<path id="shape_mt" class="shape" d="m 209.85936,266.5957 c 3.49378,0.53305 6.5571,3.73946 10.07243,3.31091 6.27014,0.34151 15.63099,-2.14796 17.20752,-1.17707 1.00296,1.73061 0.46134,5.01326 2.5549,5.6948 2.67093,1.55937 1.18782,-3.26333 1.36915,-4.69435 0.62851,-2.4079 1.7785,-6.45573 3.31388,-9.40312 1.39009,-2.66848 3.06399,-5.27766 5.25697,-7.33775 1.90841,-1.79277 3.60883,-3.00448 6.6587,-4.16724 1.01987,-0.38883 0.42752,-7.58699 6.4794,-9.27216 2.89832,-1.34081 2.74318,-3.15542 3.32844,-5.27821 1.0941,-6.03339 3.35857,-11.71813 5.93524,-17.25236 -0.65351,-2.89469 -1.82476,-5.58498 -2.02558,-8.47737 -0.43538,-6.27074 -0.17074,-12.50962 0.8746,-18.70793 0.64035,-3.79709 2.57837,-7.65982 3.69847,-11.28307 -6.11289,-0.51248 -13.68189,-1.00707 -21.63269,-1.4603 -7.9508,-0.45323 -16.28341,-0.86511 -23.92352,-1.21219 -7.64012,-0.34708 -14.23942,-0.28105 -19.42024,-0.47507 -5.18082,-0.19403 -7.06415,-0.28388 -10.73518,-1.33881 -1.82469,-0.52436 -3.06537,-1.84622 -4.65445,-3.2827 -1.99491,-1.80333 -3.67545,-3.17556 -5.03567,-5.49536 -1.54465,-2.63434 -1.41355,-5.12141 -1.90946,-9.16175 -0.34196,-2.78616 -1.0169,-6.22955 -2.95396,-7.90574 -0.39583,2.2169 -0.43955,6.30315 -1.03312,9.08226 -0.68012,3.18435 -1.42682,8.58964 -2.80249,9.65226 -1.38211,1.28578 -10.76597,1.01504 -16.17312,1.2379 -6.07136,0.25023 -16.31167,-0.74912 -17.89582,-0.78606 0.26407,3.32157 0.33965,6.69406 0.39028,10.31591 0.0394,2.8152 -1.61306,5.73631 -1.02919,8.49056 0.44048,2.07788 1.79876,3.4402 3.479,4.73957 2.85131,2.20499 7.73313,0.63733 10.32912,3.13788 3.95226,3.80695 5.40273,10.74477 4.90221,16.20945 -1.15554,11.14188 -12.01168,12.79376 -5.72733,18.57716 3.82573,4.9554 -0.1759,11.29489 0.52191,15.75581 0.43397,2.30386 4.3241,3.27266 3.60134,6.04113 0.24653,1.92397 -0.49482,4.81115 0.3598,6.14221 6.85409,0.17341 13.70818,0.34681 20.56227,0.52021 0.77987,2.999 -1.69713,5.65045 -0.81475,8.27948 1.74932,4.54268 6.42763,4.32916 7.99561,8.63303 0.63117,3.38778 1.95337,2.67162 3.3504,0.0821 2.38972,-5.37258 6.53404,-6.68843 9.23941,-7.64115 2.54003,-0.80959 4.21409,-0.40893 6.28552,-0.0929 z"></path>
						<text id="label_icon_state_mt" class="label_icon_state" x="207" y="216">MT</text>
						<text id="label_state_mt" class="label_state" x="369" y="15">Mato Grosso</text>
					</a>

					<a href="#" id="state_ro" class="state" data-state="ro" xlink:href="">
						<desc id="description_ro">Rondônia</desc>
						<path id="shape_ro" class="shape" d="m 155.12778,222.33146 c 4.23103,-2.7517 7.34389,-8.02424 7.63402,-13.07604 0.29633,-5.15959 -2.02832,-12.20437 -5.68637,-14.38115 -2.8324,-1.61668 -7.34308,-1.01836 -9.58999,-3.12177 -1.82436,-1.70785 -3.62517,-4.49375 -3.64668,-6.59977 -0.028,-2.74438 1.43753,-5.52897 1.34644,-8.31932 -0.11157,-3.41768 -0.38776,-5.91638 -0.50578,-9.68933 -3.3538,-0.31377 -8.19759,-1.06113 -11.52574,-3.1709 -2.27715,-1.44353 -3.53913,-5.10488 -5.92265,-6.13152 -6.25052,-0.68917 -6.98581,0.97191 -9.77279,2.91908 -3.44743,2.40859 -4.66913,8.09839 -7.54863,10.10904 -3.06939,2.14325 -6.17712,4.78435 -9.86273,5.6929 -3.275425,0.80745 -6.354872,-0.28813 -10.112304,-0.40576 -1.380099,1.61046 -2.935304,2.76337 -4.591479,4.08556 12.932629,1.0805 15.031903,1.35296 16.469333,10.49751 -0.0551,3.26214 -1.08312,6.76866 0.13836,9.78297 3.11397,5.08396 7.74471,9.89173 12.81885,11.96593 4.13273,1.60416 9.12335,0.0237 13.1374,1.88333 1.82952,0.8476 2.73455,3.08814 4.5264,4.01272 1.77101,0.91383 4.0112,0.67214 5.8247,1.34788 1.18876,1.36 1.88272,3.42547 3.56627,4.08 4.15863,1.61678 9.56296,0.95125 13.30337,-1.48136 z"></path>
						<text id="label_icon_state_ro" class="label_icon_state" x="121" y="198">RO</text>
						<text id="label_state_ro" class="label_state" x="392" y="15">Rondônia</text>
					</a>

					<a href="#" id="state_ac" class="state" data-state="ac" xlink:href="">
						<desc id="description_ac">Acre</desc>
						<path id="shape_ac" class="shape" d="m 51.426219,196.79147 c 2.043929,-0.0388 4.14835,-0.49209 6.153797,-0.26733 1.482067,0.55578 2.964135,1.11155 4.446203,1.66733 5.072314,-3.11365 10.501235,-5.75058 14.855078,-9.89121 1.690821,-1.60802 1.97387,-3.30296 3.354026,-6.13945 -9.693274,-4.60021 -13.216466,-6.23665 -19.949124,-9.07072 -7.886313,-3.31969 -15.728343,-6.85138 -23.931454,-9.28515 -8.485762,-2.51763 -22.593742,-4.68461 -25.98872,-5.45031 -2.8288599,-0.63802 -7.6460086,-4.07413 -7.6460086,-4.07413 -0.3975961,1.44846 -1.0037821,2.77385 -1.88621717,4.85922 1.50689257,2.19103 2.35347917,3.56816 2.78304527,5.95956 2.0106518,4.76245 6.0400075,8.14457 9.1093745,12.19219 -0.333333,1.13333 -0.666667,2.26667 -1,3.4 3.015066,-0.21103 5.981946,0.51921 8.7,1.8 0.666667,1.46667 1.333333,2.93333 2,4.4 3.066667,0 6.133333,0 9.2,0 2.2,-2.33333 3.346435,-3.64775 5.122246,-4.90651 1.775811,-1.25876 3.316434,-0.32138 3.354608,0.8299 0.158245,4.77248 0.123146,9.11744 0.123146,14.47661 0.680577,1.18446 1.579142,1.6591 2.840434,0.95261 2.794245,-0.71452 5.693869,-0.91583 8.559566,-1.15261 l -0.104798,-0.1572 z"></path>
						<text id="label_icon_state_ac" class="label_icon_state" x="48" y="186">AC</text>
						<text id="label_state_ac" class="label_state" x="426" y="15">Acre</text>
					</a>

					<a href="#" id="state_ap" class="state" data-state="ap" xlink:href="">
						<desc id="description_ap">Amapá</desc>
						<path id="shape_ap" class="shape" d="m 260.769,66.023156 c 3.8349,-4.788158 8.79324,-8.576249 12.7991,-13.224205 1.75034,-2.886256 3.43676,-4.132595 5.93865,-4.863527 1.36048,-1.366469 0.7359,-3.785632 1.10386,-5.678447 -0.76366,-0.838347 -1.35457,-2.029861 -2.22664,-2.646575 -0.99259,-0.08879 -2.12712,0.169001 -3.03839,-0.118352 -1.30495,-1.404354 -2.86845,-2.614797 -4.1339,-4.011836 -2.15241,-6.618271 -4.5275,-13.195742 -5.71384,-20.074944 -1.99173,-9.307097 -2.15055,-5.084229 -4.23803,-2.694703 -1.89331,2.261054 -3.97742,4.394485 -5.75197,6.734975 -2.17919,4.369109 -4.35839,8.738218 -6.53758,13.107327 -1.71492,1.11744 -3.42985,2.234883 -5.14477,3.352328 -1.4828,-0.470312 -2.96182,-1.251763 -4.44692,-1.533208 -4.79877,2.860083 -3.39481,-3.099681 -4.61322,-1.645561 -0.83557,0.646548 -3.16443,2.417752 -4.33214,2.171548 -2.60394,0.20477 -3.7511,-0.08068 -6.2436,-0.757161 -3.3e-4,1.040982 -0.36041,4.077489 1.15977,3.597984 1.14715,0.14345 2.47104,-0.492629 3.62131,0.0082 3.61471,1.043297 7.56377,3.356319 10.11497,7.322839 4.58458,7.718114 4.36102,8.17007 5.13813,13.923417 0.58204,4.309185 2.91437,2.859459 4.04981,4.539599 1.2544,1.856164 1.73521,3.698395 2.9847,6.021742 1.82746,3.202236 1.66695,4.37289 3.5547,4.410115 1.50738,0.02972 2.06302,-2.206341 2.97507,-3.406861 1.09428,-1.440386 1.85013,-3.122803 2.98093,-4.534694 z"></path>
						<text id="label_icon_state_ap" class="label_icon_state" x="249" y="45">AP</text>
						<text id="label_state_ap" class="label_state" x="412" y="15">Amapá</text>
					</a>

					<a href="#" id="state_rj" class="state" data-state="rj" xlink:href="">
						<desc id="description_rj">Rio de Janeiro</desc>
						<path id="shape_rj" class="shape" d="m 363.1,338.2328 c -0.0989,-0.51798 -0.82693,-1.16771 -0.15989,-1.52532 1.41996,-1.35823 2.83993,-2.71645 4.25989,-4.07468 2.2642,-0.71602 4.79084,-1.08547 6.54236,-2.83667 0.8029,-1.10993 0.22161,-2.9683 0.65536,-4.37163 0.25563,-1.46596 1.89871,-3.55233 1.11345,-4.76511 -2.65501,-0.33392 -4.3289,-0.72891 -6.46223,-1.06224 -0.73333,-1.4 -1.84008,-3.79576 -2.57341,-5.19576 -1.13938,1.07281 -1.89546,3.86104 -2.64428,5.22203 -0.99781,2.1121 -1.21129,4.72686 -2.83125,6.40938 -2.10933,2.1908 -5.20042,3.4986 -8.2,4 -2.08387,0.34833 -4.18551,-0.95315 -6.29077,-0.77508 -3.67506,0.31085 -6.64821,2.0917 -10.59824,3.17834 -0.26524,0.21021 -4.06632,1.16243 -3.04305,0.97227 2.8224,1.38251 3.92047,1.68102 4.27851,3.48532 0.43577,2.196 -2.5134,4.51542 -3.19301,5.90894 0.62984,0.95526 3.90098,-2.15861 4.69564,-2.5089 0.50603,-0.28559 3.20451,-1.38137 3.6768,-0.77517 1.60225,1.25939 4.33171,0.16742 6.27411,0.11428 0.53333,-1 0.53078,-2.62421 1.6,-3 0.95799,-0.33669 1.86667,0.8 2.8,1.2 -0.33333,0.53333 -0.66667,1.06667 -1,1.6 3.56206,0.19651 7.13314,0.52715 10.7,0.3 0.79269,-0.0892 0.72066,-0.60731 0.4717,-1.21318 -0.0239,-0.0956 -0.0478,-0.19121 -0.0717,-0.28682 z"></path>
						<circle id="icon_rj" class="icon_state" r="12" cx="364" cy="339"></circle>
						<text id="label_icon_state_rj" class="label_icon_state" x="357" y="343">RJ</text>
						<text id="label_state_rj" class="label_state" x="358" y="15">Rio de Janeiro</text>
					</a>

					<a href="#" id="state_rs" class="state" data-state="rs" xlink:href="">
						<desc id="description_rs">Rio Grande do Sul</desc>
						<path id="shape_rs" class="shape" d="m 242.11056,462.62126 c 1.35817,-1.18772 3.20101,-1.99871 3.63103,-3.90789 1.77754,-4.00665 3.51215,-8.04062 5.62956,-11.88333 -2.92146,-0.1739 -1.3621,-2.74001 -0.68597,-4.5874 0.12352,-3.09896 2.52997,-4.85973 5.00078,-6.24816 2.31112,-0.58398 0.39097,-3.46969 2.37742,-4.52836 1.90599,-2.6023 3.34604,-5.49998 4.96926,-8.27882 1.49243,0.016 5.95991,-0.25711 4.43823,1.79461 -2.02741,2.61551 -2.75274,5.99927 -5.04318,8.44202 -1.7924,2.33901 -3.33721,4.93398 -5.94576,6.48142 -1.70112,0.76129 -5.17623,5.74248 -1.38973,4.03472 1.82656,-0.25826 2.63073,-2.24722 3.97667,-3.31906 2.24404,-2.46528 4.74731,-4.74284 6.83015,-7.32486 3.20057,-5.89487 6.73649,-12.45041 10.29854,-18.12453 -1.59742,-1.66563 -2.40411,-3.73135 -3.97752,-5.9823 2.42463,-2.5904 4.50502,-3.73714 3.48904,-5.32886 -1.10179,-1.72618 -2.43138,-0.49631 -6.4418,0.3727 -6.3042,-8.33932 -10.66585,-11.53132 -18.65439,-14.43941 -4.74964,-1.72902 -12.46981,-2.11555 -16.60352,-2.16628 -5.39303,2.77958 -8.56156,5.02766 -13.0352,9.24847 -9.9071,6.63516 -16.68815,18.28787 -24.13756,26.66425 1.66139,1.25186 2.5652,-0.008 3.94433,-0.94836 1.75116,-0.74549 3.45717,-0.29857 4.45373,1.29602 2.34542,2.41306 4.69084,4.82613 7.03626,7.23919 0.21862,0.95263 -0.64161,3.95346 0.91008,2.37523 1.06858,-0.73293 2.13715,-1.46587 3.20573,-2.1988 4.64671,5.21745 10.77044,8.68175 15.60581,13.05644 4.47965,0.33278 5.43298,6.12758 9.60358,9.43945 -1.16497,2.49324 -2.60007,4.92295 -3.60134,7.45469 -0.40421,2.16749 0.51498,4.53918 2.68342,1.94168 0.50538,-0.0356 1.06622,-1.57398 1.43239,-0.57448 z"></path>
						<text id="label_icon_state_rs" class="label_icon_state" x="233" y="419">RS</text>
						<text id="label_state_rs" class="label_state" x="333" y="15">Rio Grande do Sul</text>
					</a>

					<a href="#" id="state_sc" class="state" data-state="sc" xlink:href="">
						<desc id="description_sc">Santa Catarina</desc>
						<path id="shape_sc" class="shape" d="m 287.45669,399.80963 c -0.83307,-2.04011 1.41704,-2.50552 1.70191,-4.08433 0.34732,-1.99088 0.69465,-3.98177 1.04197,-5.97265 -0.77048,-1.8543 -2.29092,-3.52785 -2.14479,-5.63715 -0.14253,-2.59072 -0.2235,-4.87357 -0.36603,-7.46429 2.0717,0.50126 1.04411,-1.23292 0.68764,-1.70282 -0.82328,-1.08526 -1.89742,-0.84578 -2.89897,-0.80115 -2.05186,0.0915 -3.74177,1.83635 -5.76951,2.1631 -2.20073,0.35462 -4.32805,-0.70881 -6.68223,-0.26188 -4.9135,0.93281 -9.5345,4.66455 -14.70504,5.1328 -4.71762,0.42723 -9.50858,-0.81646 -14.03997,-2.19669 -3.15394,-0.96066 -5.62648,-2.04376 -8.96514,-4.17828 -0.51999,4.39616 -1.06867,8.03867 -1.06867,10.86168 9.74943,-0.18659 19.15738,1.18565 26.29132,6.77664 3.00847,2.42635 7.16335,5.90324 9.19979,9.21642 3.0297,-0.32167 6.34609,-1.26391 7.65726,0.94871 1.43615,2.42353 -1.25553,5.18066 -3.1161,7.85583 0.78266,1.19557 1.52983,1.94276 2.43564,3.01519 3.37268,-3.52877 7.62551,-8.28973 10.99819,-11.8185 -0.20398,-0.33007 0.38482,-2.16962 -0.25724,-1.85259 z"></path>
						<text id="label_icon_state_sc" class="label_icon_state" x="267" y="392">SC</text>
						<text id="label_state_sc" class="label_state" x="359" y="15">Santa Catarina</text>
					</a>

					<a href="#" id="state_pr" class="state" data-state="pr" xlink:href="">
						<desc id="description_pr">Paraná</desc>
						<path id="shape_pr" class="shape" d="m 258.03551,378.95631 c 4.31029,-0.45585 9.25404,-3.89252 14.04739,-5.00703 2.46193,-0.57242 4.66331,0.69344 6.96337,0.35923 2.17501,-0.31604 4.04967,-1.82771 6.21582,-2.19969 1.91305,-0.32853 4.54939,-3e-5 5.82316,-3e-5 1.38104,-2.74255 -3.49097,-3.17463 -2.75505,-4.89689 0.88208,-2.06431 5.2776,0.19632 6.5241,-1.67068 0.34834,-0.52174 0.40079,-0.9668 -0.26773,-1.86289 -0.60774,-0.92323 -1.56,-0.774 -2.40263,-0.9547 -0.71134,-0.15255 -1.72622,0.47173 -2.18039,-0.0966 -0.86776,-1.08587 0.49247,-2.73605 0.73871,-4.10408 -2.45806,0 -4.84941,0.77734 -6.59715,-0.57079 -2.08604,-1.60908 1.88536,-2.74417 -2.78155,-7.01206 -1.70332,-1.91028 -2.43449,-4.50619 -2.13744,-6.98311 -0.10204,-2.78642 -0.004,-5.04655 -2.33085,-6.42397 -2.71703,-1.49686 -6.89649,-0.81036 -10.27647,-1.57556 -2.90932,-0.65865 -5.88557,-2.07685 -8.56707,-2.58589 -4.90733,-0.93157 -9.2481,-1.25017 -14.13938,-0.23773 -2.28712,0.47341 -5.57588,1.34239 -6.86956,3.61292 -2.50649,4.39913 -2.51066,8.96923 -4.08312,14.06505 -1.34584,4.36139 -3.17205,10.14306 -4.55925,13.27986 -0.4273,1.0844 -0.85459,2.16879 -1.28189,3.25319 1.6006,-0.35288 3.20119,-0.70575 4.80179,-1.05863 1.37647,2.2244 0.97019,4.43524 4.18228,6.46834 5.66008,3.58256 13.60998,6.59788 20.63988,6.26328 z"></path>
						<text id="label_icon_state_pr" class="label_icon_state" x="249" y="358">PR</text>
						<text id="label_state_pr" class="label_state" x="412" y="15">Paraná</text>
					</a>

					<a href="#" id="state_sp" class="state" data-state="sp" xlink:href="">
						<desc id="description_sp">São Paulo</desc>
						<path id="shape_sp" class="shape" d="m 305.56275,356.22896 c 2.59228,-1.64314 4.93719,-3.75132 7.69269,-5.08759 2.45384,-1.46001 4.82665,-2.72988 7.33102,-3.29805 1.31842,-0.13647 2.76782,0.76696 4.09291,0.41411 3.11319,-0.829 4.78572,-2.08645 7.85869,-5.62617 5.84421,-6.06847 1.27436,-7.26676 -0.78399,-8.72719 -4.80838,2.20283 -8.42647,2.87519 -12.74728,3.97531 -1.4402,0.15821 -3.26863,-0.76012 -3.80592,-1.85683 -1.76489,-3.60249 -2.97177,-7.07815 -4.7913,-12.2496 -0.68593,-2.33048 -1.46861,-4.76581 -1.88767,-6.82125 -0.41906,-2.05544 -0.84394,-3.9157 -1.06055,-6.45065 -0.224,-1.78361 -0.68535,-6.04563 -2.03445,-7.18124 -0.92898,-0.78197 -2.4579,-0.0373 -3.63698,0.20687 -1.14222,0.2365 -2.23387,0.68503 -3.37688,0.91767 -2.62759,0.53481 -5.32557,1.53759 -7.96986,1.0926 -2.96719,-0.49933 -8.22973,-4.26188 -11.12789,-5.07074 -4.79723,-1.33889 -9.9749,-1.13743 -13.19846,0.21161 -1.45326,0.60818 -3.76888,6.51503 -4.79138,8.39976 -3.04861,5.61938 -4.89738,10.01338 -8.16308,14.49488 -1.21651,1.66942 -2.5531,3.31312 -4.20847,4.54868 -2.2162,1.65415 -7.83802,3.37538 -7.44079,3.66938 0.39724,0.29399 7.14186,-1.40445 10.73649,-1.1929 4.90751,0.28881 9.54371,2.37928 14.36559,3.33665 3.74434,0.74343 8.1613,0.18902 11.29904,1.86724 1.70399,0.97552 2.23542,1.86424 2.89205,3.71466 0.78273,2.20579 -0.1066,5.20674 0.55601,7.45154 0.7439,2.5202 3.02944,3.50301 3.79287,6.01737 0.25645,0.84461 0.3652,3.03235 0.95022,3.69332 1.51417,1.71075 4.32623,-0.77309 5.90951,0.87391 0.74623,0.77626 -0.43617,2.32105 0.3727,3.20875 0.94998,1.04256 2.79514,1.58666 4.28027,1.38152 3.52695,-0.48717 5.52394,-3.78545 8.89493,-5.9136 z"></path>
						<text id="label_icon_state_sp" class="label_icon_state" x="285" y="332">SP</text>
						<text id="label_state_sp" class="label_state" x="391" y="15">São Paulo</text>
					</a>

					<a href="#" id="state_ms" class="state" data-state="ms" xlink:href="">
						<desc id="description_ms">Mato Grosso do Sul</desc>
						<path id="shape_ms" class="shape" d="m 215.67236,335.104 c 0.62652,2.69297 0.80879,11.82233 3.03708,13.03775 7.2336,-0.99637 4.95537,-6.5452 13.20226,-2.51297 1.05732,-4.34407 1.20806,-5.72127 2.44472,-8.34159 0.98037,-2.07728 2.17261,-4.15524 3.87284,-5.69972 2.55591,-2.32179 6.37629,-2.83487 9.08651,-4.97452 1.73754,-1.37174 3.13512,-3.14829 4.45411,-4.92621 2.17287,-2.92891 3.04404,-4.57267 5.63855,-9.3758 2.59451,-4.80313 4.99914,-8.55852 6.88199,-12.68748 0.77236,-1.69373 1.13522,-3.29844 1.7337,-5.30863 -6.13992,-2.75355 -13.18855,-5.62998 -16.15794,-7.08836 -2.13509,-1.01069 -4.09573,-1.09848 -5.25683,-2.49201 -0.80513,-0.96631 1.07519,-2.79664 -0.69745,-3.4367 -1.36032,-0.49118 -3.7665,-1.83089 -3.29639,-3.44234 0.81018,-2.61565 -2.36246,-1.56903 -3.27156,-3.07405 -0.61435,-1.01707 -0.74951,-4.66026 -1.93081,-4.52935 -6.84967,0.75908 -12.46432,1.76908 -15.80513,1.62815 -3.95692,-0.32485 -7.33897,-3.53384 -11.30298,-3.75595 -2.18739,-0.12256 -4.16633,0.58219 -6.42962,1.36286 -2.99202,1.03199 -6.98146,6.0135 -8.85255,10.28454 -0.61856,1.85544 -2.14561,12.59856 -5.36109,18.49732 0.85746,1.29388 1.71492,2.58777 2.57238,3.88165 -0.81957,1.08663 -2.22464,2.04782 -2.67306,3.21397 0.97546,3.12462 2.1644,6.21915 3.00727,9.36245 -0.24612,3.81344 0.0512,5.64047 -1.19167,9.30686 4.34941,1.26963 7.46571,-0.40941 11.96819,-0.0833 0.89986,-0.66632 4.9804,-3.95962 6.14124,-3.14951 6.37353,3.87286 6.0294,6.70349 8.18624,14.30294"></path>
						<text id="label_icon_state_ms" class="label_icon_state" x="218" y="305">MS</text>
						<text id="label_state_ms" class="label_state" x="322" y="15">Mato Grosso do Sul</text>
					</a>

					<a href="#" id="state_go" class="state" data-state="go" xlink:href="">
						<desc id="description_go">Goiás</desc>
						<path id="shape_go" class="shape" d="m 269.0819,289.24096 c 5.738,-7.05714 7.80891,-4.46138 12.76452,-5.70805 2.18459,-0.57774 5.99743,-2.6334 8.22458,-3.01548 4.18366,-0.71773 7.39291,2.48104 11.49956,1.407 1.73553,-0.4539 3.35988,-1.45036 4.40308,-2.90976 0.90273,-1.26289 1.33782,-3.10464 1.30043,-4.65655 -0.0386,-1.60161 -1.31311,-2.75932 -1.25493,-4.36034 0.0861,-2.36835 3.10304,-4.18823 2.79367,-6.53786 -1.09775,-8.33734 -3.45726,-8.18185 -15.25453,-8.94765 0.18357,-2.79161 0.25221,-5.59013 0.42869,-8.38082 15.89865,-0.75036 9.37733,0.22081 14.57686,7.23397 1.25761,-0.58813 2.51522,-1.17626 3.77283,-1.76438 2.14339,-2.23638 -0.72409,-6.80589 1.28044,-9.1393 2.83573,-3.30098 4.87603,-1.29564 7.09782,-2.44756 1.21484,-0.62985 2.8101,-1.13478 3.33025,-2.40047 0.5658,-1.37677 0.2299,-2.82343 -0.73963,-4.40381 -0.75589,-1.81131 -0.79154,-2.84363 -1.27192,-5.43394 -1.28044,-6.90435 0.66339,-7.95603 -0.92629,-8.38568 -2.70024,-0.72981 -4.63886,-1.52718 -8.68379,-1.83668 -3.65156,-0.2794 -5.35468,6.02489 -9.04636,6.82403 -3.88901,0.84186 -7.68001,-2.87624 -11.64978,-2.60401 -1.64011,0.11247 -3.14507,1.38518 -4.62119,1.7228 -1.86238,0.42597 -3.71811,0.67024 -5.46201,0.14489 -1.81995,-0.54826 -3.20804,-1.93629 -4.66817,-3.27469 -0.96307,-0.88278 0.52987,-5.50419 -2.60562,-3.0065 -2.95363,2.91716 -5.06396,10.70683 -5.78331,13.62768 -0.26339,1.67637 -0.48094,6.2902 -2.33541,8.61818 -1.28773,1.61654 -4.11209,1.36083 -5.47039,2.91855 -1.7448,2.00097 -2.01435,5.00184 -2.75748,7.47198 -2.11261,0.9894 -4.61742,2.48122 -6.54738,4.21754 -2.13712,1.92268 -4.00352,4.20958 -5.408,6.71785 -1.55109,2.77009 -2.83174,6.21781 -3.204,8.96927 -0.28786,2.12762 -0.082,4.40747 0.20395,6.3522 -1.10275,3.92974 0.54619,2.49978 3.43888,5.11745 0.0635,0.96046 -0.98628,2.36869 -0.004,2.60663 4.48248,1.57767 7.04463,2.59192 10.43254,4.05614 3.24829,1.58453 6.59023,3.36293 9.90671,4.80071 0.76107,-1.11556 1.32811,-2.32334 2.23938,-3.59334 z"></path>
						<text id="label_icon_state_go" class="label_icon_state" x="267" y="268">GO</text>
						<text id="label_state_go" class="label_state" x="421" y="15">Goiás</text>
					</a>

					<a href="#" id="state_mg" class="state" data-state="mg" xlink:href="">
						<desc id="description_mg">Minas Gerais</desc>
						<path id="shape_mg" class="shape" d="m 366.03943,309.83247 c 1.98769,-2.38743 4.89385,-3.81651 6.9863,-6.43444 1.81091,-2.26569 4.21981,-4.18486 4.39741,-7.07989 0.13453,-2.19288 -1.53622,-4.80922 -2.6712,-6.56061 2.6665,-0.80073 4.01571,-3.02441 1.48711,-4.57197 0.20128,-1.99946 1.09446,-3.55064 3.90956,-3.02944 1.49968,-3.73979 2.37497,-3.34247 4.42934,-2.9878 1.61713,0.49239 3.59842,1.36354 3.92352,0.91904 0.3251,-0.44454 -1.39778,-1.42109 -2.44335,-2.36016 -1.59437,-1.432 -2.77757,-3.98175 -2.63865,-6.46266 0.18181,-3.24693 9.04768,-8.36395 7.22657,-13.25227 -1.46588,-3.9348 -7.95227,-1.96742 -11.37768,-4.09103 -2.29938,-1.42552 -3.05014,-5.52065 -5.85625,-5.61939 -9.26595,-0.32603 -11.39621,-5.90751 -15.60316,-6.80987 -4.20696,-0.90236 -7.11895,-0.55997 -9.55306,-2.19656 -1.37556,-0.92489 -1.3548,-3.88369 -3.06656,-4.38176 -4.24572,-1.2354 -8.15181,3.42955 -12.24973,5.09072 -2.17961,0.88355 -1.42218,1.34648 -6.56175,2.59343 -1.7333,0.42053 -3.32435,-0.23408 -5.41794,-0.54861 -1.44684,-0.21736 -4.42782,-0.18526 -5.32944,0.78806 -2.29793,2.40703 1.37845,8.95934 -2.41712,10.44655 -3.47945,0.92574 -4.12288,1.74319 -4.41497,3.67715 -0.17292,1.14495 1.88674,4.64334 1.61355,7.14682 -0.23903,2.19045 -2.50535,3.37279 -2.66494,5.57046 -0.12064,1.6613 0.99899,2.5533 1.28916,5.07726 0.31446,2.73525 -0.90037,4.95018 -2.49232,6.35862 -2.36718,2.09429 -5.82764,3.29106 -8.90871,2.58633 -1.77117,-0.40512 -4.56712,-1.89432 -7.18438,-1.51861 -2.20114,0.31597 -4.77083,2.34579 -6.89894,2.99078 -2.61369,0.79216 -5.96762,0.0121 -8.41406,1.22615 -2.6093,1.29483 -4.72959,3.7538 -6.28143,6.21893 -1.09963,1.74677 -1.55538,2.81916 -2.53049,6.37357 2.14345,-0.62571 3.06272,-0.86702 4.63816,-0.92528 3.53343,-0.13065 8.16767,0.40476 10.52741,1.30131 2.70858,1.02908 6.14511,3.94174 8.99918,4.44143 2.4191,0.42353 5.11453,-0.6687 7.54148,-1.04469 2.56877,-0.39796 5.56129,-2.40623 7.88108,-1.23341 3.14767,2.61375 2.72808,4.78199 3.29308,8.25105 0.29373,1.78391 0.73161,5.47675 1.16591,7.23025 0.4343,1.7535 0.92659,3.47643 1.45227,5.13806 0.52568,1.66164 1.08474,3.26198 1.65259,4.7703 1.14572,3.04345 2.12994,7.80369 4.02198,8.88825 2.04246,1.17078 4.61128,-0.67552 6.9533,-1.23819 2.08441,-0.50078 6.29226,-2.15947 10.71511,-3.85239 4.54714,-1.84752 7.60381,-3.22523 11.48679,-3.49439 2.19751,-0.15233 4.43676,1.56035 6.59897,1.13948 2.89869,-0.56422 6.3632,-2.42159 7.2045,-4.20303 1.67082,-3.5379 3.76474,-9.60567 5.18727,-11.15764"></path>
						<text id="label_icon_state_mg" class="label_icon_state" x="331" y="288">MG</text>
						<text id="label_state_mg" class="label_state" x="369" y="15">Minas Gerais</text>
					</a>

					<a href="#" id="state_es" class="state" data-state="es" xlink:href="">
						<desc id="description_es">Espírito Santo</desc>
						<path id="shape_es" class="shape" d="m 378.36793,315.90595 c 0.97738,-0.2519 1.91685,-0.5871 2.74917,-1.1577 0.9434,-0.46306 1.38603,-1.48549 2.0905,-2.21544 0.77555,-1.13012 1.35721,-2.41046 2.45475,-3.29106 0.41373,-0.40299 0.82744,-0.80597 1.24116,-1.20895 0.39424,-1.17102 -1.80739,-3.53766 0.22738,-3.67637 0.94553,0.27061 1.3906,-0.44046 1.89196,-1.06085 1.04255,-1.09399 1.53763,-2.54565 2.31159,-3.81513 0.40861,-0.78315 0.25755,-1.73225 0.42901,-2.58572 0.39907,-3.72064 2.58716,-8.56152 2.98624,-12.28216 -2.12173,-1.46667 -4.32303,-2.5334 -6.7949,-3.08718 -1.96951,-0.44123 -4.23818,-1.26826 -5.87649,-0.19259 -0.7789,0.51141 -0.68443,1.73333 -1.02664,2.6 -0.88976,0 -2.52282,-0.48189 -3.05262,0.37341 -0.49196,0.7942 0.036,0.89693 1.00663,2.60424 -0.25409,1.47236 -0.42599,2.26436 -2.01336,3.15012 0.5256,1.34392 2.28431,3.73075 2.15185,5.77435 -0.1992,3.07336 -2.40677,5.77578 -4.3317,8.21866 -1.80788,2.29435 -5.19579,4.23722 -6.60309,5.82393 -1.20027,1.35327 -0.59023,2.84706 -0.24628,4.21329 0.35919,1.42677 0.93786,1.71742 1.8705,4.15836 3.46069,0.49466 4.38495,0.704 6.42374,1.08052 1.56428,-1.42029 1.14909,-1.81741 2.1106,-3.42373 z"></path>
						<circle id="icon_es" class="icon_state" r="12" cx="391" cy="304"></circle>
						<text id="label_icon_state_es" class="label_icon_state" x="384" y="308">ES</text>
						<text id="label_state_es" class="label_state" x="362" y="15">Espírito Santo</text>
					</a>

					<a href="#" id="state_pi" class="state" data-state="pi" xlink:href="">
						<desc id="description_pi">Piauí</desc>
						<path id="shape_pi" class="shape" d="m 342.86666,191.0427 c 1.71157,-0.76053 3.72216,-1.64622 5.08494,-3.157 1.45907,-1.61755 2.60356,-3.66178 3.00814,-5.62005 0.73993,-3.58142 -0.70047,-5.49338 1.00819,-7.22229 1.22486,-1.23938 3.4035,-0.87239 5.16844,-0.78369 3.00159,0.15087 5.61418,2.68076 8.59973,2.33615 3.141,-0.36257 5.87335,-3.26492 8.83816,-4.66384 5.90432,-5.31311 4.76125,-4.19589 6.80894,-6.44034 1.59387,-1.74702 5.51619,-2.01461 6.87422,-4.36474 1.33942,-2.31791 -0.65227,-5.05496 0.34423,-8.02387 1.23526,-2.46056 2.65663,-5.77513 1.6777,-8.48797 -0.57701,-1.59901 -3.06556,-1.7705 -3.95572,-3.21874 -1.98466,-3.22896 -1.96609,-7.34702 -2.42002,-11.10986 -0.67003,-5.55422 0.3916,-11.24415 -0.43018,-16.77795 -0.64587,-4.34923 -4.03259,-6.99132 -3.50843,-12.71565 0.10022,-1.094478 0.19783,-1.779789 -2.16065,-2.23737 -1.45908,-0.143546 -1.40169,2.23455 -2.04818,3.18981 -2.71209,2.20372 -4.44852,1.29913 -6.19009,2.73226 -2.41369,1.98621 -4.22325,4.78066 -5.36732,7.68962 -2.47138,6.28383 0.82915,14.88422 -2.82753,20.05875 -1.27568,1.80518 6.66294,5.91192 0.7688,10.36343 -3.89092,2.46893 -7.83077,-1.08747 -11.30576,0.37541 -2.7318,1.15002 -4.12988,4.50372 -6.59477,6.1493 -3.57761,2.38843 -11.71491,1.76833 -11.01893,6.561 0.67283,4.63325 -4.93668,7.88965 -5.80067,12.35718 -0.46621,2.41064 0.17994,4.91032 0.41825,7.35403 0.26356,2.70273 0.0503,5.5726 1.11751,8.06964 1.16199,2.71873 2.78446,5.3586 5.50949,6.95133 3.4523,1.41612 5.45178,1.94566 8.40151,0.63545 z"></path>
						<text id="label_icon_state_pi" class="label_icon_state" x="358" y="160">PI</text>
						<text id="label_state_pi" class="label_state" x="424" y="15">Piauí</text>
					</a>

					<a href="#" id="state_ce" class="state" data-state="ce" xlink:href="">
						<desc id="description_ce">Ceará</desc>
						<path id="shape_ce" class="shape" d="m 410.49252,153.37689 c -1.37326,-4.50502 1.41792,-7.68879 2.30887,-11.49361 0.52772,-2.25364 -1.24337,-4.03731 1.79716,-6.70722 2.33781,-2.05285 3.28256,-3.28881 4.83648,-5.01463 1.23678,-1.37361 2.3792,-2.82933 3.5669,-4.24558 0.62388,-0.74392 2.94231,-1.62112 1.86963,-2.23341 -12.56793,-7.17383 -9.21188,-15.43258 -25.23955,-22.07066 -4.4412,-1.839383 -10.07521,-2.223242 -14.32531,-1.659474 -0.6422,0.595794 -3.97137,-1.822914 -4.03961,-0.632221 -0.32937,5.746695 3.30353,9.618705 4.03221,14.621765 0.79541,5.46128 -0.76186,11.14433 0.33409,16.55331 0.83879,4.13983 0.7925,10.45934 4.696,11.76959 5.40645,1.81473 -0.78433,9.77211 0.76432,10.6075 3.65369,0.53702 5.60978,-2.21188 8.60496,-1.40223 2.48506,0.67176 5.50605,4.68994 8.40771,4.32035 1.12222,-0.14294 2.71599,-1.33134 2.38612,-2.41348 z"></path>
						<text id="label_icon_state_ce" class="label_icon_state" x="395" y="126">CE</text>
						<text id="label_state_ce" class="label_state" x="420" y="15">Ceará</text>
					</a>

					<a href="#" id="state_rr" class="state" data-state="rr" xlink:href="">
						<desc id="description_rr">Roraima</desc>
						<path id="shape_rr" class="shape" d="m 156.29028,68.019096 c 4.67931,-1.988204 -0.12418,-10.666555 10.32783,-11.26589 1.83984,-0.1055 3.04194,0.379201 5.51291,0.764346 0.069,-1.457882 0.39368,-7.513956 0.18783,-9.0114 -0.20581,-1.497443 -2.17888,-0.886775 -3.88749,-1.604662 -2.9137,-2.004347 -3.60967,-4.508091 -4.90279,-7.066947 -1.43623,-2.842048 -2.74829,-5.873666 -3.08935,-9.039685 -0.38465,-3.570722 1.01485,-7.116117 1.23297,-10.703361 1.08612,-0.941004 2.17224,-1.882009 3.25836,-2.823013 -0.40015,-1.882008 -0.8003,-3.764017 -1.20045,-5.646025 -1.881,-1.240819 -5.47796,-1.429412 -4.39448,-4.3669975 0.12147,-1.7496304 0.24294,-3.4992608 0.36441,-5.2488912 -1.71492,0 -3.42985,0 -5.14477,0 1.55912,1.9274484 0.0233,3.2815506 -1.44728,4.4870662 -4.33942,4.6764345 -17.98037,9.8959195 -21.082,8.7530705 -0.2683,-2.332216 -2.37086,2.393413 -3.28353,0.596362 1.34212,2.644214 0.18957,5.899268 -2.70665,6.345448 -2.3295,-1.915206 -4.30895,-5.103085 -7.56114,-3.218799 -3.12217,0.22867 -5.92518,-1.40308 -8.60189,-2.759866 -1.57069,-0.466831 -4.99248,0.07945 -1.89293,1.516781 2.16684,0.932005 4.2283,1.962703 3.53082,4.572657 0,1.793017 0,3.586035 0,5.379053 3.17614,1.071151 2.57339,6.821091 5.18841,6.882203 6.54256,0.152896 6.52233,0.756564 8.9075,3.546429 5.61657,6.569528 3.49195,14.688396 5.04055,24.775964 0.71231,4.639968 4.29374,10.456375 8.59444,10.753658 2.6538,0.183442 4.77082,-4.041744 6.62733,-5.400138 6.44957,-2.977631 3.60533,1.641529 10.42139,-0.217363 z"></path>
						<text id="label_icon_state_rr" class="label_icon_state" x="137" y="41">RR</text>
						<text id="label_state_rr" class="label_state" x="402" y="15">Roraima</text>
					</a>

					<a href="#" id="state_to" class="state" data-state="to" xlink:href="">
						<desc id="description_to">Tocantins</desc>
						<path id="shape_to" class="shape" d="m 322.14907,216.92168 c 2.12498,-9.05841 -4.27296,-6.94687 0.33801,-12.23516 1.97776,-2.26829 -3.02148,-4.45747 -3.10597,-7.01263 -0.15778,-4.77157 4.40851,-10.47661 4.92235,-13.4501 0,0 -3.77329,-1.77787 -4.81878,-3.45523 -0.77625,-1.24541 -0.34908,-3.81793 -1.15853,-5.51193 -0.55019,-1.15142 -1.83321,-1.8332 -2.42016,-2.96632 -0.72995,-1.40917 -1.18923,-3.00199 -1.27696,-4.58657 -0.10849,-1.95935 0.5524,-3.88797 0.94323,-5.81101 0.32238,-1.58623 1.79599,-3.23046 1.15474,-4.71669 -0.63385,-1.46909 -3.07005,-1.21127 -4.17495,-2.36851 -2.05911,-2.15666 -3.40893,-5.06416 -4.04942,-7.97635 -0.67917,-3.08808 0.0751,-6.17341 0.34899,-9.47924 0.20927,-2.52596 0.19594,-5.66535 -0.99981,-8.11419 -0.98027,-2.00756 -2.82945,-3.58147 -4.74152,-4.73699 -1.64849,-0.99623 -2.82284,-1.26538 -5.51643,-1.72016 1.1855,2.21273 3.28774,2.97213 3.39066,7.1118 0.0388,1.55932 -0.94842,3.60143 -2.15397,5.16746 -1.82192,2.36671 -5.24017,5.09511 -6.22682,6.44307 -1.24551,1.7016 -3.32963,4.62976 -3.97456,7.33474 -0.52308,2.19388 0.51951,4.53182 0.19266,6.76339 -0.4021,2.74535 -1.36378,5.42569 -2.61323,7.90309 -2.08161,4.12739 -6.50443,6.95062 -7.99984,11.32779 -1.68941,1.81187 -6.88769,16.67328 -6.44193,25.70469 -0.0277,5.11757 0.1017,10.37468 1.72428,15.26591 1.76803,-1.93409 4.36561,-2.30806 4.22182,1.11486 -0.15113,3.28101 2.85424,4.64394 5.25178,5.34131 2.93291,0.85309 5.87411,-2.17297 8.92679,-2.06879 3.19081,0.10889 4.37943,1.50864 9.16157,2.79349 4.38112,0.76344 6.36051,-6.02115 10.3089,-7.06932 3.4801,-0.92385 8.00457,3.44255 10.7871,1.00759 z"></path>
						<text id="label_icon_state_to" class="label_icon_state" x="289" y="190">TO</text>
						<text id="label_state_to" class="label_state" x="391" y="15">Tocantins</text>
					</a>

					<a href="#" id="state_ma" class="state" data-state="ma" xlink:href="">
						<desc id="description_ma">Maranhão</desc>
						<path id="shape_ma" class="shape" d="m 325.54664,168.10519 c 1.13397,-4.23882 3.85117,-6.75275 5.52766,-10.55434 0.60474,-2.32057 -0.214,-5.03098 1.43275,-5.87078 4.03248,-2.98188 6.80244,-2.17467 9.86537,-3.95531 3.03686,-1.76548 4.96398,-5.31222 8.24779,-6.55964 3.49622,-1.3281 7.91843,3.01591 11.20346,-0.60763 2.74103,-2.56399 -3.12201,-6.97387 -2.06711,-8.55256 3.1262,-4.67847 1.16327,-16.60461 2.33127,-19.64631 1.23507,-3.21629 3.68826,-6.57413 6.26256,-9.27333 1.84684,-1.93645 7.04758,-0.0247 6.43265,-4.802794 -3.07562,-0.94921 -6.38671,-1.656278 -9.38594,-3.216143 -2.33229,-0.902907 -4.46202,-2.716859 -7.09213,-2.28071 -1.9246,-0.594415 -1.6353,2.663168 -3.74844,1.740667 -1.73522,0.068 -3.71245,-0.557527 -4.43845,1.501322 -2.10132,4.374668 -6.43538,5.213598 -5.76586,1.460223 0.75011,-2.038948 -3.18895,-1.284628 -1.15412,-3.306771 1.12436,-1.504586 1.35376,-2.771109 -0.64704,-3.444444 0.007,-1.820306 1.69098,-3.915394 0.27288,-5.619897 -0.88823,-1.450265 -3.768,-5.142531 -5.41188,-3.123228 -1.08813,1.897358 -2.21634,-0.890671 -3.64917,-1.451452 -3.51121,-1.374216 -3.28289,-1.443441 -7.47914,-2.418729 -0.50748,3.364722 -1.12014,5.493937 -1.97565,8.157813 -1.09177,3.399573 -2.51379,6.690977 -4.01186,9.932098 -1.83062,3.960615 -3.62705,7.981655 -6.06805,11.598165 -1.89546,2.80824 -4.07199,5.47155 -6.59001,7.73839 -2.71237,2.44181 -6.45719,4.4168 -9.03308,6.18692 2.06303,0.51698 4.81429,0.97201 6.77487,2.33629 1.85089,1.28797 3.38994,3.16266 4.28936,5.22983 0.99467,2.28602 0.89991,4.92084 0.99777,7.41177 0.13064,3.32457 -1.00326,6.28377 -0.42835,9.35042 0.47746,2.54684 1.48443,5.11959 3.14435,7.10933 1.3245,1.58766 4.33864,1.57556 5.13102,3.48529 0.50567,1.21872 -0.3153,2.41162 -0.73795,3.889 -0.83255,2.91029 -1.8499,6.05101 -1.18248,9.0035 0.52571,2.32538 3.14155,3.73894 3.89122,6.00214 0.4113,1.24162 -0.37945,2.77058 0.253,3.91555 0.81528,1.4759 3.06478,3.5911 4.53063,3.47855 3.25167,-1.45242 -0.95782,-10.22315 0.2781,-14.8432 z"></path>
						<text id="label_icon_state_ma" class="label_icon_state" x="325" y="122">MA</text>
						<text id="label_state_ma" class="label_state" x="390" y="15">Maranhão</text>
					</a>

					<a href="#" id="state_rn" class="state" data-state="rn" xlink:href="">
						<desc id="description_rn">Rio Grande do Norte</desc>
						<path id="shape_rn" class="shape" d="m 440.08193,141.8455 c 0.93731,-0.19208 1.64446,0.33175 2.77439,0.73601 1.51759,0.77865 7.76505,0.81048 11.64757,1.21572 -0.9147,-2.95401 -0.90023,-6.20869 -2.2294,-8.99836 -0.50783,-1.06584 -1.2653,-2.03181 -2.1334,-2.82734 -1.57341,-1.3898 -3.64876,-1.87266 -5.6876,-1.99881 -1.90687,-0.21248 -3.81126,-0.4706 -5.73456,-0.37878 -0.78937,-0.0354 -1.6221,0.0704 -2.38464,-0.0523 -2.4895,-1.68813 -4.48795,-4.65979 -7.46851,-5.0644 -1.39215,-0.18898 -2.58071,0.42206 -3.55079,1.4383 -1.99274,2.08756 -2.97902,3.77929 -4.49238,5.64981 -2.15346,2.66168 -6.25737,4.65598 -6.52779,7.93001 0.95051,3.10284 2.51822,3.32872 4.18673,2.8371 1.59896,-0.47113 4.2471,-1.59473 6.21436,-2.70568 1.64445,-0.92865 2.75874,-2.95671 4.61933,-3.28044 0.69288,-0.12055 1.53332,0.0727 2.03174,0.56882 0.45517,0.45312 0.56364,1.21181 0.52784,1.85307 -0.1362,2.43956 -4.05443,4.69745 -2.78033,6.78232 0.71619,1.17195 2.30165,0.73241 4.10562,0.34837 0.68597,0.82338 1.72681,2.22386 2.98151,2.31322 0.96913,0.069 2.10132,-0.57184 2.53289,-1.44231 0.52149,-1.05183 -0.93759,-2.24394 -0.46568,-3.4911 0.2745,-0.72543 1.07326,-1.27751 1.8331,-1.43323 z"></path>
						<circle id="icon_rn" class="icon_state" r="12" cx="442" cy="126"></circle>
						<text id="label_icon_state_rn" class="label_icon_state" x="434" y="130">RN</text>
						<text id="label_state_rn" class="label_state" x="317" y="15">Rio Grande do Norte</text>
					</a>

					<a href="#" id="state_pb" class="state" data-state="pb" xlink:href="">
						<desc id="description_pb">Paraíba</desc>
						<path id="shape_pb" class="shape" d="m 435.46824,161.79394 c 0.65739,-0.73516 1.07303,-1.80029 1.97217,-2.20548 2.0088,-0.90524 4.46314,0.4591 6.60993,-0.0369 1.57348,-0.36354 3.75635,-0.6053 4.36558,-2.10091 0.51702,-1.26924 2.82492,-1.23439 4.28731,-1.19248 1.25048,-0.0523 2.29431,0.003 2.91741,-0.78802 0.98953,-1.25694 0.18214,-3.19857 0.12889,-4.79739 -0.0386,-1.15931 -0.58704,-4.25305 -1.20857,-5.23243 -6.00145,-0.38968 -5.99459,-0.46153 -11.09039,-0.851 -1.08612,-0.58812 -2.4624,-1.42422 -3.52352,-0.79211 -1.01054,0.60198 0.49904,2.46362 0,3.52876 -0.5712,1.21916 -1.75887,2.51662 -3.10347,2.58498 -1.61996,0.0824 -3.06381,-1.8957 -4.0356,-2.71908 -1.45584,0.12447 -3.20042,0.63419 -4.49199,-0.12447 -0.67682,-0.39756 -1.15483,-1.24077 -1.20322,-2.02422 -0.1606,-2.60036 5.11782,-5.46716 3.13655,-7.15897 -1.61282,-1.37719 -3.48887,2.42832 -5.35575,3.43459 -1.91683,1.03319 -3.83588,2.21652 -5.96885,2.65485 -1.53499,0.31544 -3.34699,-0.85106 -4.70078,-0.0618 -1.0562,0.61577 -1.48907,2.02417 -1.76484,3.21525 -0.65131,2.8131 -1.30395,6.32669 0.40662,8.653 1.33064,1.80962 2.76066,2.90313 6.33074,2.30863 2.50944,-0.41788 3.89965,-1.5985 6.58421,-3.85948 1.47824,-1.42636 3.14028,-2.07873 4.62493,-1.44319 0.89568,0.38342 1.21031,1.35593 1.29598,2.61988 0.0929,1.3707 -2.34295,3.38993 -2.04408,5.24118 0.23406,1.44981 1.28661,2.93117 2.81116,3.39234 1.19484,-0.003 2.67685,-1.30563 3.01958,-2.24549 z"></path>
						<circle id="icon_pb" class="icon_state" r="12" cx="448" cy="151"></circle>
						<text id="label_icon_state_pb" class="label_icon_state" x="441" y="155">PB</text>
						<text id="label_state_pb" class="label_state" x="407" y="15">Paraíba</text>
					</a>

					<a href="#" id="state_df" class="state" data-state="df" xlink:href="">
						<desc id="description_df">Distrito Federal</desc>
						<circle id="icon_df" class="icon_state" r="12" cx="301" cy="251"></circle>
						<text id="label_icon_state_df" class="label_icon_state" x="294" y="255">DF</text>
						<text id="label_state_df" class="label_state" x="350" y="15">Distrito Federal</text>
					</a>

				</g>
			</svg>
		</div>

		<div class="parca">
			<select name="select" id="seletory">
				<option value="mg" data-stado="mg"> Minas Gerais</option> 
				<option value="ac" data-stado="ac"> Acre</option> 
				<option value="al" data-stado="al"> Alagoas</option> 
				<option value="ap" data-stado="ap"> Amapá</option> 
				<option value="am" data-stado="am"> Amazonas</option> 
				<option value="ba" data-stado="ba"> Bahia</option> 
				<option value="ce" data-stado="ce"> Ceará</option> 
				<option value="df" data-stado="df"> Distrito Federal</option> 
				<option value="es" data-stado="es"> Espírito Santo</option> 
				<option value="go" data-stado="go"> Goiás</option> 
				<option value="ma" data-stado="ma"> Maranhão</option> 
				<option value="mt" data-stado="mt"> Mato Grosso</option> 
				<option value="ms" data-stado="ms"> Mato Grosso do Sul</option> 
				<option value="pa" data-stado="pa"> Pará</option> 
				<option value="pb" data-stado="pb"> Paraíba</option> 
				<option value="pr" data-stado="pr"> Paraná</option> 
				<option value="pe" data-stado="pe"> Pernambuco</option> 
				<option value="pi" data-stado="pi"> Piauí</option> 
				<option value="rj" data-stado="rj"> Rio de Janeiro</option> 
				<option value="rn" data-stado="rn"> Rio Grande do Norte</option> 
				<option value="rs" data-stado="rs"> Rio Grande do Sul</option> 
				<option value="ro" data-stado="ro"> Rondônia</option> 
				<option value="rr" data-stado="rr"> Roraima</option> 
				<option value="sc" data-stado="sc"> Santa Catarina</option> 
				<option value="se" data-stado="se"> Sergipe</option> 
				<option value="sp" data-stado="sp"> São Paulo</option> 
				<option value="to" data-stado="to"> Tocantins</option> 
			</select>

			<div id="box_mg" data-info="mg" class="estado">
				<h3>Minas Gerais</h3>
				<ul>
					<li>Quantidade: <?php echo $registro_count["mg_count"]; ?></li>
					<li>Inicial: <?php echo $datainicial; ?> a Data final: <?php echo $datafinal; ?></li>
				</ul>
			</div>
			<div id="box_sp" data-info="sp" class="estado">
				<h3>São Paulo</h3>
					<ul>
					<li>Quantidade: <?php echo $registro_count["sp_count"]; ?></li>
					<li>Inicial: <?php echo $datainicial; ?> a Data final: <?php echo $datafinal; ?></li>
					</ul>
			</div>
			<div id="box_rj" data-info="rj" class="estado">
				<h3>Rio de Janeiro</h3>
				<ul>
					<li>Quantidade: <?php echo $registro_count["rj_count"]; ?></li>
					<li>Inicial: <?php echo $datainicial; ?> a Data final: <?php echo $datafinal; ?></li>
				</ul>
			</div>
			<div id="box_ac" data-info="ac" class="estado">
				<h3>Acre</h3>
				<ul>
					<li>Quantidade: <?php echo $registro_count["ac_count"]; ?></li>
					<li>Inicial: <?php echo $datainicial; ?> a Data final: <?php echo $datafinal; ?></li>
				</ul>
			</div>
			<div id="box_al" data-info="al" class="estado">
				<h3>Alagoas</h3>
				<ul>
					<li>Quantidade: <?php echo $registro_count["al_count"]; ?></li>
					<li>Inicial: <?php echo $datainicial; ?> a Data final: <?php echo $datafinal; ?></li>
				</ul>
			</div>
			<div id="box_ap" data-info="ap" class="estado">
				<h3>Amapá</h3>
				<ul>
					<li>Quantidade: <?php echo $registro_count["ap_count"]; ?></li>
					<li>Inicial: <?php echo $datainicial; ?> a Data final: <?php echo $datafinal; ?></li>
				</ul>
			</div>
			<div id="box_am" data-info="am" class="estado">
				<h3>Amazonas</h3>
				<ul>
					<li>Quantidade: <?php echo $registro_count["am_count"]; ?></li>
					<li>Inicial: <?php echo $datainicial; ?> a Data final: <?php echo $datafinal; ?></li>
				</ul>
			</div>
			<div id="box_ba" data-info="ba" class="estado">
				<h3>Bahia</h3>
				<ul>
					<li>Quantidade: <?php echo $registro_count["ba_count"]; ?></li>
					<li>Inicial: <?php echo $datainicial; ?> a Data final: <?php echo $datafinal; ?></li>
				</ul>
			</div>
			<div id="box_ce" data-info="ce" class="estado">
				<h3>Ceará</h3>
				<ul>
					<li>Quantidade: <?php echo $registro_count["ce_count"]; ?></li>
					<li>Inicial: <?php echo $datainicial; ?> a Data final: <?php echo $datafinal; ?></li>
				</ul>
			</div>
			<div id="box_df" data-info="df" class="estado">
				<h3>Distrito Federal</h3>
				<ul>
					<li>Quantidade: <?php echo $registro_count["df_count"]; ?></li>
					<li>Inicial: <?php echo $datainicial; ?> a Data final: <?php echo $datafinal; ?></li>
				</ul>
			</div>
			<div id="box_es" data-info="es" class="estado">
				<h3>Espírito Santo</h3>
				<ul>
					<li>Quantidade: <?php echo $registro_count["es_count"]; ?></li>
					<li>Inicial: <?php echo $datainicial; ?> a Data final: <?php echo $datafinal; ?></li>
				</ul>
			</div>
			<div id="box_go" data-info="go" class="estado">
				<h3>Goiás</h3>
				<ul>
					<li>Quantidade: <?php echo $registro_count["go_count"]; ?></li>
					<li>Inicial: <?php echo $datainicial; ?> a Data final: <?php echo $datafinal; ?></li>
				</ul>
			</div>
			<div id="box_ma" data-info="ma" class="estado">
				<h3>Maranhão</h3>
				<ul>
					<li>Quantidade: <?php echo $registro_count["ma_count"]; ?></li>
					<li>Inicial: <?php echo $datainicial; ?> a Data final: <?php echo $datafinal; ?></li>
				</ul>
			</div>
			<div id="box_mt" data-info="mt" class="estado">
				<h3>Mato Grosso</h3>
				<ul>
					<li>Quantidade: <?php echo $registro_count["mt_count"]; ?></li>
					<li>Inicial: <?php echo $datainicial; ?> a Data final: <?php echo $datafinal; ?></li>
				</ul>
			</div>
			<div id="box_ms" data-info="ms" class="estado">
				<h3>Mato Grosso do Sul</h3>
				<ul>
					<li>Quantidade: <?php echo $registro_count["ms_count"]; ?></li>
					<li>Inicial: <?php echo $datainicial; ?> a Data final: <?php echo $datafinal; ?></li>
				</ul>
			</div>
			<div id="box_pa" data-info="pa" class="estado">
				<h3>Pará</h3>
				<ul>
					<li>Quantidade: <?php echo $registro_count["pa_count"]; ?></li>
					<li>Inicial: <?php echo $datainicial; ?> a Data final: <?php echo $datafinal; ?></li>
				</ul>
			</div>
			<div id="box_pb" data-info="pb" class="estado">
				<h3>Paraíba</h3>
				<ul>
					<li>Quantidade: <?php echo $registro_count["pb_count"]; ?></li>
					<li>Inicial: <?php echo $datainicial; ?> a Data final: <?php echo $datafinal; ?></li>
				</ul>
			</div>
			<div id="box_pr" data-info="pr" class="estado">
				<h3>Paraná</h3>
				<ul>
					<li>Quantidade: <?php echo $registro_count["pr_count"]; ?></li>
					<li>Inicial: <?php echo $datainicial; ?> a Data final: <?php echo $datafinal; ?></li>
				</ul>
			</div>
			<div id="box_pe" data-info="pe" class="estado">
				<h3>Pernambuco</h3>
				<ul>
					<li>Quantidade: <?php echo $registro_count["pe_count"]; ?></li>
					<li>Inicial: <?php echo $datainicial; ?> a Data final: <?php echo $datafinal; ?></li>
				</ul>
			</div>
			<div id="box_pi" data-info="pi" class="estado">
				<h3>Piauí</h3>
				<ul>
					<li>Quantidade: <?php echo $registro_count["pi_count"]; ?>/li>
					<li>Inicial: <?php echo $datainicial; ?> a Data final: <?php echo $datafinal; ?></li>
				</ul>
			</div>
			<div id="box_rn" data-info="rn" class="estado">
				<h3>Rio Grande do Norte</h3>
				<ul>
					<li>Quantidade: <?php echo $registro_count["rn_count"]; ?></li>
					<li>Inicial: <?php echo $datainicial; ?> a Data final: <?php echo $datafinal; ?></li>
				</ul>
			</div>
			<div id="box_rs" data-info="rs" class="estado">
				<h3>Rio Grande do Sul</h3>
				<ul>
					<li>Quantidade: <?php echo $registro_count["rs_count"]; ?></li>
					<li>Inicial: <?php echo $datainicial; ?> a Data final: <?php echo $datafinal; ?></li>
				</ul>
			</div>
			<div id="box_ro" data-info="ro" class="estado">
				<h3>Rondônia</h3>
				<ul>
					<li>Quantidade: <?php echo $registro_count["ro_count"]; ?></li>
					<li>Inicial: <?php echo $datainicial; ?> a Data final: <?php echo $datafinal; ?></li>
				</ul>
			</div>
			<div id="box_rr" data-info="rr" class="estado">
				<h3>Roraima</h3>
				<ul>
					<li>Quantidade: <?php echo $registro_count["rr_count"]; ?></li>
					<li>Inicial: <?php echo $datainicial; ?> a Data final: <?php echo $datafinal; ?></li>
				</ul>
			</div>
			<div id="box_sc" data-info="sc" class="estado">
				<h3>Santa Catarina</h3>
				<ul>
					<li>Quantidade: <?php echo $registro_count["sc_count"]; ?></li>
					<li>Inicial: <?php echo $datainicial; ?> a Data final: <?php echo $datafinal; ?></li>
				</ul>
			</div>
			<div id="box_se" data-info="se" class="estado">
				<h3>Sergipe</h3>
				<ul>
					<li>Quantidade: <?php echo $registro_count["se_count"]; ?></li>
					<li>Inicial: <?php echo $datainicial; ?> a Data final: <?php echo $datafinal; ?></li>
				</ul>
			</div>
			<div id="box_to" data-info="to" class="estado">
				<h3>Tocantins</h3>
				<ul>
					<li>Quantidade: <?php echo $registro_count["to_count"]; ?></li>
					<li>Inicial: <?php echo $datainicial; ?> a Data final: <?php echo $datafinal; ?></li>
				</ul>
			</div>
</div><br>

		
		
	</body>

</html>
</body>
</html>








