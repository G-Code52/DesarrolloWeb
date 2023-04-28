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
    $id = $_POST['id']; // Add this line to get the "id" value from the form

    //Comprobar si la conexión fue exitosa
    if (!$link) {
        die('Error de conexión: ' . mysqli_connect_error());
    }

    // Use UPDATE statement with WHERE clause to update the record with the given "id" value
    $sql = "UPDATE at_proveedores SET tipoinsumo='$insumo', nombreempresa='$nombre_empresa', telefono='$telefono', direccion='$direccion', nombredueno='$nombredueno' WHERE id='$id'";
    mysqli_query($link, $sql) or die (mysqli_error($link));
    header ("Location: ../aeternitas_menu_trabajador.php");

    //Cerrar la conexión a la base de datos
    mysqli_close($link);

	?>
</body>
</html>
