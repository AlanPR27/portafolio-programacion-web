<?php
    include("conexion.php");

    $autor = $_POST["autor"];
    $titulo = $_POST["titulo"];
    $fecha_publicacion = $_POST["fecha_publicacion"];

    if ($autor == "" || $titulo == "" || $fecha_publicacion == "" || $_FILES["imagen_portada"]["tmp_name"] == "") {
        echo "
        <script>
            alert('Todos los campos son obligatorios');
            window.location='registro.php';
        </script>
        ";
        exit();
    }

    $imagen = addslashes(file_get_contents($_FILES["imagen_portada"]["tmp_name"]));

    $sql = "INSERT INTO libros (autor, titulo, fecha_publicacion, imagen_portada)
            VALUES ('$autor', '$titulo', '$fecha_publicacion', '$imagen')";

    if (mysqli_query($conexion, $sql)) {
        echo "
        <script>
            alert('Libro guardado correctamente');
            window.location='consulta.php';
        </script>
        ";
    } else {
        echo "Error al guardar: " . mysqli_error($conexion);
    }

    mysqli_close($conexion);
?>