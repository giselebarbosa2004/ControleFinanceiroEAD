
<?php

    if(isset($_POST['btnCalcular'])){
        $salario = trim($_POST['salario']);
        $bonus = trim($_POST['bonus']);

        if($salario == '' || $bonus == ''){
            $msgError = '<div class="msgError">Preencher todos os campos obrigatórios!</div>';
        }else{
            
            $aumento = ($salario * $bonus) / 100;
            $resultado = $salario + $aumento;

            if($aumento <= 0){
                $warning = '<div class="warning">Média não encontrada!</div>';
            }else if($aumento > 0 && $aumento <= 100){
                $status = '<div class="vermelho">Aumento Nivel 1.</div>';
            }else if($aumento > 100 && $aumento <= 200){
                $status = '<div class="vermelho">Aumento Nivel 2.</div>';
            }else if($aumento > 200 && $aumento <= 300){
                $status = '<div class="vermelho">Aumento Nivel 3.</div>';
            }else if($aumento > 300 && $aumento <= 400){
                $status = '<div class="vermelho">Aumento Nivel 4.</div>';
            }else{
                $status = '<div class="vermelho">Aumento Nivel 5.</div>';
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
    <title>ativ_4_ex_8
    </title>
</head>
<body>
    <form action="ativ_4_ex_8.php" method="POST">
        <label>Digite um Salário:</label>
        <input type="number" name="salario" value="<?= isset($salario) ? $salario : null  ?>">
        <label>Digite um Aumento (%):</label>
        <input type="number" name="bonus" value="<?= isset($bonus) ? $bonus : ''  ?>">
        <button name="btnCalcular">CALCULAR</button>
    </form>
    <span>Total do Aumento:</span>
    <br>
    <input disabled value="R$ <?= isset($aumento) ? number_format($aumento, 2, ',', '.') : '' ?>">
    <br>
    <span>Resultado Final:</span>
    <br>
    <input disabled value="R$ <?= isset($resultado) ? number_format($resultado, 2, ',', '.') : '' ?>">

    <!-- ==== Validações da Programação: ==== -->
    <?= isset($msgError) ? $msgError : ''  ?>
    <?= isset($warning) ? $warning : ''  ?>
    <?= isset($status) ? $status : ''  ?>
    <!-- ==== Fim das Validações! ==== -->
</body>
</html>
