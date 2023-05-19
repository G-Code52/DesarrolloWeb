<?php
    include ("conex.php");
    $link = Conectarse();

    $id = $_POST['id'];

        //Comprobar si la conexión fue exitosa
    if (!$link) {
        die('Error de conexión: ' . mysqli_connect_error());
    }
        //Eliminar datos
    $sql = "DELETE FROM at_servicios WHERE id='$id'";

    // execute the update query
    mysqli_query($link, $sql) or die (mysqli_error($link));

    // redirect to menu page
    header ("Location: ../menu_admin.php");

    // close database connection
    mysqli_close($link);
?>
