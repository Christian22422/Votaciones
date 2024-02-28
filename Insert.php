<?php
include("conexion.php");

insert($connection);
function insert($connection){
    $nombre = $_POST['Nombre'];
    $alias = $_POST['Alias'];
    $rut = $_POST['Rut'];
    $email = $_POST['Email'];
    $region = $_POST['region'];
    $comuna = $_POST['comuna'];
    $candidato = $_POST['candidato'];
    $SeEntero = $_POST['Entero'];

    $consulta = "INSERT INTO votante(nombre, alias, rut, email, id_region, id_comuna, id_candidato, entero_por)  
    values('$nombre', '$alias', '$rut', '$email','$region','$comuna', '$candidato','$SeEntero')";

    mysqli_query($connection, $consulta);
    mysqli_close($connection);
}
?>