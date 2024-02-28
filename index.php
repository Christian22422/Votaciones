<?php
include("conexion.php");

$region = mysqli_query($connection,"Select * from region order by id_region");

$candidatos = mysqli_query($connection,"Select * from candidato order by id_candidato");

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>VOTACIÓN</title>
</head>
<body>
    <h1>FORMULARIO DE VOTACIÓN</h1>
    <form action="insert.php" method="post">
        <p>Nombre y Apellido <input type="text" name="Nombre" size="40"></p>
        <p>Alias <input type="text" minlength="5" name="Alias" size="40"></p>
        <p>Rut <input type='text' name='Rut' size='40'></p>
        <p>Email <input type="text" name="Email" size="40"></p>
        <p>Region 
        <select name="region" id="region">
            <option value="">Selecione su Region</option>
            <?php while ($row = $region->fetch_assoc()) { ?>
                <option value="<?php echo $row['id_region']?>"><?php echo $row['name']?></option>
            <?php } ?>
        </select></p>
        <p>Comuna 
        <select name="comuna" id="comuna">
            <option value="">Selecione su Comuna</option>
        </select></p>
        <p>Candidato 
        <select name="candidato" id="candidato">
            <option value="">Selecione su Camdidato</option>
            <?php while ($row = $candidatos->fetch_assoc()) { ?>
                <option value="<?php echo $row['id_candidato']?>"><?php echo $row['nombre_cand']?></option>
            <?php } ?>
        </select></p>
        <p>Como se enteró de Nosotros 
            <input type="checkbox" value="Web" name="Entero" id="1">Web 
            <input type="checkbox" value="TV" name="Entero" id="2">TV 
            <input type="checkbox" value="RedesSociales" name="Entero" id="3">Redes Sociales 
            <input type="checkbox" value="Amigo" name="Entero" id="4">Amigo
        </p>
        <button type="submit" name="enviar">Votar</button>
    </form>
    <script src="js/peticiones.js"></script>
</body>
</html>
