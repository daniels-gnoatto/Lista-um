<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="POST" action="">

        <label for="numero_escolhido">Verifique se é negativo, positivo ou zero:</label>
        <input type="number" id="numero_escolhido" name="numero_escolhido" required>
        <button type="submit" name=" verificar_numero">Verificar</button>

    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['verificar_numero'])) {

            $numero = $_POST['numero_escolhido'];

            if ($numero == 0) {
                echo "O numero $numero zero";
            } else if ($numero > 0) {
                echo "O numero $numero é positivo";
            } else {
                echo "O numero $numero é negativo";
            }
        }
    }
    ?>

</body>

</html>