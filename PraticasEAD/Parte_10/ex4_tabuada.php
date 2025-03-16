<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Tabuada</title>
</head>
<body>
    <form method="POST" action="">
        <label for="tabuada">Selecione a Tabuada desejada:</label>
        <select name="tabuada" id="tabuada">
            <?php
                for ($i = 0; $i <= 10; $i++) {
                    echo "<option value=\"$i\">$i</option>";
                }
            ?>
        </select>
        <br><br>
        <input type="submit" name="calcular" value="Calcular">
    </form>
    
    <?php
        if (isset($_POST['calcular'])) {
            $tabuada = $_POST['tabuada'];
            echo "<h3>Tabuada do $tabuada:</h3>";
            for ($i = 0; $i <= 10; $i++) {
                $resultado = $tabuada * $i;
                echo "$tabuada x $i = $resultado<br>";
            }
        }
    ?>
</body>
</html>
