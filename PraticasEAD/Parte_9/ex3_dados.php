<!DOCTYPE html>
<html>
<head>
    <title>Inserir Dados</title>
</head>
<body>
    <h2>Inserir Dados</h2>
    <form action="ex3_resultado.php" method="get">
        <label for="num1">Número 1:</label>
        <input type="number" id="num1" name="num1" value="<?php echo isset($_GET['num1']) ? $_GET['num1'] : ''; ?>" required><br><br>

        <label for="num2">Número 2:</label>
        <input type="number" id="num2" name="num2" value="<?php echo isset($_GET['num2']) ? $_GET['num2'] : ''; ?>" required><br><br>

        <label for="num3">Número 3:</label>
        <input type="number" id="num3" name="num3" value="<?php echo isset($_GET['num3']) ? $_GET['num3'] : ''; ?>" required><br><br>

        <label for="num4">Número 4:</label>
        <input type="number" id="num4" name="num4" value="<?php echo isset($_GET['num4']) ? $_GET['num4'] : ''; ?>" required><br><br>

        <label for="num5">Número 5:</label>
        <input type="number" id="num5" name="num5" value="<?php echo isset($_GET['num5']) ? $_GET['num5'] : ''; ?>" required><br><br>

        <input type="submit" value="CALCULAR">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        foreach ($_GET as $key => $value) {
            if (empty(trim($value))) {
                echo "<p>Por favor, preencha o campo '" . htmlspecialchars($key) . "' corretamente.</p>";
            }
        }
    }
    ?>
</body>
</html>
