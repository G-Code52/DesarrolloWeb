<?php
include ("conex.php");
$link = Conectarse();

//Obtener la variable id desde el formulario
$id = $_POST['id']; 

//Comprobar si la conexión fue exitosa
if (!$link) {
    die('Error de conexión: ' . mysqli_connect_error());
}

    //Eliminar datos
    $sql = "DELETE FROM at_empleados WHERE id='$id'";


mysqli_query($link, $sql) or die (mysqli_error($link));

//Cerrar la conexión a la base de datos
mysqli_close($link);

//Redireccionar al menú principal
header ("Location: ../menu_admin.php");
?>
