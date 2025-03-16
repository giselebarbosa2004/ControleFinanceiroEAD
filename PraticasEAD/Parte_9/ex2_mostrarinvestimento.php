<!DOCTYPE html>
<html>
<head>
    <title>Mostrar Investimento</title>
</head>
<body>
    <h2>Mostrar Investimento</h2>
    <?php
    if (isset($_GET['nome']) && isset($_GET['valor']) && isset($_GET['situacao']) && isset($_GET['banco'])) {
        $nome = $_GET['nome'];
        $valor = floatval($_GET['valor']);
        $situacao = $_GET['situacao'];
        $banco = $_GET['banco'];
        $resultado = 0;
        $descricaoSituacao = '';
        $nomeBanco = '';

        if ($situacao == 'G') {
            $resultado = $valor * 1.03;
            $descricaoSituacao = 'Ganho de 3%';
        } elseif ($situacao == 'P') {
            $resultado = $valor * 0.95;
            $descricaoSituacao = 'Perca de 5%';
        }

        if ($banco == 'SA') {
            $nomeBanco = 'Santander';
        } elseif ($banco == 'IT') {
            $nomeBanco = 'Itau';
        } elseif ($banco == 'SI') {
            $nomeBanco = 'Sicredi';
        }

        echo "<p>CLIENTE: $nome</p>";
        echo "<p>Seu valor de investimento foi de R$ " . number_format($valor, 2, ',', '.') . "</p>";
        echo "<p>A sigla de sua simulação escolhida foi $situacao ($descricaoSituacao).</p>";
        echo "<p>O banco escolhido foi $nomeBanco e o resultado é de R$ " . number_format($resultado, 2, ',', '.') . "</p>";
    } else {
        echo "<p>Por favor, preencha todos os campos corretamente.</p>";
    }
    ?>
</body>
</html>
