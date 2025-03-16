
<?php


if(isset($_POST['btn_enviar'])){


    $data = $_POST['data'];
    
    $mes = $_POST['mes'];

    $ano = $_POST['ano'];

   

    echo 'Londrina,' . '   ' .  $data . ' de ' . '   ' .  $mes .  '   ' .  ' de ' . $ano . ' . ' .'<hr> '; 

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
<form action="ex4_formulario.php" method="post">
    <label>Digite a data de hoje</label>
    <input name="data" placeholder="Digite aqui...">
    <label>Digite o mês atual</label>
    <input type="text" name="mes" placeholder="Digite aqui...">
    <label>Digite o ano</label>
    <input type="text" name="ano" placeholder="Digite aqui...">
   
    <button name="btn_enviar">Enviar</button>
    
</body>
</html>