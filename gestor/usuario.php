<?php
include('cabecalho.php');
include('../config.php');
$query = "select * from admin";
$resultado = mysqli_query($conexao,$query);
?>
<div class="col-md-12">
    <div class="card">
        <div class="card-header bg-light">Usuario</div>
        <div class="card-body">
            <div class="form-group">
                <form action="salvarusr.php" method="post">

                    <div class="">
                        <label for="numeroboleto" class="form-control-label">Usuario:</label>
                        <div class="input-group input-group-lg mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" name="user" id="user" placeholder="admin" required>
                        </div>
                    </div>
                    <div class="">
                        <label for="numeroboleto" class="form-control-label">Senha:</label>
                        <div class="input-group input-group-lg mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                            </div>
                            <input type="password" class="form-control" name="senha" id="senha" placeholder="********" required>
                        </div>
                    </div>

                    <div class="">
                            <button type="submit" class="btn btn-block btn-success btn-lg">Salvar</button>
                     </div>

                </form></div>

        </div>
    </div>
</div>
<?php
include('rodape.php');
?>
