<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="POST" action="">
    <label for="num1">Número 1:</label>
    <input type="number" id="num1" name="num1" required>
    <label for="num2">Número 2:</label>
    <input type="number" id="num2" name="num2" required>
    <button type="submit" name="verificar_amigos">Verificar</button>
    </form>


    <?php
    $valor1 = (int)$_POST['num1'];
    $valor2 = (int)$_POST['num2'];
    $soma = 0;

    if ($valor1 > $valor2){
        for ($i = $valor2; $i < $valor1; $i++){
            $soma += $i;
        }
    }else{
        for ($i = $valor1; $i < $valor2; $i++){
            $soma += $i;
        }
    }

        echo "A soma de todos os números entre $valor1 e $valor2 é $soma";
    ?>


</body>
</html>