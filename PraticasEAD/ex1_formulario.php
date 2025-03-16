<?php


if(isset($_POST['btn_enviar'])){

    $nomeprato = $_POST['nome_prato'];
    
    $descricao = $_POST['descricao_prato'];

    $preco = $_POST['preco_prato'];

    $ingredientes = $_POST['ingredientes_prato'];

    echo 'Nome do prato: ' .  $nomeprato . '<br>  ' . 'Descricao: ' .  $descricao . '<br>  '  . 'Preco: ' .  $preco . '<br>  '  . 'Ingredientes: ' .  $ingredientes . '<hr>  '; 

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
<form action="ex1_formulario.php" method="post">
    <label>Digite o Nome do prato</label>
    <input name="nome_prato" placeholder="Digite aqui...">
    <label>Digite a Descrição</label>
    <input type="text" name="descricao_prato" placeholder="Digite aqui...">
    <label>Digite o Preço (R$)</label>
    <input type="number" name="preco_prato" placeholder="Digite aqui...">
    <label>Digite os Ingredientes</label>
    <input type="text" name="ingredientes_prato" placeholder="Digite aqui...">
    <button name="btn_enviar">Enviar</button>
    
</body>
</html>