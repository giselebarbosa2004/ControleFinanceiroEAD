
<?php

    if(isset($_POST['btnCalcular'])){
        $nome = trim($_POST['nome']);
        $peso = trim($_POST['peso']);
        $altura = trim($_POST['altura']);

        if($nome == '' || $peso == '' || $altura == ''){
            $msgError = '<div class="msgError">Preencher todos os campos obrigatórios!</div>';
        }else{

            $imc = round($peso / ($altura * $altura) ,2);

            if($imc <= 0){
                $warning = '<div class="warning">IMC não encontrado!</div>';
            }else if($imc > 0 && $imc <= 20){
                $status = '<div class="vermelho">Magro.</div>';
            }else if($imc > 20 && $imc <= 25){
                $status = '<div class="vermelho">Peso Ideal.</div>';
            }else if($imc > 25 && $imc >= 30){
                $status = '<div class="vermelho">Obeso.</div>';
            }else{
                $status = '<div class="vermelho">Muito Obeso.</div>';
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ativ_5_ex_8</title>
</head>
<body>
    <form action="ativ_5_ex_8.php" method="POST">
        <label>Digite seu Nome:</label>
        <input type="text" name="nome" value="<?= isset($nome) ? $nome : '' ?>">
        <label>Digite seu Peso:</label>
        <input type="number" name="peso" value="<?= isset($peso) ? $peso : '' ?>">
        <label>Digite sua Altura:</label>
        <input type="number" name="altura" value="<?= isset($altura) ? $altura : '' ?>">
        <button name="btnCalcular">CALCULAR</button>
    </form>
    <span>Resultado do IMC:</span>
    <br>
    <input disabled value="<?= isset($imc) ? $imc : '' ?>">
    
    <!-- ==== Validações da Programação: ==== -->
    <?= isset($msgError) ? $msgError : ''  ?>
    <?= isset($warning) ? $warning : ''  ?>
    <?= isset($status) ? $status : ''  ?>
    <!-- ==== Fim das Validações! ==== -->
</body>
</html>
