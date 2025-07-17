<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form method="POST" action="">
        <label for="text">Veja se a palavra é Palindromo:</label>
        <input type="text" id="text" name="text" required>
        <button type="submit" name="verificar_text">Verificar</button>
    </form>

    <?php

    if (isset($_POST['text'])) {
        $string = $_POST['text'];
        echo "$string";
        echo "<br>";
        echo strrev($string);
        $reverse = strrev($string);
    }

    if ($reverse == $string){
        echo "<br>";
        echo "É palindromo";
    }else{
        echo "<br>";
        echo "Não é palindromo";
    }

    ?>
    
</body>
</html>