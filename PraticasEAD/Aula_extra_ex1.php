<?php
if(isset($_POST['btnVerificar'])){
$idade = $_POST['idade'];
$ingresso = $_POST['ingresso'];
$acompanhante = $_POST['acompanhante'];

if (trim($idade) == '' || trim($ingresso) == '' || trim($acompanhante) == ''){
    $resultado = "Preencher todos os campos!";
}else if($idade < 1 || $idade < 18){
    $resultado = "Entrada não permitida. Critério IDADE!";
}else if($ingresso < 1 || $ingresso > 4){
    $resultado = "Entrada não permitida. Critério Ingresso!";
}else if($acompanhante > 3){
    $resultado = "Entrada não permitida. Critério Acompanhante!";
}else{
    $resultado = "Entrada permitida, Aproveite o Show!";
}



}




?>


<!DOCTYPE html>
<html lang="pt=br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula extra ex_1</title>
</head>
<body>
    <h1>Verificação de entrada no show musical.</h1>
    <form action="Aula_extra_ex1" method="post">
    <label>Idade:</label>
    <input type="text" name="idade" value="">
    <br></br>
    <label>Número de ingressos:</label>
    <input type="text" name="ingressos" value="">
    <br></br>
    <label>Número de acompanhantes:</label>
    <input type="text" name="acompanhantes" value="">
    <br></br>
    <button name="btnVerificar">VERIFICAR</button>
<hr>
<p style="font-size: larger;color: blue">
<?php
if (isset($resultado))
echo $resultado;
?>
</p>





    
</body>
</html>