<?php
require_once('Configuracoes.php');
$vendedor = $_GET['vendedor'];

// DEFINE O FUSO HORARIO COMO O HORARIO DE BRASILIA
    date_default_timezone_set('America/Sao_Paulo');
// CRIA UMA VARIAVEL E ARMAZENA A HORA ATUAL DO FUSO-HORÀRIO DEFINIDO (BRASÍLIA)
    $dataLocal = date('d/m/Y', time());

ini_set('display_errors', 0);
error_reporting(E_ERROR | E_WARNING | E_PARSE); 


?>



<!DOCTYPE html>
<html style="font-size: 16px;" lang="pt"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Ficha UBS</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">

<link rel="stylesheet" href="Página-Inicial.css" media="screen">
  <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <script>
    function mascaraTelefone(event) {
        let tecla = event.key;
        let telefone = event.target.value.replace(/\D+/g, "");

        if (/^[0-9]$/i.test(tecla)) {
            telefone = telefone + tecla;
            let tamanho = telefone.length;

            if (tamanho >= 12) {
                return false;
            }
            
            if (tamanho > 10) {
                telefone = telefone.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
            } else if (tamanho > 5) {
                telefone = telefone.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");
            } else if (tamanho > 2) {
                telefone = telefone.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
            } else {
                telefone = telefone.replace(/^(\d*)/, "($1");
            }

            event.target.value = telefone;
        }

        if (!["Backspace", "Delete"].includes(tecla)) {
            return false;
        }
    }
</script>
    <meta name="generator" content="Nicepage 5.5.0, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": ""
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Página Inicial">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/">


    <script>
      var vendedor = $("#vendedor").val();
$(document).ready(function(){
  $("#botaoqr").click(function(){
    $.ajax({url: "qrcode.php",data: {vendedor: vendedor} ,success: function(result){
      $("#div1").html(result);
      document.getElementById("botaocadastro").style.display = "none"
      document.getElementsByClassName("u-clearfix u-form-spacing-5 u-form-vertical u-inner-form")[0].innerHTML = "<a href='index.php?vendedor=<?php echo $vendedor; ?>'>Voltar</a>"
    }});
  });
});
</script>

   <script>
      var vendedor = $("#vendedor").val();
$(document).ready(function(){
  $("#botaocadastro").click(function(){
    $.ajax({url: "cadastrorapido.php?vendedor=<?php echo $vendedor; ?>",data: {vendedor: vendedor} ,success: function(result){
      $("#div2").html(result);
      document.getElementById("botaoqr").style.display = "none"
      document.getElementsByClassName("u-clearfix u-form-spacing-5 u-form-vertical u-inner-form")[0].innerHTML = "<a href='index.php?vendedor=<?php echo $vendedor; ?>'>Voltar</a>"
    }});
  });
});
</script>


</head>
  <body class="u-body u-xl-mode" data-lang="pt">

    <section class="u-align-center u-clearfix u-white u-section-1" id="carousel_16e8">
      <img class="u-image u-image-contain u-image-default u-image-1" src="images/UBS2-removebg-preview.png" alt="" data-image-width="685" data-image-height="117">



       <img class="u-expanded-width u-image u-image-default u-image-2" src="https://img.freepik.com/vetores-gratis/fundo-branco-abstrato_23-2148806276.jpg" alt="" data-image-width="2000" data-image-height="1200">

     
        <input type="hidden" id="vendedor" name="vendedor" value="<?php echo $vendedor; ?>">
      <div class="u-clearfix u-custom-html u-custom-html-1">
        <input type="submit" name="" id="botaocadastro" value="Cadastro com Foto" class="u-active-palette-3-base u-border-5 u-border-active-palette-3-base u-border-custom-color-1 u-border-hover-palette-3-base u-btn u-btn-round u-btn-submit u-button-style u-custom-color-1 u-hover-palette-3-base u-radius-10 u-btn-1">
        <br>
        <input type="submit" name="" id="botaoqr" value="Cadastro com QRcode" class="u-active-palette-3-base u-border-5 u-border-active-palette-3-base u-border-custom-color-1 u-border-hover-palette-3-base u-btn u-btn-round u-btn-submit u-button-style u-custom-color-1 u-hover-palette-3-base u-radius-10 u-btn-1">
        
        
      </div>

      
<div id="div1">
  
</div><br>
<div id="div2">
  
