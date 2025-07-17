<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="POST" action="">
        <label for="text">Vamos ver quantas vogais há na palavra:</label>
        <input type="text" id="text" name="text" required>
        <button type="submit" name="verificar_text">Verificar</button>
    </form>

    <?php
    if (isset($_POST['verificar_text'])) {
        $string = $_POST['text'];
        echo "$string<br>";
        
        $quantidade = temVogal($string);
        
        if ($quantidade > 0) {
            echo "Contém $quantidade vogais";
        } else {
            echo "Não contém vogais";
        }
    }

    function temVogal($string){
        $vogais = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
        $quantidade = 0;
        $separadas = str_split($string);
        
        foreach ($separadas as $char) {
            if (in_array($char, $vogais)) {
                $quantidade += 1;
            }
        }
        return $quantidade;
    }
    ?>
</body>
</html>
