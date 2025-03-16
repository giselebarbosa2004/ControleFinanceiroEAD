<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Números</title>
</head>
<body>
    <form method="POST" action="">
        <label for="num1">Número 1:</label>
        <input type="text" name="num1" id="num1" value="<?php echo isset($_POST['num1']) ? $_POST['num1'] : ''; ?>">
        <br><br>
        
        <label for="num2">Número 2:</label>
        <input type="text" name="num2" id="num2" value="<?php echo isset($_POST['num2']) ? $_POST['num2'] : ''; ?>">
        <br><br>
        
        <label for="num3">Número 3:</label>
        <input type="text" name="num3" id="num3" value="<?php echo isset($_POST['num3']) ? $_POST['num3'] : ''; ?>">
        <br><br>
        
        <label for="num4">Número 4:</label>
        <input type="text" name="num4" id="num4" value="<?php echo isset($_POST['num4']) ? $_POST['num4'] : ''; ?>">
        <br><br>
        
        <label for="num5">Número 5:</label>
        <input type="text" name="num5" id="num5" value="<?php echo isset($_POST['num5']) ? $_POST['num5'] : ''; ?>">
        <br><br>
        
        <input type="submit" name="calcular" value="Calcular">
    </form>
    
    <?php
        function validarParametros($num1, $num2, $num3, $num4, $num5) {
            if (empty($num1) || empty($num2) || empty($num3) || empty($num4) || empty($num5)) {
                return 0;
            }
            return 1;
        }

        function calcularResultado($num1, $num2, $num3, $num4, $num5) {
            $somaTres = $num1 + $num2 + $num3;
            $multiplicacaoDois = $num4 * $num5;
            return $somaTres + $multiplicacaoDois;
        }

        if (isset($_POST['calcular'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $num3 = $_POST['num3'];
            $num4 = $_POST['num4'];
            $num5 = $_POST['num5'];

            if (validarParametros($num1, $num2, $num3, $num4, $num5) == 0) {
                echo "<p>Os parâmetros não podem estar vazios. Retorno 0.</p>";
            } else {
                $num1 = floatval($num1);
                $num2 = floatval($num2);
                $num3 = floatval($num3);
                $num4 = floatval($num4);
                $num5 = floatval($num5);
                $resultado = calcularResultado($num1, $num2, $num3, $num4, $num5);
                echo "<label for='resultado'>Resultado:</label>";
                echo "<input type='text' id='resultado' value='$resultado' disabled>";
            }
        }
    ?>
</body>
</html>
