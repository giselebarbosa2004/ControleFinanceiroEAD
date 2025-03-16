<?php

if(isset($_POST['btn_mostrar'])){

 $nome = $_POST['nome_usuario'];
 $sobrenome = $_POST['sobrenome_usuario'];

echo 'Nome completo: ' .  $nome . '  ' . $sobrenome . ' <br> '; 


$rua = $_POST['rua_usuario'];

echo 'Rua: ' .  $rua . '<br>  '; 

$bairro = $_POST['bairro_usuario'];

echo 'Bairro: ' .  $bairro . '<br>'; 

$cep = $_POST['cep_usuario'];

echo '  Cep: ' .  $cep . ' <br> '; 



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
    <form action="formulario.php" method="post">
    <label>Nome</label>
    <input name="nome_usuario">
    <label>Sobrenome</label>
    <input type="text" name="sobrenome_usuario">
    

    <form action="formulario.php" method="post">
    <label>Rua:</label>
    <input name="rua_usuario">
   

    <form action="formulario.php" method="post">
    <label>Bairro:</label>
    <input type="text" name="bairro_usuario">
   

    <form action="formulario.php" method="post">
    <label>Cep:</label>
    <input type="text" name="cep_usuario">
    <button name="btn_mostrar">Mostrar</button>
    </form>



</body>
</html>