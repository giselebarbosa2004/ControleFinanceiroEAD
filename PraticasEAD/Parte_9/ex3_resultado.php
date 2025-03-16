<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
</head>
<body>
    <h2>Resultado</h2>
    <?php
    if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3']) && isset($_GET['num4']) && isset($_GET['num5'])) {
        $num1 = floatval(trim($_GET['num1']));
        $num2 = floatval(trim($_GET['num2']));
        $num3 = floatval(trim($_GET['num3']));
        $num4 = floatval(trim($_GET['num4']));
        $num5 = floatval(trim($_GET['num5']));

        if ($num4 != 0 && $num5 != 0) {
            $soma = $num1 + $num2 + $num3;
            $multiplicacao = $num4 * $num5;
            $resultado = $soma / $multiplicacao;

            echo "<p>Número 1: $num1</p>";
            echo "<p>Número 2: $num2</p>";
            echo "<p>Número 3: $num3</p>";
            echo "<p>Número 4: $num4</p>";
            echo "<p>Número 5: $num5</p>";
            echo "<p>Resultado: <input type='text' value='" . number_format($resultado, 2) . "' disabled></p>";
        } else {
            echo "<p>Erro: A multiplicação por zero não é permitida. Por favor, insira valores válidos para os números 4 e 5.</p>";
        }
    } else {
        echo "<p>Por favor, preencha todos os campos corretamente.</p>";
    }
    ?>
</body>
</html>
