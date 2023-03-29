<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inicio de Comprobación</title>
</head>
<body bgcolor="#21302E">
<font color="FFFFFF" size="5" face="Verdana">

	<?php

    $nombre = $_POST['nombre'];
    echo "<font color='#FFFFFF'>El nombre del trabajador es: $nombre</font> <br>";
    $apellido = $_POST['apellido'];
    echo "<font color='#FFFFFF'>Los apellidos del trabajador son: $apellido </font><br>";
    $correo = $_POST['correo'];
    echo "<font color='#FFFFFF'>El correo del trabajador es: $correo</font><br>";
    $celular = $_POST['telefono'];
    echo "<font color='#FFFFFF'>El numero telefónico del trabajador es: $celular</font><br>";
    $calle = $_POST['calle'];
    $num_ext = $_POST['numexterior'];
    $num_int = $_POST['numinterior'];
    $colonia = $_POST['colonia'];
    $CP = $_POST['codigopostal'];
    echo "<font color='#FFFFFF'>La direccion del tabajador es: <br> 
    		Calle: $calle, Numero Exterior: $num_ext , Numero Interior: $num_int <br>
    		Colonia: $colonia , Codigo Postal: $CP</font><br>";
    echo "<a href='../aeternitas_info.html' target='Pantalla_principal'>Regresar</a>"

	?>
</font>
</body>
</html>