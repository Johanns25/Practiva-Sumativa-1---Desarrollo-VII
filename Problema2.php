<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 2</title>
    <link rel="stylesheet" href="cssProblemaly2.css">
</head>
<body>
<section>
    <h1>Problema 2</h1>
    <h3>Convierte de Pulgadas a Centimetros</h3>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="pulgada">Ingresa las Pulgadas: </label>
        <input type="text" name="pulgada" id="pulgada">
        <button type="submit">Enviar resultado</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["pulgada"])) {
        $pulgada = $_POST["pulgada"];
        $resultado = $pulgada * 2.54;
        echo "La conversión es: " . $resultado . "cm";
    }
    ?>
</section>
</body>
</html>