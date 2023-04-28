<?php
include ("conex.php");
$link = Conectarse();

//Obtener la variable id desde el formulario
$id = $_POST['id'];

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
//Comprobar si la conexión fue exitosa
if (!$link) {
    die('Error de conexión: ' . mysqli_connect_error());
}

//Ejecutar la consulta mysqli UPDATE
$sql = "UPDATE at_empleados SET 
        nombre = '$nombre', 
        apellido = '$apellido', 
        curp = '$curp',
        correo = '$correo', 
        telefono = '$telefono', 
        calle = '$calle', 
        num_ext = '$num_ext', 
        num_int = '$num_int', 
        colonia = '$colonia', 
        CP = '$CP',
        titulo_academico = '$titulo_academico',
        area = '$area',
        comision = '$comision',
        fecha_contratacion = '$fechacontratacion',
        at_epo_id = '$at_epo_id',
        password = '$password'
        WHERE id = '$id'";

mysqli_query($link, $sql) or die (mysqli_error($link));

//Cerrar la conexión a la base de datos
mysqli_close($link);

//Redireccionar al menú principal
header ("Location: ../aeternitas_menu_trabajador.php");
?>
