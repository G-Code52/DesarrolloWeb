<?php
    include ("conex.php");
    $link = Conectarse();

    $id = $_POST['id'];
    $servicio = $_POST['tiposervicio'];
    $preciooriginal = $_POST['preciooriginal'];
    $descuento = $_POST['descuento'];
    $nombre = $_POST['nombrearchivo'];

    // ver si el archivo es nuevo
    if($_FILES['archivo']['size'] > 0) {
        $target_path = '../Imagenes/Servicios/';
        $archivo = $_FILES['archivo']['name'];
        $target_path = $target_path.basename($_FILES['archivo']['name']);

        // mover el archivo
        if(move_uploaded_file($_FILES['archivo']['tmp_name'], $target_path)){
            // actualizar archivo
            $sql = "UPDATE at_servicios SET tipo='$servicio', preciooriginal='$preciooriginal', descuento='$descuento', imagen='$archivo', nombrearchivo='$nombre' WHERE id='$id'";
        } else {
            printf("No se pudo subir archivo: %s a la ruta: %s", $nombre, $target_path);
        }
    } else {
        // actualziar
        $sql = "UPDATE at_servicios SET tipo='$servicio', preciooriginal='$preciooriginal', descuento='$descuento', nombrearchivo='$nombre' WHERE id='$id'";
    }

    // execute the update query
    mysqli_query($link, $sql) or die (mysqli_error($link));

    // redirect to menu page
    header ("Location: ../aeternitas_menu_trabajador.php");

    // close database connection
    mysqli_close($link);
?>
