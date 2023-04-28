<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio de Comprobaci√≥n</title>
</head>
<body>
    <?php
    echo "Si llego a entrar", "<br>";
    include ("conex.php");
    $link = Conectarse();
      echo "Si se conecto", "<br>";
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $curp = $_POST['curp'];
    $calle = $_POST['calle'];
    $num_ext = $_POST['numexterior'];
    $num_int = $_POST['numinterior'];
    $colonia = $_POST['colonia'];
    $CP = $_POST['codigopostal'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $titulo_academico = $_POST['tituloacademico'];
    $area = $_POST['area'];
    $comision = $_POST['comision'];
    $fecha_contratacion = $_POST['fechacontratacion'];
    $at_epo_id = $_POST['at_epo_id'];
    $password = md5($_POST['password']);


    //Comprobar si la conexi√≥n fue exitosa
    if (!$link) {
        die('Error de conexi√≥n: ' . mysqli_connect_error());
    } 
         echo "Si vacio la informaci®Æn y no hubpo problem de conexi®Æn", "<br>";
    $sql = "INSERT INTO at_empleados(nombre, apellido, curp, calle, numexterior, numinterior, colonia, codigopostal, telefono, correo, tituloacademico, area, comision, fechacontratacion, at_epo_id, password)
    VALUES ('$nombre', '$apellido', '$curp', '$calle', '$num_ext', '$num_int', '$colonia', '$CP', '$telefono', '$correo', '$titulo_academico', '$area', '$comision', '$fecha_contratacion', '$at_epo_id', '$password')";
    echo $sql;
    mysqli_query($link, $sql) or die(mysqli_error($link));
    echo "<font color='#FFFFFF'>Los datos del trabajador han sido insertados correctamente.</font> <br>";

    //Cerrar la conexi√≥n a la base de datos
    mysqli_close($link);
    //Redireccionar al men˙ principal
header ("Location: ../aeternitas_menu_trabajador.php");
    ?>

</body>
</html>
