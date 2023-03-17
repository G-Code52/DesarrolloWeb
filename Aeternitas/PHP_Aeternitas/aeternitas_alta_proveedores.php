<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Comprobación Alta de Proveedores</title>
</head>
<body bgcolor="#21302E">
<font color="FFFFFF" size="5" face="Verdana">

	<?php

    $insumo = $_GET['tipo_insumo'];
    echo "<font color='#FFFFFF'>El tipo de insumo es: $insumo <br>";
    $nombre_empresa = $_GET['nombre_empresa'];
    echo "El nombre de la empresa es: $nombre_empresa<br>";
    $telefono = $_GET['telefono'];
    echo "El telefono de la empresa es: $telefono<br>";
    $calle = $_GET['direccion_calle'];
    $num_int = $_GET['direccion_num_int'];
    $colonia = $_GET['direccion_colonia'];
    $CP = $_GET['direccion_cp'];
    $municipio = $_GET['direccion_municipio'];
    echo "La direccion de la empresa es la siguiente: <br>
        La calle es: $calle <br>
        El numero interior es: $num_int <br>
        La colonia es: $colonia <br>
        El codigo postal es: $CP <br>
        El municipio es: $municipio <br></font>";

    echo "<a href='../aeternitas_info.html' target='Pantalla_principal'>Regresar</a><br>";
    echo "<a href='../aeternitas_menu_trabajador.html' target='Pantalla_principal'>Avanzar</a>";
	?>
</font>	
</body>
</html>