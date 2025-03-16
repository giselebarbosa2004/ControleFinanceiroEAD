<?php
//Variáveis globais:
$bimestre_1 = '';
$bimestre_2 = '';
$bimestre_3 = '';
$bimestre_4 = '';
$msgError = '';
$warning = '';
$status = '';
$media = '';

if(isset($_POST['btnCalcular'])){
    $bimestre_1 = trim($_POST['bim_1']);
    $bimestre_2 = trim($_POST['bim_2']);
    $bimestre_3 = trim($_POST['bim_3']);
    $bimestre_4 = trim($_POST['bim_4']);

    if($bimestre_1 == ' ' || $bimestre_2 == ' ' || $bimestre_3 == ' ' || $bimestre_4 == ' ' ){
        $msgError = '<div class="msgError">Preencher todos os campos obrigatórios!</div>';
    }else{

        $media = ( $bimestre_1 + $bimestre_2 + $bimestre_3 +  $bimestre_4) / 4;

        if($media <= 0){
            $warning = '<div class="warning">Média não encontrada!</div>';
        }else if($media > 0 && $media <40){
            $status = '<div class="vermelho">Aluno Reprovado!</div>';
        }else if($media >= 40 && $media < 60){
            $status = '<div class="laranja">Aluno em Exame!</div>';
        }else{
            $status = '<div class="verde">Aluno Aprovado!</div>';
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
    <title>ativ_3_ex_8</title>

</head>
<body>
    <form action="ativ_3_ex_8.php" method="POST">
<label>Digite a nota do 1º Bimestre;</label>
<input type="number" name="bim_1" value="<?+ $bimestre_1 ?>">
<label>Digite a nota do 2º Bimestre;</label>
<input type="number" name="bim_2" value="<?+ $bimestre_2 ?>">
<label>Digite a nota do 3º Bimestre;</label>
<input type="number" name="bim_3" value="<?+ $bimestre_3?>">
<label>Digite a nota do 4º Bimestre;</label>
<input type="number" name="bim_4" value="<?+ $bimestre_4 ?>">
<button name="btnCalcular">CALCULAR</button>

    </form>
<hr>

<span>Resultado Final:</span>
<input disabled value="<?= $media ?>">

<!-- Notificações do Algorítimo em PHP (Validações)! -->

<hr>
<?= $msgError ?>
<br>
<?= $warning ?>
<br>
<?= $status ?>
<hr>

<!-- ============ Fim das Validações! ============= -->
    
</body>
</html>