<?php
    $user = "root";
    $pass = "";
    $host = "localhost";
    $db = "votaciones";

    $connection = mysqli_connect($host, $user, $pass, $db);

    if ($connection->connect_error) {
        echo "Error en la conexion". $connection->connect_error;
        exit();
    }

    
?>