<?php
include("cabecalho.php");
include("../config.php");
$query = "select * from images ORDER BY id DESC";
$resultado = mysqli_query($conexao, $query);



?>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-light">Cadastro Rapido</div>
            <div class="card-body">

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th width="10%"></th>
                        <th width="55%">Fichas Cadastro rapido</th>
                        <th width="12%">Maquina de Interesse</th>
                        <th width="12%">Vendedor</th>
                        <th width="19%">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while($exibe = mysqli_fetch_assoc($resultado)){
 

              
                        $imagensx = '../uploads/'.$exibe['file_name'];
                        ?>
                        <tr>
                        <td><img width="100%" height="100%" src="<?php echo $imagensx; ?>"></td>
                        <td>Empresa: <?=$exibe['nomeempresa'];?><br> Cliente: <?=$exibe['nomecliente'];?><br> Whatsapp: <?=$exibe['whatsapp'];?></b><br> comentario: <?=$exibe['comentario'];?><br> <b>Cliente HOT: <?=$exibe['clientehot'];?></b><br> <b>Visita agendada:  <?php if (!empty($exibe['agendarvisita'])) { echo date('d/m/Y', strtotime($exibe['agendarvisita'])); } else { echo "Sem agendamento"; } ?></b><br> <b>Estado: <?=$exibe['estadoregiao'];?></b></td>
                        <td><b><?=$exibe['maquinasubs'];?></b></td>
                        <td><b><?=$exibe['vendedor'];?></b></td>
               
                       <td><a href="excluirfoto.php?id=<?=$exibe['id']?>" class="btn btn-rounded btn-success"> <button class="btn btn-rounded btn-danger"><ion-icon name="trash"></ion-icon></button>
                            
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