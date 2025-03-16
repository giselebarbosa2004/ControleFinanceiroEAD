<!DOCTYPE html>
<html>
<head>
    <title>Calcular IMC</title>
</head>
<body>
    <h2>Calcular IMC</h2>
    <form action="ex1_mostrardadosimc.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="peso">Peso (kg):</label>
        <input type="number" id="peso" name="peso" step="0.01" required><br><br>

        <label for="altura">Altura (m):</label>
        <input type="number" id="altura" name="altura" step="0.01" required><br><br>

        <input type="submit" value="CALCULAR">
    </form>
</body>
</html>
