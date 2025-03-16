
<?php


if(isset($_POST['btn_enviar'])){


    $nome = $_POST['nome'];
    
    $sobrenome = $_POST['sobrenome'];

    $assunto = $_POST['assunto'];

    $email = $_POST['email'];

    $mensagem = $_POST['mensagem'];


    echo 'Sua mensagem foi enviada com sucesso!' .'<br>  ' .'Nome: ' .  $nome . '<br>  ' . 'Sobrenome: ' .  $sobrenome . '<br>  '  . 'Assunto: ' .  $assunto . '<br>  '  . 'Email: ' .  $email . '<br>  ' . 'Mensagem: ' .  $mensagem . '<hr> '; 

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
<form action="ex3_formulario.php" method="post">
    <label>Digite o seu nome</label>
    <input name="nome" placeholder="Digite aqui...">
    <label>Digite o seu Sobrenome</label>
    <input type="text" name="sobrenome" placeholder="Digite aqui...">
    <label>Digite o assunto</label>
    <input type="text" name="assunto" placeholder="Digite aqui...">
    <label>Digite o seu email</label>
    <input type="text" name="email" placeholder="Digite aqui...">
    <label>Digite a sua mensagem</label>
    <textarea type="text" name="mensagem" rows=4 placeholder="Digite aqui..."></textarea>
    <button name="btn_enviar">Enviar</button>
    
</body>
</html>