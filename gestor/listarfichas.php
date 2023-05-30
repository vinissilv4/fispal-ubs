<?php
include("cabecalho.php");
include("../config.php");
$query = "select * from dadosficha ORDER BY id DESC";
$resultado = mysqli_query($conexao, $query);
?>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-light">Fichas</div>
            <div class="card-body">

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th width="10%"></th>
                        <th width="55%">Fichas Cadastradas</th>
                        <th width="12%">Vendedor</th>
                        <th width="19%">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while($exibe = mysqli_fetch_assoc($resultado)){ 
                        $imagensx = explode(",", "https://cdn-icons-png.flaticon.com/512/1909/1909693.png");
                        ?>
                        <tr>
                        <td><img width="65px" height="65px" src="<?=$imagensx[0];?>"></td>
                        <td>
                         Empresa: <?= wordwrap($exibe['nomeempresa'], 15); ?><br>
                         Cliente: <?= wordwrap($exibe['nomecliente'], 15); ?><br>
                         Contato: <?= wordwrap($exibe['email'], 15); ?> / Whatsapp: <?= wordwrap($exibe['whatsapp'], 15); ?> / Fixo: <?= wordwrap($exibe['telefonefixo'], 15); ?><br>
                         ClienteHot: <b><?= wordwrap($exibe['clientehot'], 15); ?></b><br>
                         Data: <?= wordwrap($exibe['dataehora'], 15); ?><br>
                         Região: <?= wordwrap($exibe['estadoregiao'], 15); ?><br>
                         Visita agendada: <?php if (!empty($exibe['agendarvisita'])) { echo date('d/m/Y', strtotime($exibe['agendarvisita'])); } else { echo "Sem agendamento"; } ?> Horario:  <?php if (!empty($exibe['horariovisita'])) { echo date('d/m/Y', strtotime($exibe['horariovisita'])); } else { echo "Sem horario marcado"; } ?><br>
                         Demo agendada: <?php if (!empty($exibe['agendardemo'])) { echo date('d/m/Y', strtotime($exibe['agendardemo'])); } else { echo "Sem agendamento"; } ?> Horario: <?php if (!empty($exibe['horariodemo'])) { echo date('d/m/Y', strtotime($exibe['horariodemo'])); } else { echo "Sem horario marcado"; } ?><br>
                         Tipo Cadastro: <?php if (!empty($exibe['tipocadastro'])) { echo ($exibe['tipocadastro']); } else { echo "Sem cadastro"; } ?>
                         <br>
                         Informação QRcode: <?php if (!empty($exibe['qrcodeinfo'])) { echo ($exibe['qrcodeinfo']); } else { echo "Sem QRCODE"; } ?>
                         <br>
                        Foto: 
<?php if (!empty($exibe['file_name'])) { ?>
  <a href="../uploads/<?= $exibe['file_name'] ?>"><b>Abrir foto</b>
    
  </a>
<?php } else { ?>
  Sem foto
<?php } ?>

</td>

                        <td><b><?=$exibe['vendedor'];?></b></td>
                        <td><a href="excluirinfo.php?id=<?=$exibe['id']?>" class="btn btn-rounded btn-success"> <button class="btn btn-rounded btn-danger"><ion-icon name="trash"></ion-icon></button>
                            
                            </a></a></td>
                    </tr>
                  <?php  }; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
<?php
include("rodape.php");
?>