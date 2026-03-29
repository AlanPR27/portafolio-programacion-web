<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Práctica 8 - Tabla Compra</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <div class="contenedor">
        <h1>Tabla de Compras</h1>
        <p>Consulta de la tabla compra mostrando modelo y usuario en lugar de llaves foráneas.</p>

        <?php
            include("conexion.php");

            $sql = "SELECT compra.id, modelo.nombre AS modelo, usuarios.nombre AS usuario, compra.folio
                    FROM compra
                    INNER JOIN modelo ON compra.idModelo = modelo.id
                    INNER JOIN usuarios ON compra.idUsuario = usuarios.id";

            $resultado = $conn->query($sql);

            if ($resultado->num_rows > 0) {
                echo "<table>";
                echo "<tr>";
                echo "<th>id</th>";
                echo "<th>Modelo</th>";
                echo "<th>Usuario</th>";
                echo "<th>Folio</th>";
                echo "</tr>";

                while($fila = $resultado->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $fila["id"] . "</td>";
                    echo "<td>" . $fila["modelo"] . "</td>";
                    echo "<td>" . $fila["usuario"] . "</td>";
                    echo "<td>" . $fila["folio"] . "</td>";
                    echo "</tr>";
                }

                echo "</table>";
            }
            else {
                echo "<p class='error'>No hay registros en la tabla compra.</p>";
            }

            $conn->close();
        ?>

        <p><a href="../index.html">Volver al inicio</a></p>
    </div>

</body>
</html>