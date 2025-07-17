<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="POST" action="">
        <label for="numero">Convertendo graus para Fahrenheit:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="verificar_numero">Verificar</button>
    </form>

    <?php
        $graus = (int)$_POST['numero'];
        $resultado = ($graus * 1.8) + 32;
        echo "$resultado ° Fahrenheit";
    ?>
    
</body>
</html>