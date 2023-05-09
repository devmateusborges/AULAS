<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="nome" />
        <br>
        <br>
        <input type="number" name="numero" />
        <br>
        <br>
        <input type="submit" value="Enviar">
    </form>


    <?php
    define("NOME", "Mateus");
    define("NUMERO", "1000");

    echo "<h2>Nome    : " . NOME . "</h2><br> <hr>";
    echo "<h2>Numero : " . NUMERO . "</h2>";
    echo "</hr>";

    $nome = "mateus";

    echo "Variavel foi iniciada" . isset($nome) . "</br>";
    echo "È um texto" . is_string($nome) . "</br>";
    echo "È um numero" . is_numeric($nome) . "</br>";

    ?>
</body>

</html>