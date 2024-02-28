<?php

require 'conexion.php';

$idregion = $connection->real_escape_string($_POST['id_region']);

$sql = $connection->query("SELECT id_comuna, comuna FROM comuna WHERE id_region=$idregion");

$respuesta = "<option value='0'>Seleccionar</option>";

while ($row = $sql->fetch_assoc()) {
    $respuesta .= "<option value='" . $row['id_comuna'] . "'>" . $row['comuna'] . "</option>";
}

echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
?>