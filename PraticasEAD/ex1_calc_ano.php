<?php

    $janeiro = '';
    $fevereiro = '';
    $marco = '';
    $abril = '';
    $maio = '';
    $junho = '';
    $julho = '';
    $agosto = '';
    $setembro = '';
    $outubro = '';
    $novembro = '';
    $dezembro = '';
    $resultado = '';

    if(isset($_POST['btnSomar'])){
        $janeiro = trim($_POST['janeiro']);
        $fevereiro = trim($_POST['fevereiro']);
        $marco = trim($_POST['marco']);
        $abril = trim($_POST['abril']);
        $maio = trim($_POST['maio']);
        $junho = trim($_POST['junho']);
        $julho = trim($_POST['julho']);
        $agosto = trim($_POST['agosto']);
        $setembro = trim($_POST['setembro']);
        $outubro = trim($_POST['outubro']);
        $novembro = trim($_POST['novembro']);
        $dezembro = trim($_POST['dezembro']);

        $resultado = $janeiro + $fevereiro + $marco + $abril + $maio + $junho + $julho + $agosto + $setembro + $outubro + $novembro + $dezembro;
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>ex1_calc_ano.php</title>
</head>
<body>
    <form action="ex1_calc_ano.php" method="POST">
        <label>Ganhos de Janeiro:</label>
        <input type="number" name="janeiro" value="<?= $janeiro ?>">
        <br>
        <label>Ganhos de Fevereiro:</label>
        <input type="number" name="fevereiro" value="<?= $fevereiro ?>">
        <br>
        <label>Ganhos de Março:</label>
        <input type="number" name="marco" value="<?= $marco ?>">
        <br>
        <label>Ganhos de Abril:</label>
        <input type="number" name="abril" value="<?= $abril ?>">
        <br>
        <label>Ganhos de Maio:</label>
        <input type="number" name="maio" value="<?= $maio ?>">
        <br>
        <label>Ganhos de Junho:</label>
        <input type="number" name="junho" value="<?= $junho ?>">
        <br>
        <label>Ganhos de Julho:</label>
        <input type="number" name="julho" value="<?= $julho ?>">
        <br>
        <label>Ganhos de Agosto:</label>
        <input type="number" name="agosto" value="<?= $agosto ?>">
        <br>
        <label>Ganhos de Setembro:</label>
        <input type="number" name="setembro" value="<?= $setembro ?>">
        <br>
        <label>Ganhos de Outubro:</label>
        <input type="number" name="outubro" value="<?= $outubro ?>">
        <br>
        <label>Ganhos de Novembro:</label>
        <input type="number" name="novembro" value="<?= $novembro ?>">
        <br>
        <label>Ganhos de Dezembro:</label>
        <input type="number" name="dezembro" value="<?= $dezembro ?>">
        <br>
        <button name="btnSomar">SOMAR</button>
    </form>
    <hr>
    <span>Resultado:</span>
    <input disabled value="<?= $resultado ?>">
</body>
</html>