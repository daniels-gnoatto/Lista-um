<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero">Veja quantos número pares tem entre 1 e:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name=" verificar_numero">Verificar</button>
    </form>

    <?php
    
    $numero = (int)$_POST['numero'];
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['verificar_numero'])){
        $contagem = 0;
        for ($i = 1; $i <= $numero; $i++){
        if($i % 2 == 0){
            $contagem += 1;
        }
    }
    }
    

    echo "Existe $contagem entre 1 e $numero";
    ?>

    
    


</body>
</html>