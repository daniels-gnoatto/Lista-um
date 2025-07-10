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
            for ($i = $numero; $i >= 2; $i--) {
                $r = $i - 1;
                $resultado = $i * $r;
                $valor = $valor + $resultado;
                echo "$i x $r = $resultado <br>";
            }
            echo $valor;
        }
    }
    tabuada($numero);
    ?>
</body>

</html>