</div>

      <div class="u-form u-radius-15 u-white u-form-1">

        <form action="save.php" method="post" class="u-clearfix u-form-spacing-5 u-form-vertical u-inner-form" name="form" style="padding: 8px;">
          <h4 class="u-align-center u-form-group u-form-text u-label-top u-text u-text-2"> Formato para registro LEADS - FISPAL 2023<span style="text-decoration: underline !important;"></span>
          </h4>
          <p class="u-align-center u-form-group u-form-text u-label-top u-text u-text-custom-color-2 u-text-3"> Bem vindo <?php echo $vendedor; ?> !</p>
          <div class="u-form-group u-form-name u-label-top">
            <label for="name-4c18" class="u-label u-label-1">Empresa</label>
            <input type="text" id="name-4c18" name="nomeempresa" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-radius-10" required="" placeholder="EMPRESA USB LTDA">
          </div>
          <div class="u-form-email u-form-group u-label-top">
            <label for="email-4c18" class="u-label u-label-2">Nome do Cliente</label>
            <input placeholder="" id="email-4c18" name="nomecliente" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-radius-10" required="">
          </div>
          <div class="u-form-group u-label-top u-form-group-5">
            <label for="text-327f" class="u-label u-label-3">Cargo</label>
            <input type="text" placeholder="EX: GERENTE" id="text-327f" name="cargo" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-radius-10">
          </div>
          <div class="u-form-group u-label-top u-form-group-6">
            <label for="text-deb8" class="u-label u-label-4">E-mail</label>
            <input type="text" placeholder="EX: contato@ubscode.pt" id="text-deb8" name="email" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-radius-10">
          </div>
          <div class="u-form-group u-label-top u-form-group-7">
            <label for="text-3039" class="u-label u-label-5">Telefone Fixo</label>
            <input type="text" placeholder="EX: (11) 4555-8788" id="text-3039" name="telefonefixo" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-radius-10">
          </div>
          <div class="u-form-group u-label-top u-form-group-8">
            <label for="text-f1eb" class="u-label u-label-6">Whatsapp</label>
            <input type="text" maxlength="15" placeholder="EX: (11) 97420-8797" onkeydown="return mascaraTelefone(event)" id="text-f1eb" name="whatsapp" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-radius-10">
          </div>
          <div class="u-form-group u-form-input-layout-horizontal u-form-radiobutton u-label-top u-form-group-9">
            <label class="u-form-control-hidden u-label u-label-7"></label>
            <div class="u-form-radio-button-wrapper">
              <div class="u-input-row">
                <input id="field-abd7" type="radio" name="tipoempresa" value="alimentacao" class="u-field-input" checked="checked" data-calc="alimentacao">
                <label class="u-field-label" for="field-abd7" style="font-weight: 700;">Alimentação</label>
              </div>
              <div class="u-input-row">
                <input id="field-8d5b" type="radio" name="tipoempresa" value="Bebidas" class="u-field-input" data-calc="Bebidas">
                <label class="u-field-label" for="field-8d5b" style="font-weight: 700;">Bebidas</label>
              </div>
              <div class="u-input-row">
                <input id="field-b5c9" type="radio" name="tipoempresa" value="Consumo" class="u-field-input" data-calc="Consumo">
                <label class="u-field-label" for="field-b5c9" style="font-weight: 700;">Consumo</label>
              </div>
              <div class="u-input-row">
                <input id="field-f0e4" data-calc="Farmaceutico" type="radio" name="tipoempresa" value="Farmaceutico" class="u-field-input">
                <label class="u-field-label" for="field-f0e4" style="font-weight: 700;">Farmacêutico</label>
              </div>
              <div class="u-input-row">
                <input id="field-a1eb" data-calc="Manufatura" type="radio" name="tipoempresa" value="Manufatura" class="u-field-input">
                <label class="u-field-label" for="field-a1eb" style="font-weight: 700;">Manufatura</label>
              </div>
            </div>
          </div>
          <div class="u-form-group u-label-top u-form-group-10">
            <label for="text-0aaa" class="u-label u-label-8">Outros</label>
            <input type="text" id="text-0aaa" name="outrostipoempresa" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-radius-10" placeholder="Outros">
          </div>
          <div class="u-form-group u-form-message u-label-top u-form-group-11">
            <label for="message-f3f3" class="u-label u-label-9">Comentarios</label>
            <textarea placeholder="EX: cliente muito importante." rows="4" cols="50" id="message-f3f3" name="comentario" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-radius-10"></textarea>
          </div>
          <div class="u-form-group u-form-message u-label-top u-form-group-11">
            <label for="message-f3f3" class="u-label u-label-9">Agendar visita</label><br>
            <input type="date" id="agendarvisita" name="agendarvisita"> Horário<input type="time" id="timevisita" name="timevisita">
          </div>
          <div class="u-form-group u-form-message u-label-top u-form-group-11">
            <label for="message-f3f3" class="u-label u-label-9">Agendar Demo</label><br>
            <input type="date" id="agendardemo" name="agendardemo"> Horário<input type="time" id="timedemo" name="timedemo">
          </div>
          <div class="u-form-checkbox u-form-group u-label-top u-form-group-12">
            <input type="checkbox" id="checkbox-643c" name="clientehot" value="ClienteHot" class="u-field-input">
            <label for="checkbox-643c" class="u-field-label" style="font-weight: 700;">HOT</label>
          </div>
          <div class="u-form-group u-form-select u-label-top u-form-group-13">
            <label for="select-6ffd" class="u-label u-label-10">Tipo cliente</label>
            <div class="u-form-select-wrapper">
              <select id="select-6ffd" name="tipodocliente" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-radius-10">
                <option data-calc="Cliente" value="Cliente">Cliente</option>
                <option data-calc="Distribuidor" value="Distribuidor">Distribuidor</option>
                <option data-calc="Integrador" value="Integrador">Integrador</option>
                <option data-calc="Fornecedor" value="Fornecedor">Fornecedor</option>
                <option data-calc="Outro" value="Outro">Outro</option>
              </select>
              <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
            </div>
          </div>
          <div class="u-form-group u-form-input-layout-horizontal u-form-radiobutton u-label-top u-form-group-14">
            <label class="u-label u-label-11">Porte</label>
            <div class="u-form-radio-button-wrapper">
              <div class="u-input-row">
                <input id="field-baf9" type="radio" name="porteempresa" value="A" class="u-field-input" checked="checked" data-calc="A">
                <label class="u-field-label" for="field-baf9" style="font-weight: 700;">A</label>
              </div>
              <div class="u-input-row">
                <input id="field-dad5" type="radio" name="porteempresa" value="AA" class="u-field-input" data-calc="AA">
                <label class="u-field-label" for="field-dad5" style="font-weight: 700;">AA</label>
              </div>
              <div class="u-input-row">
                <input id="field-cb70" type="radio" name="porteempresa" value="AAA" class="u-field-input" data-calc="AAA">
                <label class="u-field-label" for="field-cb70" style="font-weight: 700;">AAA</label>
              </div>
            </div>
          </div>
          <div class="u-form-group u-form-input-layout-horizontal u-form-radiobutton u-label-top u-form-group-15">
            <label class="u-label u-label-12">Status do Cliente</label>
            <div class="u-form-radio-button-wrapper">
              <div class="u-input-row">
                <input id="field-cb4d" data-calc="Apto" type="checkbox" name="statuscliente[0]" value="Apto" class="u-field-input">
                <label class="u-field-label" for="field-cb4d">Apto</label>
              </div>
              <div class="u-input-row">
                <input id="field-4aa5" data-calc="Por contatar" type="checkbox" name="statuscliente[1]" value="Por contatar" class="u-field-input">
                <label class="u-field-label" for="field-4aa5">Por contatar</label>
              </div>
              <div class="u-input-row">
                <input id="field-1a68" data-calc="Interessado" type="checkbox" name="statuscliente[2]" value="Interessado" class="u-field-input">
                <label class="u-field-label" for="field-1a68">Interessado</label>
              </div>
              <div class="u-input-row">
                <input id="field-e8f5" data-calc="URGENTE" type="checkbox" name="statuscliente[3]" value="URGENTE" class="u-field-input">
                <label class="u-field-label" for="field-e8f5">URGENTE</label>
              </div>
              <div class="u-input-row">
                <input id="field-9f00" data-calc="Não apto" type="checkbox" name="statuscliente[4]" value="Não apto" class="u-field-input">
                <label class="u-field-label" for="field-9f00">Não apto</label>
              </div>
              <div class="u-input-row">
                <input id="field-594d" data-calc="informacãoemail" type="checkbox" name="statuscliente[5]" value="Solicitou info x e-mail" class="u-field-input">
                <label class="u-field-label" for="field-594d">Solicitou info x e-mail</label>
              </div>
              <div class="u-input-row">
                <input id="field-f386" data-calc="Quer agendar visita" type="checkbox" name="statuscliente[6]" value="Quer agendar visita" class="u-field-input">
                <label class="u-field-label" for="field-f386">Quer agendar visita</label>
              </div>
              <div class="u-input-row">
                <input id="field-945e" data-calc="NÃO URGENTE" type="checkbox" name="statuscliente[7]" value="NÃO URGENTE" class="u-field-input">
                <label class="u-field-label" for="field-945e">NÃO URGENTE</label>
              </div>
            </div>
          </div>
          <div class="u-form-group u-form-input-layout-horizontal u-form-radiobutton u-label-top u-form-group-16">
            <label class="u-label u-label-13">Maquinas</label>
            <div class="u-form-radio-button-wrapper">
              <div class="u-input-row">
                <input id="field-520e" data-calc="APLINK LCX" type="checkbox" name="maquinasubs[1]" value="APLINK LCX" class="u-field-input">
                <label class="u-field-label" for="field-520e">APLINK LCX</label>
              </div>
              <div class="u-input-row">
                <input id="field-00f0" data-calc="HRX" type="checkbox" name="maquinasubs[2]" value="HRX" class="u-field-input">
                <label class="u-field-label" for="field-00f0">HRX</label>
              </div>
              <div class="u-input-row">
                <input id="field-b4c1" data-calc="TJX" type="checkbox" name="maquinasubs[3]" value="TJX" class="u-field-input">
                <label class="u-field-label" for="field-b4c1">TJX</label>
              </div>
              <div class="u-input-row">
                <input id="field-90c2" data-calc="APL8000" type="checkbox" name="maquinasubs[4]" value="APL8000" class="u-field-input">
                <label class="u-field-label" for="field-90c2">APL8000</label>
              </div>
              <div class="u-input-row">
                <input id="field-7375" data-calc="APL 35s" type="checkbox" name="maquinasubs[5]" value="APL 35s" class="u-field-input">
                <label class="u-field-label" for="field-7375">APL 35s</label>
              </div>
              <div class="u-input-row">
                <input id="field-7375" data-calc="MRX72e" type="checkbox" name="maquinasubs[6]" value="MRX72e" class="u-field-input">
                <label class="u-field-label" for="field-7375">MRX72e</label>
              </div>
              <div class="u-input-row">
                <input id="field-7375" data-calc="UV LED" type="checkbox" name="maquinasubs[7]" value="UV LED" class="u-field-input">
                <label class="u-field-label" for="field-7375">UV LED</label>
              </div>
              <div class="u-input-row">
                <input id="field-e601" data-calc="Outros" type="checkbox" name="maquinasubs[8]" value="Outros" class="u-field-input">
                <label class="u-field-label" for="field-e601">Outros</label>
              </div>
            </div>
          </div>
          <div class="u-form-group u-label-top u-form-group-17">
            <label for="text-d036" class="u-label u-label-14">Atendente</label>
            <input type="text" placeholder="<?php echo $vendedor; ?>" disabled="" id="text-d036" value="<?php echo $vendedor; ?>" name="vendedor" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-radius-10">
            <input type="hidden" name="vendedor" value="<?php echo $vendedor; ?>">
            <input type="hidden" name="dataehora" value="<?php echo $dataLocal; ?>">
          </div>
          <div class="u-form-group u-label-top u-form-group-18">
            <label for="text-717c" class="u-label u-label-15">Parceiro</label>
            <input type="text" placeholder="" id="text-717c" name="parceiro" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-radius-10">
          </div>
          <div class="u-form-group u-form-select u-label-top u-form-group-13">
             <label for="text-0de2" class="u-label u-label-16">Estado/Região</label>
            <div class="u-form-select-wrapper">
              <select id="select-86b5" name="estadoregiao" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-radius-10">
                <option value="Nenhum">Nenhum</option>
                <option value="AC">AC</option>
                <option value="AL">AL</option>
                <option value="AP">AP</option>
                <option value="AM">AM</option>
                <option value="BA">BA</option>
                <option value="CE">CE</option>
                <option value="ES">ES</option>
                <option value="GO">GO</option>
                <option value="MA">MA</option>
                <option value="MT">MT</option>
                <option value="MS">MS</option>
                <option value="MG">MG</option>
                <option value="PA">PA</option>
                <option value="PB">PB</option>
                <option value="PR">PR</option>
                <option value="PE">PE</option>
                <option value="PI">PI</option>
                <option value="RJ">RJ</option>
                <option value="RN">RN</option>
                <option value="RS">RS</option>
                <option value="RO">RO</option>
                <option value="RR">RR</option>
                <option value="SC">SC</option>
                <option value="SP">SP</option>
                <option value="SE">SE</option>
                <option value="TO">TO</option>
                <option value="DF">DF</option>
                <option value="(Latam) Argentina">(Latam) Argentina</option>
                <option value="(Latam) Bolívia">(Latam) Bolívia</option>
                <option value="(Latam) Chile">(Latam) Chile</option>
                <option value="(Latam) Colômbia">(Latam) Colômbia</option>
                <option value="(Latam) Costa Rica">(Latam) Costa Rica</option>
                <option value="(Latam) Cuba">(Latam) Cuba</option>
                <option value="(Latam) Equador">(Latam) Equador</option>
                <option value="(Latam) El Salvador">(Latam) El Salvador</option>
                <option value="(Latam) Guatemala">(Latam) Guatemala</option>
                <option value="(Latam) Haiti">(Latam) Haiti</option>
                <option value="(Latam) Honduras">(Latam) Honduras</option>
                <option value="(Latam) México">(Latam) México</option>
                <option value="(Latam) Nicarágua">(Latam) Nicarágua</option>
                <option value="(Latam) Panamá">(Latam) Panamá</option>
                <option value="(Latam) Paraguai">(Latam) Paraguai</option>
                <option value="(Latam) Peru">(Latam) Peru</option>
                <option value="(Latam) República Dominicana">(Latam) República Dominicana</option>
                <option value="(Latam) Uruguai">(Latam) Uruguai</option>
                <option value="(Latam) Venezuela">(Latam) Venezuela</option>
              </select>
              <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
            </div>
          </div>
          <div class="u-form-group u-label-top u-form-group-20">
            <label for="text-887d" class="u-label u-label-17">Data</label>
            <input type="text" placeholder="<?php echo $dataLocal; ?>" disabled="" value="<?php echo $dataLocal; ?>" id="text-887d" name="datacadastro" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-radius-10">
          </div>
          <div class="u-align-right u-form-group u-form-submit u-label-top">
            <input type="submit" name="" class="u-active-palette-3-base u-border-5 u-border-active-palette-3-base u-border-custom-color-1 u-border-hover-palette-3-base u-btn u-btn-round u-btn-submit u-button-style u-custom-color-1 u-hover-palette-3-base u-radius-10 u-btn-1">
            <input type="submit" value="submit" class="u-form-control-hidden">
          </div>
          <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
          <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
          <input type="hidden" value="" name="recaptchaResponse">
          <input type="hidden" name="formServices" value="6390ed228e54d8247e4e7c26ee7d6bbd">
        </form>
      </div>
    </section>
    
    
    
    <section style="display: none;" class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
        <span>Website Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Website Builder Software</span>
      </a>. 
    </section>
  
