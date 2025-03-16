<?php

class HistoricoGanhos {
    public function calcularTotalFinal($meses, $ganhoMensal, $percentualLucro, $percentualPerda) {
        if (empty($meses) || empty($ganhoMensal) || empty($percentualLucro) || empty($percentualPerda)) {
            return 0;
        }

        $ganhoTotal = $meses * $ganhoMensal;
        $lucro = ($ganhoTotal * $percentualLucro) / 100;
        $perda = ($ganhoTotal * $percentualPerda) / 100;
        $totalFinal = $ganhoTotal + $lucro - $perda;

        return $totalFinal;
    }
}

$meses = '';
$ganhoMensal = '';
$percentualLucro = '';
$percentualPerda = '';
$totalFinal = '';

if (isset($_POST['btnCalcular'])) {
    $meses = $_POST['meses'];
    $ganhoMensal = $_POST['ganhoMensal'];
    $percentualLucro = $_POST['percentualLucro'];
    $percentualPerda = $_POST['percentualPerda'];

    $objHistoricoGanhos = new HistoricoGanhos();
    $totalFinal = $objHistoricoGanhos->calcularTotalFinal($meses, $ganhoMensal, $percentualLucro, $percentualPerda);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histórico de Ganhos</title>
</head>
<body>
    <form action="" method="post">
        <label for="meses">Quantidade de Meses de Trabalho:</label>
        <input type="text" name="meses" id="meses" value="<?= htmlspecialchars($meses) ?>">
        <br><br>

        <label for="ganhoMensal">Ganho Médio Mensal:</label>
        <input type="text" name="ganhoMensal" id="ganhoMensal" value="<?= htmlspecialchars($ganhoMensal) ?>">
        <br><br>

        <label for="percentualLucro">Percentual (%) de Lucro Total:</label>
        <input type="text" name="percentualLucro" id="percentualLucro" value="<?= htmlspecialchars($percentualLucro) ?>">
        <br><br>

        <label for="percentualPerda">Percentual (%) de Perda Total:</label>
        <input type="text" name="percentualPerda" id="percentualPerda" value="<?= htmlspecialchars($percentualPerda) ?>">
        <br><br>

        <button type="submit" name="btnCalcular">Calcular Total</button>
        <br><br>

        <label for="totalFinal">Total Final:</label>
        <input type="text" id="totalFinal" value="<?= htmlspecialchars($totalFinal) ?>" disabled>
    </form>
</body>
</html>
