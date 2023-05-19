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

    $sumaprecio = 0;
    $nombrecliente = $_POST['nombrecliente'];
    $nombreempleado = $_POST['nombreempleado'];
    $servicios = $_POST['servicios'];
    $proveedores = $_POST['proveedores'];
    $fechafirma = $_POST['fechafirma'];
    $tipopago = $_POST['tipopago'];

    echo "Servicios: ".$servicios;
    echo "proveedores: ".$proveedores;
    $result = mysqli_query($link, "SELECT * FROM at_servicios WHERE nombre = '$servicios'");
    $row = mysqli_fetch_array($result);
    echo "Resultado consulta: ".$row['preciooriginal'];
    $sumaprecio += $row['preciooriginal'];
    $result = mysqli_query($link, "SELECT * FROM at_proveedores WHERE tipoinsumo = '$proveedores'");
    $row = mysqli_fetch_array($result);
    echo "Resultado consulta: ".$row['precioservicio'];
    $sumaprecio += $row['precioservicio'];


    //Comprobar si la conexión fue exitosa
    if (!$link) {
        die('Error de conexión: ' . mysqli_connect_error());
    }

    $sql = "INSERT INTO at_contratos (preciofinal, tipopago, fechafirma, nombrecliente, nombreempleado, servicios, proveedores) 
    VALUES ('$sumaprecio', '$tipopago', '$fechafirma', '$nombrecliente', '$nombreempleado', '$servicios', '$proveedores')";
    mysqli_query($link, $sql) or die (mysqli_error($link));
    if($_SESSION['area']=="Administrador"){
        header ("Location: ../menu_admin.php");
    }
    else{
        header ("Location: ../menu_trabajador.php");
    }
    //Cerrar la conexión a la base de datos
    mysqli_close($link);
	?>
</body>
</html>