<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
</head>
<body>
    <h2>Resultado</h2>
    <?php
    if (isset($_POST['fruta1']) && isset($_POST['fruta2']) && isset($_POST['fruta3']) && isset($_POST['fruta4']) && isset($_POST['fruta5'])) {
        $frutas = array(
            htmlspecialchars(trim($_POST['fruta1'])),
            htmlspecialchars(trim($_POST['fruta2'])),
            htmlspecialchars(trim($_POST['fruta3'])),
            htmlspecialchars(trim($_POST['fruta4'])),
            htmlspecialchars(trim($_POST['fruta5']))
        );

        for ($i = 0; $i < count($frutas); $i++) {
            echo "<p>FRUTA GUARDADA NA POSIÇÃO " . ($i + 1) . " É: " . $frutas[$i] . "</p>";
        }
    } else {
        echo "<p>Por favor, preencha todas as frutas.</p>";
    }
    ?>
</body>
</html>