</body></html>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Botões de falar e parar</title>
  <style>
    #input {
      width: 100%;
      margin-bottom: 10px;
    }
    #botao-falar {
      background-image: url("https://cdn-icons-png.flaticon.com/512/181/181537.png");
      background-repeat: no-repeat;
      background-size: 80px;
      background-position: center;
      padding: 40px;
      position: fixed;
      bottom: 40px;
      right: 40px;
      border-radius: 50%;
      border: none;
      outline: none;
    }
    #botao-parar {
      padding: 20px;
      font-size: 16px;
      background-color: red;
      color: white;
      position: fixed;
      bottom: 20px;
      right: 20px;
      border-radius: 50%;
      border: none;
      outline: none;
      display: none;
    }
    
    @media (max-width: 600px) {
      #botao-falar {
        background-size: 80px;
        padding: 30px;
        bottom: 10px;
        right: 10px;
      }
      
      #botao-parar {
        padding: 15px;
        bottom: 10px;
        right: 10px;
      }
    }
  </style>
</head>
<body>

  <button id="botao-falar"></button>
  <button id="botao-parar">Parar</button>

  <script>
    const recognition = new webkitSpeechRecognition();
    let finalTranscript = "";

    recognition.continuous = true;
    recognition.interimResults = true;
    recognition.lang = "pt-BR";

    recognition.onresult = function(event) {
      let interimTranscript = "";
      for (let i = event.resultIndex; i < event.results.length; i++) {
        const transcript = event.results[i][0].transcript;
        if (event.results[i].isFinal) {
          finalTranscript += transcript;
        } else {
          interimTranscript += transcript;
        }
      }

      const input = document.getElementById("message-f3f3");
      input.value = finalTranscript + interimTranscript;
    };

    recognition.onend = function() {
      document.getElementById("botao-falar").style.display = "inline";
      document.getElementById("botao-parar").style.display = "none";
    };

    document.getElementById("botao-falar").onclick = function() {
      recognition.start();
      document.getElementById("botao-falar").style.display = "none";
      document.getElementById("botao-parar").style.display = "inline";
    };

    document.getElementById("botao-parar").onclick = function() {
      recognition.stop();
      document.getElementById("botao-falar").style.display = "inline";
      document.getElementById("botao-parar").style.display = "none";
    };
  </script>
</body>
</html>
