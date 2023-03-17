<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Comprobación Alta de Servicios</title>
</head>
<body bgcolor="#21302E">
<font color="FFFFFF" size="5" face="Verdana">

	<?php

    $servicio = $_GET['servicio'];
    echo "<font color='#FFFFFF'>El nombre del servicio es: $servicio <br>";
    $precio = $_GET['precio_original'];
    echo "El precio original es de: $$precio<br>";
    $descuento = $_GET['descuento'];
    echo "El descuento es de: $descuento%</font><br>";

    echo "<a href='../aeternitas_info.html' target='Pantalla_principal'>Regresar</a><br>";
    echo "<a href='../aeternitas_menu_trabajador.html' target='Pantalla_principal'>Avanzar</a>";
	?>
</font>	
</body>
</html>