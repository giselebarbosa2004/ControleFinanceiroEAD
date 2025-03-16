
<?php

    if(isset($_POST['btnCalcular'])){
        $salario = trim($_POST['btnCalcular']);

        if($salario == ''){
            $msgError = '<div class="msgError">Preencher todos os campos obrigatórios!</div>';
        }else{

            $primeiroBonus = ($salario *15) / 100;
            $segundoBonus = ($salario *18) / 100;
            $totalBonus = $primeiroBonus + $segundoBonus;
            $salarioTotal = $salario + $totalBonus;

            if($totalBonus < 0){
                $warning = '<div class="warning">Aumento não encontrado!</div>';
            }else if($totalBonus >= 0 && $totalBonus <= 100 ){
                $status = '<div class="vermelho">Aumento RUIM.</div>';
            }else if($totalBonus > 100 && $totalBonus <= 200){
                $status = '<div class="vermelho">Aumento RAZOAVEL".</div>';
            }else if($totalBonus > 200 && $totalBonus <= 300){
                $status = '<div class="vermelho">Aumento BOM.</div>';
            }else if($totalBonus > 300 && $totalBonus <= 400){
                $status = '<div class="vermelho">Aumento ÓTIMO.</div>';
            }else{
                $status = '<div class="vermelho">Aumento EXCELENTE.</div>';
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
    <title>ativ_6_ex_8.</title>
</head>
<body>
    <form action="ativ_6_ex_8.php" method="POST">
        <label>Digite seu Salário:</label>
        <input type="number" name="salario" value="<?= isset($salario) ? $salario : '' ?>">
        <button  name="btnCalcular">CALCULAR</button>
    </form>
    <span>Aumento de 15%:</span>
    <br>
    <input disabled value="R$ <?= isset($primeiroBonus) ? number_format($primeiroBonus, 2, ',', '.') : '' ?>">
    <br>
    <span>Aumento de 18%:</span>
    <br>
    <input disabled value="R$ <?= isset($segundoBonus) ? number_format($segundoBonus, 2, ',', '.') : '' ?>">
    <br>
    <span>Total dos Aumentos:</span>
    <br>
    <input disabled value="R$ <?= isset($totalBonus) ? number_format($totalBonus, 2, ',', '.') : '' ?>">
    <br>
    <span>Salário Final:</span>
    <br>
    <input disabled value="R$ <?= isset($salarioTotal) ? number_format($salarioTotal, 2, ',', '.') : '' ?>">

    <!-- ==== Validações da Programação: ==== -->
    <?= isset($msgError) ? $msgError : ''  ?>
    <?= isset($warning) ? $warning : ''  ?>
    <?= isset($status) ? $status : ''  ?>
    <!-- ==== Fim das Validações! ==== -->
</body>
</html>
