<?php
include("cabecalho.php");
include("../config.php");
$query = "select * from segundavia";
$resultado = mysqli_query($conexao, $query);

    


  
?>
<style type="text/css">
    
.fundo {
    background: #ffff;
    width: 2050;
}


</style>
    <div class="col-md-SS">
        <div class="fundo">
            <div class="card-header bg-light">Segunda via do cliente</div>
            <div class="card-body">

                <table class="table table-bordered">
                    <thead>
                    <tr>

                        <th width="40%">Id</th>
                        <th width="40%">Nome</th>
                        <th width="35%">cpf</th>
                        <th width="40%">vencimento</th>
                        <th width="35%">Data</th>
                        <th width="40%">Preço</th>
                        <th width="35%">Numero Leto</th>
                        <th width="40%">Endereço</th>
                        <th width="35%">Numero</th>
                        <th width="40%">Bairro</th>
                        <th width="35%">Cidade</th>
                        <th width="40%">Estado</th>
                        <th width="35%">Cep</th>
                        <th width="40%">Celular</th>
                        <th width="35%">E-mail</th>
                        <th width="60%">Status do Pedido</th>
                        <th width="35%">Nome do produto</th>
                        <th width="35%">Fazer</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while($exibe = mysqli_fetch_assoc($resultado)){
                      $id = $exibe['id'];
    $nomecliente = $exibe['nomecliente'];
    $cpf = $exibe['cpf'];
    $vencimento = $exibe['vencimento'];
    $hoje = $exibe['hoje'];
    $preco = $exibe['preco']; 
    $numeroboleto = $exibe['numeroboleto'];
    $endereco = $exibe['endereco'];
    $numero = $exibe['numero'];
    $bairro = $exibe['bairro'];
    $cidade = $exibe['cidade'];
    $estado = $exibe['estado'];
    $cep = $exibe['cep'];
    $celular = $exibe['celular'];
    $email = $exibe['email'];
    $statuspedido = $exibe['statuspedido'];
    $nomeproduto = $exibe['nomeproduto'];


                        ?>
                        <tr>
                        <td><?=wordwrap($exibe['id'], 15);?></td>
                        <td><?=wordwrap($exibe['nomecliente'], 15);?></td>
                        <td><?=wordwrap($exibe['cpf'], 15);?></td>
                        <td><?=wordwrap($exibe['vencimento'], 15);?></td>
                        <td><?=wordwrap($exibe['hoje'], 15);?></td>
                        <td><?=wordwrap($exibe['preco'], 15);?></td>
                        <td><?=wordwrap($exibe['numeroboleto'], 15);?></td>
                        <td><?=wordwrap($exibe['endereco'], 15);?></td>
                        <td><?=wordwrap($exibe['numero'], 15);?></td>
                        <td><?=wordwrap($exibe['bairro'], 15);?></td>
                        <td><?=wordwrap($exibe['cidade'], 15);?></td>
                        <td><?=wordwrap($exibe['estado'], 15);?></td>
                        <td><?=wordwrap($exibe['cep'], 15);?></td>
                        <td><?=wordwrap($exibe['celular'], 15);?></td>
                        <td><?=wordwrap($exibe['email'], 15);?></td>
                        <td><?=wordwrap($exibe['statuspedido'], 15);?></td>
                        <td><?=wordwrap($exibe['nomeproduto'], 15);?></td>
                        <td> <button class="btn btn-rounded btn-danger"><ion-icon name="trash"></ion-icon></button>
                            <button class="btn btn-rounded btn-info"><a href="editarsegundavia.php?id=<?php echo $id; ?>"><ion-icon name="hammer"></ion-icon></button>
                            <a href="#" class="btn btn-rounded btn-success"><ion-icon name="eye"></a></a></td>
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