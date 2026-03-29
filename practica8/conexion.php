<?php
    $servername = "db";
    $username = "root";
    $password = "root_password";
    $dbname = "autos";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }
?>