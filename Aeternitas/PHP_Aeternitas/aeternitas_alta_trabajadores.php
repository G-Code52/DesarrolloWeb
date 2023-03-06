<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inicio de Comprobación</title>
</head>
<body bgcolor="#21302E">
	<?php

    $nombre = $_GET['nombre'];
    echo "<font color='#FFFFFF'>El nombre del trabajador es: $nombre</font> <br>";
    $apellido = $_GET['apellido'];
    echo "<font color='#FFFFFF'>Los apellidos del trabajador son: $apellido </font><br>";
    $fecha_nacimiento = $_GET['fecha_nacimiento'];
    echo "<font color='#FFFFFF'>La fecha de nacimiento del trabajador es: $fecha_nacimiento</font><br>";
    $correo = $_GET['correo'];
    echo "<font color='#FFFFFF'>El correo del trabajador es: $correo</font><br>";
    $celular = $_GET['celular'];
    echo "<font color='#FFFFFF'>El numero telefónico del trabajador es: $celular</font><br>";
    $calle = $_GET['direccion_calle'];
    $num_int = $_GET['direccion_num_int'];
    $colonia = $_GET['direccion_colonia'];
    $CP = $_GET['direccion_cp'];
    $municipio = $_GET['direccion_municipio'];
    echo "<font color='#FFFFFF'>La direccion del tabajador es: <br> 
    		Calle: $calle , Numero Interior: $num_int <br>
    		Colonia: #colonia , Codigo Postal: $CP <br>
    		Municipio: $municipio </font><br>";
    $area = $_GET['area'];
    echo "<font color='#FFFFFF'>El area del trabajador es: $area </font><br>";


    echo "<a href='../aeternitas_info.html' target='Pantalla_principal'>Regresar</a>"

	?>
	
</body>
</html>