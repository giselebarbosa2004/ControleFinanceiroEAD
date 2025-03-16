<!DOCTYPE html>
<html>
<head>
    <title>Resultado do IMC</title>
</head>
<body>
    <h2>Resultado do IMC</h2>
    <?php
    if (isset($_POST['nome']) && isset($_POST['peso']) && isset($_POST['altura'])) {
        $nome = $_POST['nome'];
        $peso = floatval($_POST['peso']);
        $altura = floatval($_POST['altura']);

        if ($peso > 0 && $altura > 0) {
            $imc = $peso / ($altura * $altura);
            $classificacao = "";

            if ($imc <= 20) {
                $classificacao = "Magro";
            } elseif ($imc <= 25) {
                $classificacao = "Peso ideal";
            } elseif ($imc <= 30) {
                $classificacao = "Obeso";
            } else {
                $classificacao = "Muito Obeso";
            }

            echo "<p>Nome: $nome</p>";
            echo "<p>IMC: " . number_format($imc, 2) . "</p>";
            echo "<p>Classificação do IMC: $classificacao</p>";
        } else {
            echo "<p>Por favor, insira valores válidos para peso e altura.</p>";
        }
    } else {
        echo "<p>Por favor, preencha todos os campos.</p>";
    }
    ?>
</body>
</html>
