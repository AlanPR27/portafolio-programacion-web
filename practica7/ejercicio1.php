<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Práctica 7 - Ejercicio 1</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>

    <div class="contenedor">
        <h1>Aproximación del número pi</h1>

        <p>
            Este programa aproxima el valor de pi usando la fórmula:
        </p>

        <p>
            π = 4 × Σ((-1)^i / (2i + 1))
        </p>

        <form method="post" action="">
            <label for="n">Ingrese el valor de n:</label>
            <input type="number" name="n" id="n" min="1">
            <input type="submit" value="Calcular">
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $n = $_POST["n"];

                if ($n <= 0 || $n == "") {
                    echo "<p class='error'>Error: el valor de n debe ser mayor que cero.</p>";
                }
                else {
                    $suma = 0;

                    for ($i = 0; $i <= $n; $i++) {
                        $termino = pow(-1, $i) / (2 * $i + 1);
                        $suma = $suma + $termino;
                    }

                    $pi = 4 * $suma;

                    echo "<p class='resultado'>Valor de n: " . $n . "</p>";
                    echo "<p class='resultado'>Aproximación de pi: " . $pi . "</p>";
                }
            }
        ?>

        <p><a href="../index.html">Volver al inicio</a></p>
    </div>

</body>
</html>