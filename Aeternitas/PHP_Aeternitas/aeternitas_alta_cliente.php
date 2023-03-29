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
    echo "<font color='#FFFFFF'>El nombre del cliente es: $nombre</font> <br>";
    $apellido = $_POST['apellido'];
    echo "<font color='#FFFFFF'>Los apellidos del cliente son: $apellido </font><br>";
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    echo "<font color='#FFFFFF'>La fecha de nacimiento del cliente es: $fecha_nacimiento</font><br>";
    $correo = $_POST['correo'];
    echo "<font color='#FFFFFF'>El correo del cliente es: $correo</font><br>";
    $celular = $_POST['celular'];
    echo "<font color='#FFFFFF'>El numero telefónico del cliente es: $celular</font><br>";
    $calle = $_POST['direccion_calle'];
    $num_int = $_POST['direccion_num_int'];
    $colonia = $_POST['direccion_colonia'];
    $CP = $_POST['direccion_cp'];
    $municipio = $_POST['direccion_municipio'];
    echo "<font color='#FFFFFF'>La direccion del cliente es: <br> 
    		Calle: $calle , Numero Interior: $num_int <br>
    		Colonia: #colonia , Codigo Postal: $CP <br>
    		Municipio: $municipio </font><br>";
    $ocupacion = $_POST['ocupacion'];
    echo "<font color='#FFFFFF'>La ocupación del cliente es: $ocupacion </font><br>";


    echo "<a href='../aeternitas_menu_trabajador.html' target='Pantalla_principal'>Regresar</a>"

	?>
</font>
</body>
</html>