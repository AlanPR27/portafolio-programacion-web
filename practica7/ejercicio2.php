<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Práctica 7 - Ejercicio 2</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>

    <div class="contenedor">
        <h1>Aproximación del número e</h1>

        <p>
            Este programa aproxima el valor de e usando la fórmula:
        </p>

        <p>
            e = Σ (1 / i!)
        </p>

        <form method="post" action="">
            <label for="n">Ingrese el valor de n:</label>
            <input type="number" name="n" id="n" min="1">
            <input type="submit" value="Calcular">
        </form>

        <?php
            function factorial($num) {
                $resultado = 1;

                for ($j = 1; $j <= $num; $j++) {
                    $resultado = $resultado * $j;
                }

                return $resultado;
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $n = $_POST["n"];

                if ($n == "" || $n <= 0) {
                    echo "<p class='error'>Error: el valor de n debe ser mayor que cero.</p>";
                }
                else {
                    $suma = 0;

                    echo "<p class='resultado'>Valor de n: " . $n . "</p>";

                    echo "<table>";
                    echo "<tr>";
                    echo "<th>n</th>";
                    echo "<th>x</th>";
                    echo "</tr>";

                    for ($i = 0; $i <= $n; $i++) {
                        $suma = $suma + (1 / factorial($i));

                        echo "<tr>";
                        echo "<td>" . $i . "</td>";
                        echo "<td>" . $suma . "</td>";
                        echo "</tr>";
                    }

                    echo "</table>";

                    echo "<p class='resultado'>Aproximación final de e: " . $suma . "</p>";
                }
            }
        ?>

        <p><a href="../index.html">Volver al inicio</a></p>
    </div>

</body>
</html>