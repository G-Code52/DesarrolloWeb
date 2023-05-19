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

    $id = $_POST['id'];
    $insumo = $_POST['tipoinsumo'];
    $nombre_empresa = $_POST['nombreempresa'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $nombredueno = $_POST['nombredueno'];
    $precioservicio = $_POST['precioservicio'];
    $descripcion = $_POST['descripcion'];
    

    //Comprobar si la conexión fue exitosa
    if (!$link) {
        die('Error de conexión: ' . mysqli_connect_error());
    }

    // Use UPDATE statement with WHERE clause to update the record with the given "id" value
    $sql = "UPDATE at_proveedores SET tipoinsumo='$insumo', nombreempresa='$nombre_empresa', telefono='$telefono', direccion='$direccion', nombredueno='$nombredueno', descripcion='$descripcion', precioservicio='$precioservicio' WHERE id='$id'";
    mysqli_query($link, $sql) or die (mysqli_error($link));
    header ("Location: ../menu_admin.php");

    //Cerrar la conexión a la base de datos
    mysqli_close($link);

	?>
</body>
</html>
