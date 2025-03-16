<?php

    $gJaneiro = '';
    $gFevereiro = '';
    $gMarco = '';
    $gAbril = '';
    $gMaio = '';
    $gJunho = '';
    $gJulho = '';
    $gAgosto = '';
    $gSetembro = '';
    $gOutubro = '';
    $gNovembro = '';
    $gDezembro = '';
    $pJaneiro = '';
    $pFevereiro = '';
    $pMarco = '';
    $pAbril = '';
    $pMaio = '';
    $pJunho = '';
    $pJulho = '';
    $pAgosto = '';
    $pSetembro = '';
    $pOutubro = '';
    $pNovembro = '';
    $pDezembro = '';
    $totalGanhos = '';
    $totalPerdas = '';
    $lucroReal = '';
    $lucroJaneiro = '';
    $lucroFevereiro = '';
    $lucroMarco = '';
    $lucroAbril = '';
    $lucroMaio = '';
    $lucroJunho = '';
    $lucroJulho = '';
    $lucroAgosto = '';
    $lucroSetembro = '';
    $lucroOutubro = '';
    $lucroNovembro = '';
    $lucroDezembro = '';

    if(isset($_POST['btnCalcular'])){
        $gJaneiro = trim($_POST['gJaneiro']);
        $gFevereiro = trim($_POST['gFevereiro']);
        $gMarco = trim($_POST['gMarco']);
        $gAbril = trim($_POST['gAbril']);
        $gMaio = trim($_POST['gMaio']);
        $gJunho = trim($_POST['gJunho']);
        $gJulho = trim($_POST['gJulho']);
        $gAgosto = trim($_POST['gAgosto']);
        $gSetembro = trim($_POST['gSetembro']);
        $gOutubro = trim($_POST['gOutubro']);
        $gNovembro = trim($_POST['gNovembro']);
        $gDezembro = trim($_POST['gDezembro']);
        $pJaneiro = trim($_POST['pJaneiro']);
        $pFevereiro = trim($_POST['pFevereiro']);
        $pMarco = trim($_POST['pMarco']);
        $pAbril = trim($_POST['pAbril']);
        $pMaio = trim($_POST['pMaio']);
        $pJunho = trim($_POST['pJunho']);
        $pJulho = trim($_POST['pJulho']);
        $pAgosto = trim($_POST['pAgosto']);
        $pSetembro = trim($_POST['pSetembro']);
        $pOutubro = trim($_POST['pOutubro']);
        $pNovembro = trim($_POST['pNovembro']);
        $pDezembro = trim($_POST['pDezembro']);

        $totalGanhos = $gJaneiro + $gFevereiro + $gMarco + $gAbril + $gMaio + $gJunho + $gJulho + $gAgosto + $gSetembro + $gOutubro + $gNovembro + $gDezembro;
        $totalPerdas = $pJaneiro + $pFevereiro + $pMarco + $pAbril + $pMaio + $pJunho + $pJulho + $pAgosto + $pSetembro + $pOutubro + $pNovembro + $pDezembro;
        $lucroReal = $totalGanhos - $totalPerdas;

        $lucroJaneiro = $gJaneiro - $pJaneiro;
        $lucroFevereiro = $gFevereiro - $pFevereiro;
        $lucroMarco = $gMarco - $pMarco;
        $lucroAbril = $gAbril - $pAbril;
        $lucroMaio = $gMaio - $pMaio;
        $lucroJunho = $gJunho - $pJunho;
        $lucroJulho = $gJulho - $pJulho;
        $lucroAgosto = $gAgosto - $pAgosto;
        $lucroSetembro = $gSetembro - $pSetembro;
        $lucroOutubro = $gOutubro - $pOutubro;
        $lucroNovembro = $gNovembro - $pNovembro;
        $lucroDezembro = $gDezembro - $pDezembro;
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>ex3_calc_ano.php</title>
</head>
<body>
    <h2>Calculos de Ganhos e Perdas (Relatório).</h2>
    <br>
    <form action="ex3_calc_ano.php" method="POST">
        <label>Ganhos de Janeiro:</label>
        <input type="number" name="gJaneiro" value="<?= $gJaneiro ?>">
        <label>Perdas de Janeiro:</label>
        <input type="number" name="pJaneiro" value="<?= $pJaneiro ?>">
        <hr>
        <label>Ganhos de Fevereiro:</label>
        <input type="number" name="gFevereiro" value="<?= $gFevereiro ?>">
        <label>Perdas de Fevereiro:</label>
        <input type="number" name="pFevereiro" value="<?= $pFevereiro ?>">
        <hr>
        <label>Ganhos de Março:</label>
        <input type="number" name="gMarco" value="<?= $gMarco ?>">
        <label>Perdas de Março:</label>
        <input type="number" name="pMarco" value="<?= $pMarco ?>">
        <hr>
        <label>Ganhos de Abril:</label>
        <input type="number" name="gAbril" value="<?= $gAbril ?>">
        <label>Perdas de Abril:</label>
        <input type="number" name="pAbril" value="<?= $pAbril ?>">
        <hr>
        <label>Ganhos de Maio:</label>
        <input type="number" name="gMaio" value="<?= $gMaio ?>">
        <label>Perdas de Maio:</label>
        <input type="number" name="pMaio" value="<?= $pMaio ?>">
        <hr>
        <label>Ganhos de Junho:</label>
        <input type="number" name="gJunho" value="<?= $gJunho ?>">
        <label>Perdas de Junho:</label>
        <input type="number" name="pJunho" value="<?= $pJunho ?>">
        <hr>
        <label>Ganhos de Julho:</label>
        <input type="number" name="gJulho" value="<?= $gJulho ?>">
        <label>Perdas de Julho:</label>
        <input type="number" name="pJulho" value="<?= $pJulho ?>">
        <hr>
        <label>Ganhos de Agosto:</label>
        <input type="number" name="gAgosto" value="<?= $gAgosto ?>">
        <label>Perdas de Agosto:</label>
        <input type="number" name="pAgosto" value="<?= $pAgosto ?>">
        <hr>
        <label>Ganhos de Setembro:</label>
        <input type="number" name="gSetembro" value="<?= $gSetembro ?>">
        <label>Perdas de Setembro:</label>
        <input type="number" name="pSetembro" value="<?= $pSetembro ?>">
        <hr>
        <label>Ganhos de Outubro:</label>
        <input type="number" name="gOutubro" value="<?= $gOutubro ?>">
        <label>Perdas de Outubro:</label>
        <input type="number" name="pOutubro" value="<?= $pOutubro ?>">
        <hr>
        <label>Ganhos de Novembro:</label>
        <input type="number" name="gNovembro" value="<?= $gNovembro ?>">
        <label>Perdas de Novembro:</label>
        <input type="number" name="pNovembro" value="<?= $pNovembro ?>">
        <hr>
        <label>Ganhos de Dezembro:</label>
        <input type="number" name="gDezembro" value="<?= $gDezembro ?>">
        <label>Perdas de Dezembro:</label>
        <input type="number" name="pDezembro" value="<?= $pDezembro ?>">
        <br>
        <button name="btnCalcular">CALCULAR</button>
    </form>

    <hr>

    <h2>Relatórios:</h2>

    <p>
        <span>Total de Ganhos:</span>
        <input disabled value="<?= $totalGanhos ?>">
        <span>Total de Perdas:</span>
        <input disabled value="<?= $totalPerdas ?>">
        <span>Lucro Real Anual:</span>
        <input disabled value="<?= $lucroReal ?>">
    </p>
    <p>
        <span>Lucro Real de Janeiro:</span>
        <input disabled value="<?= $lucroJaneiro ?>">
    </p>
    <p>
        <span>Lucro Real de Fevereiro:</span>
        <input disabled value="<?= $lucroFevereiro ?>">
    </p>
    <p>
        <span>Lucro Real de Março:</span>
        <input disabled value="<?= $lucroMarco ?>">
    </p>
    <p>
        <span>Lucro Real de Abril:</span>
        <input disabled value="<?= $lucroAbril ?>">
    </p>
    <p>
        <span>Lucro Real de Maio:</span>
        <input disabled value="<?= $lucroMaio ?>">
    </p>
    <p>
        <span>Lucro Real de Junho:</span>
        <input disabled value="<?= $lucroJunho ?>">
    </p>
    <p>
        <span>Lucro Real de Julho:</span>
        <input disabled value="<?= $lucroJulho ?>">
    </p>
    <p>
        <span>Lucro Real de Agosto:</span>
        <input disabled value="<?= $lucroAgosto ?>">
    </p>
    <p>
        <span>Lucro Real de Setembro:</span>
        <input disabled value="<?= $lucroSetembro ?>">
    </p>
    <p>
        <span>Lucro Real de Outubro:</span>
        <input disabled value="<?= $lucroOutubro ?>">
    </p>
    <p>
        <span>Lucro Real de Novembro:</span>
        <input disabled value="<?= $lucroNovembro ?>">
    </p>
    <p>
        <span>Lucro Real de Dezembro:</span>
        <input disabled value="<?= $lucroDezembro ?>">
    </p>
</body>
</html>