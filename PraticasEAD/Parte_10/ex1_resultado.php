<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
</head>
<body>
    <h2>Resultado</h2>
    <?php
    if (isset($_POST['nome']) && isset($_POST['idade']) && isset($_POST['quantidade'])) {
        $nome = htmlspecialchars(trim($_POST['nome']));
        $idade = intval($_POST['idade']);
        $quantidade = intval($_POST['quantidade']);

        if (!empty($nome) && $idade > 0 && $quantidade > 0) {
            for ($i = 0; $i < $quantidade; $i++) {
                echo "<p>MEU NOME É $nome, TENHO $idade ANOS DE IDADE.</p>";
            }
        } else {
            echo "<p>Por favor, preencha todos os campos corretamente.</p>";
        }
    } else {
        echo "<p>Por favor, preencha todos os campos.</p>";
    }
    ?>
</body>
</html>
