<?php 

    $numero_1 = '';
    $numero_2 = '';
    $numero_3 = '';
    $numero_4 = '';
    $numero_5 = '';
    $resultado = '';

    if(isset($_POST['btnCalcular'])){
        $numero_1 = trim($_POST['valor_1']);
        $numero_2 = trim($_POST['valor_2']);
        $numero_3 = trim($_POST['valor_3']);
        $numero_4 = trim($_POST['valor_4']);
        $numero_5 = trim($_POST['valor_5']);

        $resultado = ($numero_1 + $numero_2 + $numero_3) / ($numero_4 * $numero_5);
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>ex2_calc_logica.php</title>
</head>
<body>
    <form action="ex2_calc_logica.php" method="POST">
        <label>Digite o Primeiro Valor:</label>
        <input type="number" name="valor_1" value="<?= $numero_1 ?>">
        <br>
        <label>Digite o Segundo Valor:</label>
        <input type="number" name="valor_2" value="<?= $numero_2 ?>">
        <br>
        <label>Digite o Terceiro Valor:</label>
        <input type="number" name="valor_3" value="<?= $numero_3 ?>">
        <br>
        <label>Digite o Quarto Valor:</label>
        <input type="number" name="valor_4" value="<?= $numero_4 ?>">
        <br>
        <label>Digite o Quinto Valor:</label>
        <input type="number" name="valor_5" value="<?= $numero_5 ?>">
        <br>
        <button name="btnCalcular">CALCULAR</button>
    </form>
    <span>Resultado Final:</span>
    <input disabled value="<?= $resultado ?>">
</body>
</html>