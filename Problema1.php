<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema1</title>
    <link rel="stylesheet" href="cssProblemaly2.css">
</head>
<body>
<section>
    <h1>Problema 1</h1>
    <h3>Calcula el area de la circunferencia</h3>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="radio">Radio: </label>
        <input type="text" name="radio" id="radio">
        <button type="submit">Enviar resultado</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["radio"])) {
        $radio = $_POST["radio"];
        $resultadoArea = 3.14159 * pow($radio, 2);
        $resPerimetro = 2 * 3.14159 * $radio;
        echo "El numero del radio es: " . $radio . "<br>";
        echo "El resultado del area es: " . $resultadoArea . "<br>";
        echo "El resultado del perimetro es: " . $resPerimetro;
    }
    ?>
</section>
</body>
</html>