<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Libros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php">Librería</a>
            <div class="navbar-nav">
                <a class="nav-link" href="index.php">Inicio</a>
                <a class="nav-link active" href="registro.php">Registro</a>
                <a class="nav-link" href="consulta.php">Consulta</a>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-warning">
                <h3 class="mb-0 text-dark">Registrar libro</h3>
            </div>
            <div class="card-body">
                <form action="guardar.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="autor" class="form-label">Autor</label>
                        <input type="text" class="form-control" name="autor" id="autor">
                    </div>

                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título</label>
                        <input type="text" class="form-control" name="titulo" id="titulo">
                    </div>

                    <div class="mb-3">
                        <label for="fecha_publicacion" class="form-label">Fecha de publicación</label>
                        <input type="date" class="form-control" name="fecha_publicacion" id="fecha_publicacion">
                    </div>

                    <div class="mb-3">
                        <label for="imagen_portada" class="form-label">Imagen de portada</label>
                        <input type="file" class="form-control" name="imagen_portada" id="imagen_portada" accept="image/*">
                    </div>

                    <button type="submit" class="btn btn-primary">Guardar libro</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>