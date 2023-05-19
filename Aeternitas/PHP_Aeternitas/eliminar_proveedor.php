
	<?php

    include ("conex.php");
    $link = Conectarse();

    $id = $_POST['id'];
    

    //Comprobar si la conexión fue exitosa
    if (!$link) {
        die('Error de conexión: ' . mysqli_connect_error());
    }



        //Eliminar datos
    $sql = "DELETE FROM at_proveedores WHERE id='$id'";

    mysqli_query($link, $sql) or die (mysqli_error($link));
    header ("Location: ../menu_admin.php");

    //Cerrar la conexión a la base de datos
    mysqli_close($link);

	?>

