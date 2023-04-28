<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Comprobación Alta de Proveedores</title>
</head>
<body>

	<?php
    include ("conex.php");
    $link = Conectarse();


    $insumo = $_POST['tipoinsumo'];
    $nombre_empresa = $_POST['nombreempresa'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $nombredueno = $_POST['nombredueno'];
    $id = $_POST['id'];

    //Comprobar si la conexión fue exitosa
    if (!$link) {
        die('Error de conexión: ' . mysqli_connect_error());
    }

    //Update data
    $sql = "UPDATE at_contratos SET 
    tipoinsumo='$insumo',
    nombreempresa='$nombre_empresa',
    telefono='$telefono',
    direccion='$direccion',
    nombredueno='$nombredueno'
    WHERE id='$id'";

    mysqli_query($link, $sql) or die (mysqli_error($link));
    header ("Location: ../aeternitas_menu_trabajador.php");

    //Cerrar la conexión a la base de datos
    mysqli_close($link);

    ?>

</body>
</html>