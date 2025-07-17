<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero">Veja os números de Fibonacci entre 0 e:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="verificar_numero">Verificar</button>
    </form>

    <?php
    if (isset($_POST['numero'])) {
        $valor1 = (int)$_POST['numero'];

        function fibonacci($valor) {
            if ($valor == 0) {
                return 0;
            } else if ($valor == 1) {
                return 1;
            } else {
                return fibonacci($valor - 1) + fibonacci($valor - 2);
            }
        }
        
        for ($i = 0; $i < $valor1; $i++) {
            echo fibonacci($i) . " ";
        }
    }
    ?>
</body>
</html>
