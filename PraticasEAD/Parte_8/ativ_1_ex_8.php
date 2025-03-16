
<?php

    // Variáveis Globais.
    $valor_1 = '';
    $valor_2 = '';
    $valor_3 = '';
    $valor_4 = '';
    $valor_5 = '';
    $resultado = '';
    $msgError = '';
    $warning = '';
    $status = '';

    if(isset($_POST['btnCalcular'])){
        $valor_1 = trim($_POST['valor_1']);
        $valor_2 = trim($_POST['valor_2']);
        $valor_3 = trim($_POST['valor_3']);
        $valor_4 = trim($_POST['valor_4']);
        $valor_5 = trim($_POST['valor_5']);

        if($valor_1 == '' || $valor_2 == '' || $valor_3 == '' || $valor_4 == '' || $valor_5 == ''){
            $msgError = '<div class="msgError">Preencher todos os campos obrigatórios!</div>';
        }else{

            $resultado = (($valor_1 + $valor_2) * 2) + $valor_3 + $valor_4 + $valor_5;

            if($resultado <= 0){
                $warning = '<div class="warning">Resultado não encontrado!</div>';
            }else if($resultado > 0 && $resultado < 100){
                $status = '<div class="verde">O RESULTADO é MENOR que 100!</div>';
            }else if($resultado > 100){
                $status = '<div class="verde">O RESULTADO é MAIOR que 100!</div>';
            }else{
                $status = '<div class="verde">O RESULTADO é IGUAL a 100!</div>';
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ativ_1_ex_8</title>
</head>
<body>
    <form action="ativ_1_ex_8.php" method="POST">
        <label>Digite o Primeiro Número:</label>
        <input type="number" name="valor_1" value="<?= $valor_1 ?>">
        <label>Digite o Segundo Número:</label>
        <input type="number" name="valor_2" value="<?= $valor_2 ?>">
        <label>Digite o Terceiro Número:</label>
        <input type="number" name="valor_3" value="<?= $valor_3 ?>">
        <label>Digite o Quarto Número:</label>
        <input type="number" name="valor_4" value="<?= $valor_4 ?>">
        <label>Digite o Quinto Número:</label>
        <input type="number" name="valor_5" value="<?= $valor_5 ?>">
        <button name="btnCalcular">CALCULAR</button>
    </form>
    
    <hr>

    <span>Resultado Final:</span>
    <input disabled value="<?= $resultado ?>">

    <!-- Notificações do Algoritmo em PHP (Validações)! -->
    <hr>
    <?= $msgError ?>
    <br>
    <?= $warning ?>
    <br>
    <?= $status ?>
    <hr>
    <!-- ============= Fim da Validações! ============= -->
</body>
</html>
