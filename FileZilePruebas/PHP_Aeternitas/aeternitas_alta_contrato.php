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


    $precio = $_POST['preciofinal'];
    $tipopago = $_POST['tipopago'];
    $fechafirma = $_POST['fechafirma'];
    $idcliente = $_POST['at_cte_id'];
    $idempleado = $_POST['at_epo_id'];

    //Comprobar si la conexión fue exitosa
    if (!$link) {
        die('Error de conexión: ' . mysqli_connect_error());
    }

    $sql = "INSERT INTO at_contratos (preciofinal, tipopago, fechafirma, at_cte_id, at_epo_id) VALUES ('$precio', '$tipopago', '$fechafirma', '$idcliente', '$idempleado')";
    mysqli_query($link, $sql) or die (mysqli_error($link));
    header ("Location: ../aeternitas_menu_trabajador.php");

    //Cerrar la conexión a la base de datos
    mysqli_close($link);
	?>
</body>
</html>