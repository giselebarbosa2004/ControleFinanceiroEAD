<?php
require_once '../DAO/UsuarioDAO.php';

if(isset($_POST['btnAcessar'])){
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $objdao = new UsuarioDAO();

    $ret = $objdao->ValidarLogin($email, $senha);


}






?>




<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
include_once '_head.php';
?>
<body>
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <?php include_once '_msg.php' ?>
                <h2> Sistema de Controle Financeiro.</h2>
                <h5>(Realize seu Login de acesso aqui)</h5>
                <br />
            </div>
        </div>
        <div class="row ">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong> Preencha todos os dados: </strong>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="login.php">
                            <br />
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                                <input type="text" class="form-control" placeholder="Digite seu E-mail aqui" name="email" id="email"/>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control" placeholder="Digite sua senha aqui" name="senha" id="senha"/>
                            </div>
                            <button class="btn btn-primary" name="btnAcessar" onclick="return ValidarLogin()">Acessar</button>
                                <hr />
                                <span>Não possui uma Conta?</span><a href="cadastro.php"> Clique aqui... </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>

</body>

</html>