<!DOCTYPE html>
<html>
<head>
    <title>Pegar Investimento</title>
</head>
<body>
    <h2>Pegar Investimento</h2>
    <form action="ex2_mostrarinvestimento.php" method="get">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?php echo isset($_GET['nome']) ? $_GET['nome'] : ''; ?>" required><br><br>

        <label for="valor">Valor investimento:</label>
        <input type="number" id="valor" name="valor" step="0.01" value="<?php echo isset($_GET['valor']) ? $_GET['valor'] : ''; ?>" required><br><br>

        <label for="situacao">Situação do investimento:</label>
        <select id="situacao" name="situacao" required>
            <option value="" disabled selected>Selecione uma opção</option>
            <option value="G" <?php echo (isset($_GET['situacao']) && $_GET['situacao'] == 'G') ? 'selected' : ''; ?>>Ganho de 3% (G)</option>
            <option value="P" <?php echo (isset($_GET['situacao']) && $_GET['situacao'] == 'P') ? 'selected' : ''; ?>>Perca de 5% (P)</option>
        </select><br><br>

        <label for="banco">Escolha do banco:</label>
        <select id="banco" name="banco" required>
            <option value="" disabled selected>Selecione um banco</option>
            <option value="SA" <?php echo (isset($_GET['banco']) && $_GET['banco'] == 'SA') ? 'selected' : ''; ?>>Santander (SA)</option>
            <option value="IT" <?php echo (isset($_GET['banco']) && $_GET['banco'] == 'IT') ? 'selected' : ''; ?>>Itau (IT)</option>
            <option value="SI" <?php echo (isset($_GET['banco']) && $_GET['banco'] == 'SI') ? 'selected' : ''; ?>>Sicredi (SI)</option>
        </select><br><br>

        <input type="submit" value="VER RESULTADO">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (isset($_GET['nome']) && isset($_GET['valor']) && isset($_GET['situacao']) && isset($_GET['banco'])) {
            $nome = $_GET['nome'];
            $valor = $_GET['valor'];
            $situacao = $_GET['situacao'];
            $banco = $_GET['banco'];

            if (empty($nome)) {
                echo "<p>Por favor, preencha o campo 'Nome'.</p>";
            }
            if (empty($valor)) {
                echo "<p>Por favor, preencha o campo 'Valor investimento'.</p>";
            }
            if (empty($situacao)) {
                echo "<p>Por favor, escolha a 'Situação do investimento'.</p>";
            }
            if (empty($banco)) {
                echo "<p>Por favor, escolha o 'Banco'.</p>";
            }
        }
    }
    ?>
</body>
</html>
