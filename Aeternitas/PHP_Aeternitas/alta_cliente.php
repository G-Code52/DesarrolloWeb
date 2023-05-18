<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inicio de Comprobación</title>
</head>
<body>
	<?php

    include 'conex.php';
    $link = Conectarse();
    //Comprobar si la conexión fue exitosa
    if (!$link) {
        die('Error de conexión: ' . mysqli_connect_error());
    }

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fechanacimiento = $_POST['fecha_nacimiento'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $calle = $_POST['calle'];
    $numexterior = $_POST['numexterior'];
    $numinterior = $_POST['numinterior'];
    $colonia = $_POST['colonia'];
    $codigopostal = $_POST['codigopostal'];
    $municipio = $_POST['municipio'];
    $telefonocasa = $_POST['telefonocasa'];
    $telefonotrabajo = $_POST['telefonotrabajo'];
    $ine = $_POST['ine'];
    $rfc = $_POST['rfc'];
    $tipo = $_POST['tipo'];
    $parentesco = $_POST['parentesco'];
    $at_cte_id = $_POST['at_cte_id'];



    $sql = "INSERT INTO at_clientes (nombre, apellido,
     fechanacimiento, correo, telefono, calle, 
     numexterior, numinterior, colonia, codigopostal, municipio, 
     telefonocasa, telefonotrabajo, ine, rfc, tipo, parentesco, 
     at_cte_id) VALUES ('$nombre', '$apellido','$fechanacimiento', '$correo'
     , '$telefono', '$calle', '$numexterior', '$numinterior'
     , '$colonia', '$codigopostal', '$municipio', '$telefonocasa', '$telefonotrabajo'
     , '$ine', '$rfc', '$tipo', '$parentesco', '$at_cte_id' )";
    mysqli_query($link, $sql) or die (mysqli_error($link));
    header ("Location: ../menu_trabajador.php");

    //Cerrar la conexión a la base de datos
    mysqli_close($link);








	?>
</body>
</html>