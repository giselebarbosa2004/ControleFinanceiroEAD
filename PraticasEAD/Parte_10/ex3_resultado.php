<!DOCTYPE html>
<html>
<head>
    <title>Resultado do Laço de Repetição For</title>
</head>
<body>
    <h2>Resultado do Laço de Repetição For</h2>
    <?php
    if (isset($_POST['quantidade'])) {
        $quantidade = intval($_POST['quantidade']);
        
        if ($quantidade > 0) {
            echo "<p>INÍCIO DO LAÇO DE REPETIÇÃO.</p>";
            for ($i = 1; $i <= $quantidade; $i++) {
                echo "<p>Valor da Variável \$i – $i.</p>";
            }
            echo "<p>FIM DA REPETIÇÃO.</p>";
        } else {
            echo "<p>Por favor, insira um número maior que zero.</p>";
        }
    } else {
        echo "<p>Por favor, insira um número de repetições.</p>";
    }
    ?>
</body>
</html>
