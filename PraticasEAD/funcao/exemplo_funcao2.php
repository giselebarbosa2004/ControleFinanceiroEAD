<?php

require_once 'calculo.php';

$nome = '';
$sobre = '';
$qtd_nome = '';
$qtd_sobre = '';
$qtd_total = '';

if(isset($_POST['btnContar'])){

    $nome = $_POST['nome'];
    $sobre = $_POST['sobre'];


$qtd_nome = ContarCaracteres($nome);

if($qtd_nome < 3){
    echo 'Nome inválido';
}

$qtd_sobre = ContarCaracteres($sobre);
$qtd_total = SomarCaracteresTotal($qtd_nome, $qtd_sobre);

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
    <form method="post" action="exemplo_funcao2.php">
    <label>Nome</label>
    <input type="text" name="nome" value="<?= $nome ?>"><br>
    <label>Sobrenome</label>
    <input type="text" name="sobre" value="<?= $sobre ?>"><br>
    <br><br>
    <button name="btnContar">Contar palavras</button>
    <br><br>
    <label>Qtde de caracteres NOME</label>
    <input disabled value="<?= $qtd_nome ?>"><br>
    <label>Qtde de caracteres SOBRENOME</label>
    <input disabled value="<?= $qtd_sobre ?>"><br>
    <label>Qtde de caracteres TOTAL</label>
    <input disabled value="<?= $qtd_total ?>">

    </form>

</body>
</html>