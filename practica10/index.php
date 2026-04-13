<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Librería</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php">Librería</a>
            <div class="navbar-nav">
                <a class="nav-link active" href="index.php">Inicio</a>
                <a class="nav-link" href="registro.php">Registro</a>
                <a class="nav-link" href="consulta.php">Consulta</a>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="p-5 bg-secondary rounded">
            <h1 class="display-5">Sistema de Registro de Libros</h1>
            <p class="lead">
                Bienvenido al mini-sistema de librería. Desde aquí puedes registrar libros nuevos y consultar los libros almacenados en la base de datos.
            </p>
            <a href="registro.php" class="btn btn-warning me-2">Ir a Registro</a>
            <a href="consulta.php" class="btn btn-light">Ir a Consulta</a>
        </div>
    </div>

</body>
</html>