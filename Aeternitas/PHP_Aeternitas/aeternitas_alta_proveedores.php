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

    $insumo = $_POST['tipoinsumo'];
    echo "<font color='#FFFFFF'>El tipo de insumo es: $insumo <br>";
    $nombre_empresa = $_POST['nombreempresa'];
    echo "El nombre de la empresa es: $nombre_empresa<br>";
    $telefono = $_POST['telefono'];
    echo "El telefono de la empresa es: $telefono<br>";
    $direccion = $_POST['direccion'];
    echo "La direccion de la empresa es la siguiente: <br>
        $direccion<br></font>";

    echo "<a href='../aeternitas_info.html' target='Pantalla_principal'>Regresar</a><br>";
    echo "<a href='../aeternitas_menu_trabajador.html' target='Pantalla_principal'>Avanzar</a>";
	?>
</font>	
</body>
</html>