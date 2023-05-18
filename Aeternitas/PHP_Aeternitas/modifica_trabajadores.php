<?php
	include("./security.php")
?>
<?php
include ("./conex.php");
$link = Conectarse();

//Obtener la variable id desde el formulario
$idCliente = $_POST['id'];
$calle = $_POST['calle'];
$numexterior = $_POST['numexterior'];
$numinterior = $_POST['numinterior'];
$colonia = $_POST['colonia'];
$CP = $_POST['codigopostal'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$tituloacademico = $_POST['tituloacademico'];
$area = $_POST['area'];
$comision = $_POST['comision'];
$at_epo_id = $_POST['at_epo_id'];
//Comprobar si la conexión fue exitosa
if (!$link) {
    die('Error de conexión: ' . mysqli_connect_error());
}

//Ejecutar la consulta mysqli UPDATE
$sql = "UPDATE at_empleados SET 
        calle = '$calle', 
        numexterior = '$numexterior', 
        numinterior = '$numinterior', 
        colonia = '$colonia', 
        codigopostal = '$CP',
        tituloacademico = '$tituloacademico',
        area = '$area',
        comision = '$comision',
        at_epo_id = '$at_epo_id'
        WHERE id = '$idCliente'";

mysqli_query($link, $sql) or die (mysqli_error($link));

//Cerrar la conexión a la base de datos
mysqli_close($link);
 
if($_SESSION['area']=='Administrador'){
    header ("Location: ../menu_admin.php");
}
else{
    header ("Location: ../menu_trabajador.php");
}
?>
