
<?php

    // Variáveis Globais.
    $numero_1 = '';
    $numero_2 = '';
    $numero_3 = '';
    $calculo = '';
    $msgError = '';
    $status = '';

    if(isset($_POST['btnCalcular'])){
        $numero_1 = trim(($_POST['numero_1']));
        $numero_2 = trim(($_POST['numero_2']));
        $numero_3 = trim(($_POST['numero_3']));

        if($numero_1 == '' || $numero_2 == '' || $numero_3 == ''){
            $msgError = '<div class="msgError">Preencher todos os campos obrigatórios!</div>';
        }else{

            $calculo = $numero_2 / 2;

            if($numero_1 > $calculo || $numero_3 < $calculo){
                $status = '<div class="warning">O RESULTADO NÃO esta entre o Primeiro número ' . $numero_1 . ' e o Terceiro número ' . $numero_3 . '!</div>';
            }else{
                $status = '<div class="verde">O RESULTADO ESTA entre o Primeiro número ' . $numero_1 . ' e o Terceiro número ' . $numero_3 . '!</div>';
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
    <title>atividade_2_ex_8.php</title>
</head>
<body>
    <form action="ativ_2_ex_8.php" method="POST">
        <label>Digite o Primeiro Valor:</label>
        <input type="number" name="numero_1" value="<?= $numero_1 ?>">
        <label>Digite o Segundo Valor:</label>
        <input type="number" name="numero_2" value="<?= $numero_2 ?>">
        <label>Digite o Terceiro Valor:</label>
        <input type="number" name="numero_3" value="<?= $numero_3 ?>">
        <button name="btnCalcular">CALCULAR</button>
    </form>
        
    <hr>

    <span>Resultado Final:</span>
    <input disabled value="<?= $calculo ?>">

    <!-- Notificações do Algoritmo em PHP (Validações)! -->
    <hr>
    <?= $msgError ?>
    <br>
    <?= $status ?>
    <hr>
    <!-- ============= Fim da Validações! ============= -->
</body>
</html>
