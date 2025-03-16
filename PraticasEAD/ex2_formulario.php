
<?php


if(isset($_POST['btn_enviar'])){

    $nomeempresa = $_POST['nome_empresa'];
    
    $site = $_POST['end_site'];

    $facebook = $_POST['end_facebook'];

    $instagram = $_POST['end_instagram'];

    $descricao = $_POST['descricao_empresa'];

    echo 'Nome da Empresa: ' .  $nomeempresa . '<br>  ' . 'Site: ' .  $site . '<br>  '  . 'Facebook: ' .  $facebook . '<br>  '  . 'Instagram: ' .  $instagram . '<br>  ' . 'Descrição da Empresa: ' .  $descricao . '<hr> '; 

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
<form action="ex2_formulario.php" method="post">
    <label>Digite o Nome da Empresa</label>
    <input name="nome_empresa" placeholder="Digite aqui...">
    <label>Digite o Site</label>
    <input type="text" name="end_site" placeholder="Digite aqui...">
    <label>Digite o Facebook</label>
    <input type="text" name="end_facebook" placeholder="Digite aqui...">
    <label>Digite o Instagram</label>
    <input type="text" name="end_instagram" placeholder="Digite aqui...">
    <label>Digite uma descrição</label>
    <textarea type="text" name="descricao_empresa" rows=4 placeholder="Digite aqui..."></textarea>
    <button name="btn_enviar">Enviar</button>
    
</body>
</html>