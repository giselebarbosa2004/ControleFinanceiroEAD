<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Compra</title>
</head>
<body>
    <form method="POST" action="">
        <label for="produto">Nome do Produto:</label>
        <input type="text" name="produto" id="produto" value="<?php echo isset($_POST['produto']) ? $_POST['produto'] : ''; ?>">
        <br><br>

        <label for="valor_unitario">Valor Unitário:</label>
        <input type="text" name="valor_unitario" id="valor_unitario" value="<?php echo isset($_POST['valor_unitario']) ? $_POST['valor_unitario'] : ''; ?>">
        <br><br>

        <label for="quantidade">Quantidade:</label>
        <input type="text" name="quantidade" id="quantidade" value="<?php echo isset($_POST['quantidade']) ? $_POST['quantidade'] : ''; ?>">
        <br><br>

        <input type="submit" name="calcular" value="Calcular">
    </form>

    <?php
        function validarParametros($produto, $valor_unitario, $quantidade) {
            if (empty($produto) || empty($valor_unitario) || empty($quantidade)) {
                echo "<p>Preencher TODOS os campos.</p>";
                return 0;
            }
            return 1;
        }

        function calcularValorFinal($valor_unitario, $quantidade) {
            return $valor_unitario * $quantidade;
        }

        if (isset($_POST['calcular'])) {
            $produto = $_POST['produto'];
            $valor_unitario = $_POST['valor_unitario'];
            $quantidade = $_POST['quantidade'];

            if (validarParametros($produto, $valor_unitario, $quantidade) == 1) {
                $valor_unitario = floatval($valor_unitario);
                $quantidade = intval($quantidade);
                $valor_final = calcularValorFinal($valor_unitario, $quantidade);
                echo "<p>Valor Final da Compra: R$ $valor_final</p>";
            }
        }
    ?>
</body>
</html>
