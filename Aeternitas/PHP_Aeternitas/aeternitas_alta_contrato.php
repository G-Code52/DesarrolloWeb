<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Comprobación Alta de Proveedores</title>
</head>
<body bgcolor="#21302E">
	<?php

    $id = $_GET['ID'];
    echo "<font color='#FFFFFF'>El id del cliente es: $id <br>";
    $fecha = $_GET['fecha'];
    echo "La fecha del contrato es: $fecha<br>";
    
    echo "<a href='../aeternitas_info.html' target='Pantalla_principal'>Regresar</a><br>";
    echo "<a href='../aeternitas_menu_trabajador.html' target='Pantalla_principal'>Avanzar</a>";
	?>
	
</body>
</html>