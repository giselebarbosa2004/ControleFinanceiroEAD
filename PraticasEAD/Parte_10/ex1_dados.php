<!DOCTYPE html>
<html>
<head>
    <title>Repetir Nome e Idade</title>
</head>
<body>
    <h2>Repetir Nome e Idade</h2>
    <form action="ex1_resultado.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" required><br><br>

        <label for="quantidade">Quantidade de vezes:</label>
        <input type="number" id="quantidade" name="quantidade" required><br><br>

        <input type="submit" value="VER">
    </form>
</body>
</html>
