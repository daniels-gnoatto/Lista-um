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

        $numero1 = (int)$_POST['num1'];
        $numero2 = (int)$_POST['num2'];
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['verificar_numero'])){
            $contagem = 0;
            for ($i = 1; $i <= $numero; $i++){
                if($i % 2 == 0){
                    $contagem += 1;
                }
            }
        }

    ?>


</body>
</html>