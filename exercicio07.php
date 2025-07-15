<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<form method="POST" action="">
        <label for="numero">Veja quais números são perfeitos:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name=" verificar_numero">Verificar</button>
    </form>

<?php

    function verificacao($n){
        $perfeito = 0;

        for ($i = 1; $i < $n; $i++) { 
            if ($n % $i == 0) {
                $perfeito += $i; 
            }
        }
        return $perfeito;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['verificar_numero'])){
        $numero = (int)$_POST['numero'];

        if($numero <= 0){
            echo "Insira um valor positivo!";
        }else{
            $perfeito = verificacao($numero);

            if($perfeito == $numero){
                echo "O número $numero é perfeito.";
            }else{
                echo "O número $numero não é perfeito";
            }
        }
        
    }
?>

</body>
</html>