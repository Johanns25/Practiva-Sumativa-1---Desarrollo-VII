<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $expresion = $_POST["expresion"] ?? "";

    // Validación básica (solo números y operadores permitidos)
    if (preg_match('/^[0-9+\-*.\/ ()]+$/', $expresion)) {
        // Evaluar expresión matemática
        eval("\$resultado = $expresion;");
    } else {
        $resultado = "Expresión inválida";
    }
}
?>

<form method="post">
    <div class="calculadora">

        <h2>Calculadora</h2>

        <!-- PANTALLA -->
        <input type="text" name="expresion" id="pantalla" value="<?php echo htmlspecialchars($_POST['expresion'] ?? '') ?>" readonly>

        <?php if ($resultado !== ""): ?>
            <div class="resultado">= <?php echo $resultado; ?></div>
        <?php endif; ?>

        <!-- BOTONES -->
        <div class="botones">

            <button type="button" onclick="agregar('7')">7</button>
            <button type="button" onclick="agregar('8')">8</button>
            <button type="button" onclick="agregar('9')">9</button>
            <button type="button" onclick="agregar('/')">÷</button>

            <button type="button" onclick="agregar('4')">4</button>
            <button type="button" onclick="agregar('5')">5</button>
            <button type="button" onclick="agregar('6')">6</button>
            <button type="button" onclick="agregar('*')">×</button>

            <button type="button" onclick="agregar('1')">1</button>
            <button type="button" onclick="agregar('2')">2</button>
            <button type="button" onclick="agregar('3')">3</button>
            <button type="button" onclick="agregar('-')">−</button>

            <button type="button" onclick="agregar('0')">0</button>
            <button type="button" onclick="agregar('.')">.</button>
            <button type="button" onclick="limpiar()">C</button>
            <button type="button" onclick="agregar('+')">+</button>

            <button type="submit" class="igual">=</button>

        </div>
    </div>
</form>

<script>
function agregar(valor) {
    document.getElementById("pantalla").value += valor;
}

function limpiar() {
    document.getElementById("pantalla").value = "";
}
</script>

</body>
</html>