<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="POST" action="">

        <label for="numero_tabuada">Veja a tabuada desejada:</label>
        <input type="number" id="numero_tabuada" name="numero_tabuada" required>
        <br>
        <button type="submit" name="fazer_tabuada">Veja a Tabuada</button>
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $numero = $_POST['numero_tabuada'];

        function tabuada($numero)
        {
            for ($i = 1; $i <= 10; $i++) {
                $resultado = $numero * $i;
                echo "$numero x $i = $resultado <br>";
            }
        }
    }
    tabuada($numero);
    ?>
</body>

</html>