<?php
if(isset($_POST['btn_verificar'])){

$numero = $_POST['numero'];

if(trim($numero) == ''){
    echo 'Preencher o campo NÚMERO';
}
else{

    if($numero > 100){
        echo 'O número ' . $numero . ' é maior do que 100';
    }
else if($numero == 100){
echo 'O número ' . $numero . ' é igual a 100 ';

}else{
    echo 'O número ' . $numero . ' é menor do que 100 ';
}

}

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
    <form method="post" action="operadores_exemplo.php">
<label>Número digitado</label>
<input type="text" name="numero">
<button name="btn_verificar">Verificar</button>

</form>

</body>
</html>
