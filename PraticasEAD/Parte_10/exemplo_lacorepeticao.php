<?php

$total = '';

if(isset($_POST['btnVer'])){

$total = $_POST['qtde'];

echo 'INICIO DO LAÇO DE REPETIÇÃO<br><br>';

for($i=1; $i <= $total; $i++){
    echo 'Valor da variável $i - ' . $i . '<br>';
}

echo '<br><br>FIM DA REPETIÇÃO';

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="exemplo_lacorepeticao.php">
    <label>Informe a qtde de vezes de repetição</label>
    <input type="text" name="qtde" value="<?= $total ?>">

    <button name="btnVer">Ver resultado</button>
</form>

    
</body>
</html>
