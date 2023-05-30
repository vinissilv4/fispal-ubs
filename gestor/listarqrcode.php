<?php
include("cabecalho.php");
include("../config.php");
$query = "select * from qrcode ORDER BY id DESC";
$resultado = mysqli_query($conexao, $query);

?>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-light">Cadastro Rapido</div>
            <div class="card-body">

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th width="30%">Informação do QR code</th>
                        <th width="15%">Data e Hora</th>
                        <th width="25%">Informação extra</th>
                        <th width="20%">Maquina</th>
                        <th width="35%">Visita agendada</th>
                        <th width="12%">Estado</th>
                        <th width="12%">Cliente HOT</th>
                        <th width="12%">Vendedor</th>
                        <th width="19%">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while($exibe = mysqli_fetch_assoc($resultado)){ 
              
                       
                        ?>
                        <tr>
                        <td><b>Qrcode: <?=wordwrap($exibe['qrcodeinfo'], 15);?></b></td>
                        <td><b>Data e Hora: <?=wordwrap($exibe['dataehora'], 15);?></b></td>
                        <td><b><?=$exibe['infoextra'];?></b></td>
                        <td><b><?=$exibe['maquinasubs'];?></b></td>
                        <td><b><?php if (!empty($exibe['agendarvisita'])) { echo date('d/m/Y', strtotime($exibe['agendarvisita'])); } else { echo "Sem agendamento"; } ?></b></td>
                        <td><b><?=$exibe['estadoregiao'];?></b></td>
                        <td><b><?=$exibe['clientehot'];?></b></td>
                        <td><b><?=$exibe['vendedor'];?></b></td>
                       <td><a href="excluirqrcode.php?id=<?=$exibe['id']?>" class="btn btn-rounded btn-success"> <button class="btn btn-rounded btn-danger"><ion-icon name="trash"></ion-icon></button>
                            
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