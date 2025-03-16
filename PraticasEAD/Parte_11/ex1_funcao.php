<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Validação de Formulário</title>
</head>
<body>
    <form method="POST" action="">
        <label for="nome">NOME:</label>
        <input type="text" name="nome" id="nome" value="<?php echo isset($_POST['nome']) ? $_POST['nome'] : ''; ?>">
        <br><br>
        
        <label for="descricao">DESCRIÇÃO:</label>
        <textarea name="descricao" id="descricao"><?php echo isset($_POST['descricao']) ? $_POST['descricao'] : ''; ?></textarea>
        <br><br>
        
        <label for="senha">SENHA:</label>
        <input type="password" name="senha" id="senha">
        <br><br>
        
        <label for="repetir_senha">REPETIR SENHA:</label>
        <input type="password" name="repetir_senha" id="repetir_senha">
        <br><br>
        
        <input type="submit" name="validar" value="Validar">
    </form>

    <?php
        if (isset($_POST['validar'])) {
            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];
            $senha = $_POST['senha'];
            $repetir_senha = $_POST['repetir_senha'];
            $validado = true;

            if (empty($nome)) {
                echo "<p>-1: Nome não pode estar vazio!</p>";
                $validado = false;
            } elseif (strlen($nome) < 3) {
                echo "<p>-1: Nome deverá conter no mínimo 3 caracteres!</p>";
                $validado = false;
            }

            if (empty($descricao)) {
                echo "<p>-2: Descrição não pode estar vazia!</p>";
                $validado = false;
            } elseif (strlen($descricao) < 50) {
                echo "<p>-2: Descrição deverá conter no mínimo 50 caracteres!</p>";
                $validado = false;
            }

            if (empty($senha)) {
                echo "<p>-3: Senha não pode estar vazia!</p>";
                $validado = false;
            } elseif (strlen($senha) < 6) {
                echo "<p>-3: Senha deverá conter no mínimo 6 caracteres!</p>";
                $validado = false;
            }

            if ($senha !== $repetir_senha) {
                echo "<p>-4: Os campos SENHA e REPETIR SENHA deverão ser iguais!</p>";
                $validado = false;
            }

            if ($validado) {
                echo "<p>CAMPOS VALIDADOS COM SUCESSO</p>";
            }
        }
    ?>
</body>
</html>
