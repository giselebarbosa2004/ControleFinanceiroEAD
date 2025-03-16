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
        
        <label for="num6">Número 6:</label>
        <input type="text" name="num6" id="num6" value="<?php echo isset($_POST['num6']) ? $_POST['num6'] : ''; ?>">
        <br><br>
        
        <label for="num7">Número 7:</label>
        <input type="text" name="num7" id="num7" value="<?php echo isset($_POST['num7']) ? $_POST['num7'] : ''; ?>">
        <br><br>
        
        <label for="num8">Número 8:</label>
        <input type="text" name="num8" id="num8" value="<?php echo isset($_POST['num8']) ? $_POST['num8'] : ''; ?>">
        <br><br>
        
        <label for="num9">Número 9:</label>
        <input type="text" name="num9" id="num9" value="<?php echo isset($_POST['num9']) ? $_POST['num9'] : ''; ?>">
        <br><br>
        
        <label for="num10">Número 10:</label>
        <input type="text" name="num10" id="num10" value="<?php echo isset($_POST['num10']) ? $_POST['num10'] : ''; ?>">
        <br><br>
        
        <input type="submit" name="calcular" value="Calcular">
    </form>

    <?php
        function validarParametros($num1, $num2, $num3, $num4, $num5, $num6, $num7, $num8, $num9, $num10) {
            if (empty($num1) || empty($num2) || empty($num3) || empty($num4) || empty($num5) || empty($num6) || empty($num7) || empty($num8) || empty($num9) || empty($num10)) {
                echo "<p>Preencher TODOS os campos.</p>";
                return 0;
            }
            return 1;
        }

        function calcularResultado($num1, $num2, $num3, $num4, $num5, $num6, $num7, $num8, $num9, $num10) {
            $somaNove = $num1 + $num2 + $num3 + $num4 + $num5 + $num6 + $num7 + $num8 + $num9;
            return $somaNove / $num10;
        }

        if (isset($_POST['calcular'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $num3 = $_POST['num3'];
            $num4 = $_POST['num4'];
            $num5 = $_POST['num5'];
            $num6 = $_POST['num6'];
            $num7 = $_POST['num7'];
            $num8 = $_POST['num8'];
            $num9 = $_POST['num9'];
            $num10 = $_POST['num10'];

            if (validarParametros($num1, $num2, $num3, $num4, $num5, $num6, $num7, $num8, $num9, $num10) == 1) {
                $num1 = floatval($num1);
                $num2 = floatval($num2);
                $num3 = floatval($num3);
                $num4 = floatval($num4);
                $num5 = floatval($num5);
                $num6 = floatval($num6);
                $num7 = floatval($num7);
                $num8 = floatval($num8);
                $num9 = floatval($num9);
                $num10 = floatval($num10);

                $resultado = calcularResultado($num1, $num2, $num3, $num4, $num5, $num6, $num7, $num8, $num9, $num10);
                echo "<label for='resultado'>Resultado:</label>";
                echo "<input type='text' id='resultado' value='$resultado' disabled>";
            }
        }
    ?>
</body>
</html>
