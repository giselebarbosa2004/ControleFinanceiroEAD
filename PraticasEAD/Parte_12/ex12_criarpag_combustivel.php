<?php

class Combustivel {
    public function CalcularTotalLitros($tipo, $litros) {
        if (empty($tipo) || empty($litros)) {
            return 0;
        }

        $precoPorLitro = 0;

        if ($tipo == 1) {
            // Etanol
            $precoPorLitro = 3.09;
        } else if ($tipo == 2) {
            // Gasolina
            $precoPorLitro = 4.10;
        }

        return $precoPorLitro * $litros;
    }
}

$tipoCombustivel = '';
$litros = '';
$total = '';

if (isset($_POST['btnCalcular'])) {
    $tipoCombustivel = $_POST['tipoCombustivel'];
    $litros = $_POST['litros'];

    $objCombustivel = new Combustivel();
    $total = $objCombustivel->CalcularTotalLitros($tipoCombustivel, $litros);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Combustível</title>
</head>
<body>
    <form action="" method="post">
        <label for="tipoCombustivel">Tipo do Combustível:</label>
        <select name="tipoCombustivel" id="tipoCombustivel">
            <option value="1" <?= ($tipoCombustivel == '1') ? 'selected' : '' ?>>Etanol</option>
            <option value="2" <?= ($tipoCombustivel == '2') ? 'selected' : '' ?>>Gasolina</option>
        </select>
        <br><br>

        <label for="litros">Quantidade de Litros Total:</label>
        <input type="text" name="litros" id="litros" value="<?= htmlspecialchars($litros) ?>">
        <br><br>

        <button type="submit" name="btnCalcular">Calcular Total</button>
        <br><br>

        <label for="total">Valor Total:</label>
        <input type="text" id="total" value="<?= htmlspecialchars($total) ?>" disabled>
    </form>
</body>
</html>
