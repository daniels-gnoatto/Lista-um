<html lang="pt-BR">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calcular o fatorial de um número.</title>
</head>
<body>
    <form method="POST" action="">
            <label for="numero">Calcular o fatorial de um número.</label>
            <input type="number" id="numero" name="numero" required>
            <button type="submit" name="fatorial">Fatorial</button>
    </form>

    <?php
        function fatorial($numero) {
            $fatorial = 1;

            for($i = 1; $i <= $numero; $i++){
                $fatorial *= $i;
                echo "$fatorial * = $i";
                echo "<br>";
            };
        
            return($fatorial);    
        };

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['fatorial'])){
                $numeroFatorial = $_POST['numero'];
                
                $resultado = fatorial($numeroFatorial);  
                echo "O fatorial é = $resultado";
            };
        };
        
    ?>
</body>
</html>