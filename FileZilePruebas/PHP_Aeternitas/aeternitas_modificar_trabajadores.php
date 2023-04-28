<?php
include ("conex.php");
$link = Conectarse();

//Obtener la variable id desde el formulario
$id = $_POST['id'];

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

//Ejecutar la consulta mysqli UPDATE
$sql = "UPDATE at_trabajadores SET 
        nombre = '$nombre', 
        apellido = '$apellido', 
        correo = '$correo', 
        celular = '$celular', 
        calle = '$calle', 
        num_ext = '$num_ext', 
        num_int = '$num_int', 
        colonia = '$colonia', 
        CP = '$CP' 
        WHERE id = '$id'";
mysqli_query($link, $sql) or die (mysqli_error($link));

//Cerrar la conexión a la base de datos
mysqli_close($link);

//Redireccionar al menú principal
header ("Location: ../aeternitas_menu_trabajador.php");
?>
