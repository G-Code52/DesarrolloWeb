<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio de Comprobación</title>
</head>
<body bgcolor="#21302E">
<font color="FFFFFF" size="5" face="Verdana">

    <?php
    include ("conex.php");
    $link = Conectarse();

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $celular = $_POST['telefono'];
    $calle = $_POST['calle'];
    $num_ext = $_POST['numexterior'];
    $num_int = $_POST['numinterior'];
    $colonia = $_POST['colonia'];
    $CP = $_POST['codigopostal'];

    //Comprobar si la conexión fue exitosa
    if (!$link) {
        die('Error de conexión: ' . mysqli_connect_error());
    }

    $sql = "INSERT INTO at_trabajadores (nombre, apellido, correo, celular, calle, num_ext, num_int, colonia, CP) VALUES ('$nombre', '$apellido', '$correo', '$celular', '$calle', '$num_ext', '$num_int', '$colonia', '$CP')";
    mysqli_query($link, $sql) or die (mysqli_error($link));

    echo "<font color='#FFFFFF'>Los datos del trabajador han sido insertados correctamente.</font> <br>";

    //Cerrar la conexión a la base de datos
    mysqli_close($link);
    ?>
    <br>
    <a href='../aeternitas_info.html' target='Pantalla_principal'>Regresar</a>
</font>
</body>
</html>
