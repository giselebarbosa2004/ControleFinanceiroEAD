<?php
require_once '../DAO/UtilDAO.php';
UtilDAO::VerificarLogado();
require_once '../DAO/EmpresaDAO.php' ;


if(isset($_POST['btnGravar'])){
    $nome = $_POST['nome'];
    $tel = $_POST['telefone'];
    $end = $_POST['endereco'];

    $objdao = new EmpresaDAO();

    $ret = $objdao->CadastrarEmpresa($nome, $tel, $end);
}


?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<?php
include_once '_head.php'
?>

<body>
    <div id="wrapper">
        <?php
        include_once '_topo.php';
        include_once '_menu.php';
        ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <?php include_once '_msg.php' ?>
                        <h2>Nova Empresa</h2>
                        <h5>Aqui você poderá cadastrar todas as suas empresas. </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <form method="post" action="nova_empresa.php">
                    <div class="form-group">
                        <label>Nome da empresa*</label>
                        <input class="form-control" placeholder="Digite o nome da empresa..." name="nome" id="nomeempresa" />
                    </div>
                    <div class="form-group">
                        <label>Telefone</label>
                        <input class="form-control" placeholder="Digite o telefone da empresa (opcional)..." name="telefone"/>
                    </div>
                    <div class="form-group">
                        <label>Endereço</label>
                        <input class="form-control" placeholder="Digite o endereço da empresa (opcional)..." name="endereco"/>
                    </div>
                    <button type="submit" class="btn btn-success" name="btnGravar" onclick="return ValidarEmpresa()">Gravar</button>
                </form>
            </div>

            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>



</body>

</html>