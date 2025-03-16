<?php

class Conversao {
    public function converterTemperatura($tipo, $valor) {
        if (empty($tipo) || empty($valor)) {
            return 0;
        }

        if ($tipo == 1) {
            // Fahrenheit para Celsius
            return ($valor - 32) / 1.8;
        } else if ($tipo == 2) {
            // Celsius para Fahrenheit
            return ($valor * 1.8) + 32;
        }

        return 0;
    }
}

$tipoConversao = '';
$valor = '';
$resultado = '';

if (isset($_POST['btnConverter'])) {
    $tipoConversao = $_POST['tipoConversao'];
    $valor = $_POST['valor'];

    $objConversao = new Conversao();
    $resultado = $objConversao->converterTemperatura($tipoConversao, $valor);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de Temperatura</title>
</head>
<body>
    <form action="" method="post">
        <label for="tipoConversao">Tipo de Conversão:</label>
        <select name="tipoConversao" id="tipoConversao">
            <option value="1" <?= ($tipoConversao == '1') ? 'selected' : '' ?>>Fahrenheit para Celsius</option>
            <option value="2" <?= ($tipoConversao == '2') ? 'selected' : '' ?>>Celsius para Fahrenheit</option>
        </select>
        <br><br>

        <label for="valor">Valor:</label>
        <input type="text" name="valor" id="valor" value="<?= htmlspecialchars($valor) ?>">
        <br><br>

        <button type="submit" name="btnConverter">Converter</button>
        <br><br>

        <label for="resultado">Resultado:</label>
        <input type="text" id="resultado" value="<?= htmlspecialchars($resultado) ?>" disabled>
    </form>
</body>
</html>
