<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Aumento de Salário</title>
</head>
<body>
    <form method="POST" action="">
        <label for="salario">Salário:</label>
        <input type="text" name="salario" id="salario" value="<?php echo isset($_POST['salario']) ? $_POST['salario'] : ''; ?>">
        <br><br>

        <label for="aumento">Aumento (%):</label>
        <input type="text" name="aumento" id="aumento" value="<?php echo isset($_POST['aumento']) ? $_POST['aumento'] : ''; ?>">
        <br><br>

        <input type="submit" name="calcular" value="Calcular">
    </form>

    <?php
        function validarParametros($salario, $aumento) {
            if (empty($salario) || empty($aumento)) {
                return 0;
            }
            return 1;
        }

        function calcularAumento($salario, $aumento) {
            return ($salario * $aumento) / 100;
        }

        function calcularSalarioFinal($salario, $aumento) {
            $valorAumento = calcularAumento($salario, $aumento);
            return $salario + $valorAumento;
        }

        if (isset($_POST['calcular'])) {
            $salario = $_POST['salario'];
            $aumento = $_POST['aumento'];

            if (validarParametros($salario, $aumento) == 0) {
                echo "<p>Os parâmetros não podem estar vazios. Retorno 0.</p>";
            } else {
                $salario = floatval($salario);
                $aumento = floatval($aumento);
                $valorAumento = calcularAumento($salario, $aumento);
                $salarioFinal = calcularSalarioFinal($salario, $aumento);
                echo "<p>Valor do Aumento: R$ $valorAumento</p>";
                echo "<p>Salário Final com Aumento: R$ $salarioFinal</p>";
            }
        }
    ?>
</body>
</html>
