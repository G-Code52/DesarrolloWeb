<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inicio de Comprobación</title>
</head>
<body>
	<?php
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $correo = $_POST['correo'];
    $celular = $_POST['celular'];
    $calle = $_POST['direccion_calle'];
    $num_int = $_POST['direccion_num_int'];
    $colonia = $_POST['direccion_colonia'];
    $CP = $_POST['direccion_cp'];
    $municipio = $_POST['direccion_municipio'];
    $ocupacion = $_POST['ocupacion'];
    $telcasa = $_POST['telefonocasa'];
    $teltrabajo = $_POST['telefonotrabajo'];
    $ine = $_POST['ine'];
    $rfc = $_POST['rfc'];
    $tipo = $_POST['tipo'];
    $parentesco = $_POST['parentesco'];
    $idcliente = $_POST['at_cte_id'];

    //Comprobar si la conexión fue exitosa
    if (!$link) {
        die('Error de conexión: ' . mysqli_connect_error());
    }

    $sql = "INSERT INTO at_clientes (id, nombre, apellido,
     fechanacimiento, correo, telefono, calle, 
     numexterior, numinterior, colonia, codigopostal, municipio, 
     telefonocasa, telefonotrabajo, ine, rfc, tipo, parentesco, 
     at_cte_id) VALUES ('$nombre', '$')";
    mysqli_query($link, $sql) or die (mysqli_error($link));
    header ("Location: ../aeternitas_menu_trabajador.php");

    //Cerrar la conexión a la base de datos
    mysqli_close($link);








	?>
</body>
</html>