<?php
    include("conexion.php");
    $sql = "SELECT * FROM libros";
    $resultado = mysqli_query($conexion, $sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Libros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php">Librería</a>
            <div class="navbar-nav">
                <a class="nav-link" href="index.php">Inicio</a>
                <a class="nav-link" href="registro.php">Registro</a>
                <a class="nav-link active" href="consulta.php">Consulta</a>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h2 class="mb-4">Libros registrados</h2>

        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover align-middle bg-white">
                <thead class="table-primary">
                    <tr>
                        <th>ID</th>
                        <th>Autor</th>
                        <th>Título</th>
                        <th>Fecha de publicación</th>
                        <th>Portada</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($fila = mysqli_fetch_assoc($resultado)) {
                            echo "<tr>";
                            echo "<td>" . $fila["id"] . "</td>";
                            echo "<td>" . $fila["autor"] . "</td>";
                            echo "<td>" . $fila["titulo"] . "</td>";
                            echo "<td>" . $fila["fecha_publicacion"] . "</td>";
                            echo "<td><img src='data:image/jpeg;base64," . base64_encode($fila["imagen_portada"]) . "' width='100'></td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
<?php
    mysqli_close($conexion);
?>