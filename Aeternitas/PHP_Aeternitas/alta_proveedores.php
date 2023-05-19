<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Alta de Proveedores</title>
</head>
<body>
	<?php
    include ("conex.php");
    $link = Conectarse();

    $insumo = $_POST['tipoinsumo'];
    $nombreempresa = $_POST['nombreempresa'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $nombredueno = $_POST['nombredueno'];
    $precioservicio = $_POST['precioservicio'];
    $descripcion = $_POST['descripcion'];

    //Comprobar si la conexión fue exitosa
    if (!$link) {
        die('Error de conexión: ' . mysqli_connect_error());
    }

    $sql = "INSERT INTO at_proveedores (tipoinsumo, nombreempresa, telefono, direccion, nombredueno, descripcion, precioservicio) 
    VALUES ('$insumo', '$nombreempresa', '$telefono', '$direccion', '$nombredueno','$descripcion', '$precioservicio')";
    mysqli_query($link, $sql) or die (mysqli_error($link));
    header ("Location: ../menu_admin.php");

    //Cerrar la conexión a la base de datos
    mysqli_close($link);

	?>
</body>
</html>