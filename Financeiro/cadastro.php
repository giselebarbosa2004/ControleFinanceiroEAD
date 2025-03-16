<?php

require_once '../DAO/UsuarioDAO.php';

if(isset($_POST['btnFinalizar'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $rsenha = $_POST['rsenha'];

    $objdao = new UsuarioDAO();

    $ret = $objdao->CriarCadastro($nome, $email, $senha, $rsenha);
   
}


?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
include_once '_head.php';
?>

<body>
    <div class="container">
        <div class="row text-center  ">
            <div class="col-md-12">
                <br /><br />
                <?php include_once '_msg.php'?>
                <h2> Cadastrar uma Conta.</h2>
                <h5>(Crie uma conta em nosso Sistema de Controle Financeiro)</h5>
                <br />
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>Preencha todos os dados:</strong>
                    </div>
                    <div class="panel-body">
                        <br />
                        <form method="post" action="cadastro.php">
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-circle-o-notch"></i></span>
                                <input type="text" class="form-control" placeholder="Digite seu Nome aqui" name="nome" id="nome">
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon">@</span>
                                <input type="text" class="form-control" placeholder="Digite seu E-mail aqui" name="email" id="email" />
                            </div>
                            <span style="font-size: 10px; font-style: italic;">"A Senha deve conter entre 6 e 8 caracteres!"</span>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control" placeholder="Digite sua Senha" name="senha" id="senha"/>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control" placeholder="Digite novamente sua Senha" name="rsenha" id="rsenha"/>
                            </div>
                            <button class="btn btn-success" name="btnFinalizar" onclick="return ValidarCadastro()">Finalizar Cadastro</button>
                            <hr />
                            <span>Já possui cadastro? </span> <a href="login.php">Clique aqui</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>