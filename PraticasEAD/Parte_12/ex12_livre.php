<?php

// Classe Despesa
class Despesa {
    public $nome;
    public $valor;

    public function __construct($nome, $valor) {
        $this->nome = $nome;
        $this->valor = $valor;
    }
}

// Variável global para o orçamento mensal
$orcamentoMensal = 2000;

// Arrays de despesas
$despesas = [];

// Função para adicionar despesa
function adicionarDespesa($nome, $valor) {
    global $despesas;
    $despesa = new Despesa($nome, $valor);
    $despesas[] = $despesa;
}

// Função para calcular o total de despesas
function calcularTotalDespesas() {
    global $despesas;
    $total = 0;
    foreach ($despesas as $despesa) {
        $total += $despesa->valor;
    }
    return $total;
}

// Função para verificar se está dentro do orçamento
function verificarOrcamento() {
    global $orcamentoMensal;
    $totalDespesas = calcularTotalDespesas();
    return $totalDespesas <= $orcamentoMensal;
}

// Manipulação de formulário
$mensagem = "";

if (isset($_POST['btnAdicionar'])) {
    $nome = $_POST['nome'];
    $valor = $_POST['valor'];

    if (empty($nome) || empty($valor)) {
        $mensagem = "Preencher todos os campos.";
    } else {
        adicionarDespesa($nome, $valor);
        $mensagem = "Despesa adicionada com sucesso!";
    }
}

if (isset($_POST['btnCalcular'])) {
    $totalDespesas = calcularTotalDespesas();
    if (verificarOrcamento()) {
        $mensagem = "Total de despesas: R$ $totalDespesas. Você está dentro do orçamento!";
    } else {
        $mensagem = "Total de despesas: R$ $totalDespesas. Você excedeu o orçamento!";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Gastos</title>
</head>
<body>
    <h1>Controle de Gastos</h1>
    <form action="" method="post">
        <label for="nome">Nome da Despesa:</label>
        <input type="text" name="nome" id="nome" value="">
        <br><br>

        <label for="valor">Valor da Despesa (R$):</label>
        <input type="text" name="valor" id="valor" value="">
        <br><br>

        <button type="submit" name="btnAdicionar">Adicionar Despesa</button>
        <br><br>

        <button type="submit" name="btnCalcular">Calcular Total de Despesas</button>
    </form>
    
    <h2>Resultado:</h2>
    <p><?= $mensagem ?></p>
</body>
</html>
