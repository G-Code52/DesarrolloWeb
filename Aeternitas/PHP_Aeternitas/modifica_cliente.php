<?php
	include("./security.php")
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio de Comprobación</title>
</head>
<body>
    <?php
    include "./conex.php";
    $link = Conectarse();

    $idCliente = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fechanacimiento = $_POST['fecha_nacimiento'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $calle = $_POST['calle'];
    $numexterior = $_POST['numexterior'];
    $numinterior = $_POST['numinterior'];
    $colonia = $_POST['colonia'];
    $codigopostal = $_POST['codigopostal'];
    $municipio = $_POST['municipio'];
    $telefonocasa = $_POST['telefonocasa'];
    $telefonotrabajo = $_POST['telefonotrabajo'];
    $ine = $_POST['ine'];
    $rfc = $_POST['rfc'];
    $tipo = $_POST['tipo'];
    $parentesco = $_POST['parentesco'];
    $at_cte_id = $_POST['at_cte_id'];

    //Comprobar si la conexión fue exitosa
    if (!$link) {
        die('Error de conexión: ' . mysqli_connect_error());
    }

    //Insertar datos
    $sql = "UPDATE at_clientes SET 
    nombre='$nombre',
    apellido='$apellido',
    fechanacimiento='$fechanacimiento',
    correo='$correo',
    telefono='$telefono',
    calle='$calle',
    numexterior='$numexterior',
    numinterior='$numinterior',
    colonia='$colonia',
    codigopostal='$codigopostal',
    municipio='$municipio',
    telefonocasa='$telefonocasa',
    telefonotrabajo='$telefonotrabajo',
    ine='$ine',
    rfc='$rfc',
    tipo='$tipo',
    parentesco='$parentesco'
    WHERE id='$idCliente'";

    mysqli_query($link, $sql) or die (mysqli_error($link));
 
    if($_SESSION['area']=='Administrador'){
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
