<?php
    include ("conex.php");
    $link = Conectarse();
    $id = $_POST['id'];
    $tipo = $_POST['tipo'];
    $preciooriginal = $_POST['preciooriginal'];
    $descuento = $_POST['descuento'];
    if($descuento == ""){
        $descuento=0;
    }
    $nombre = $_POST['nombre'];
    $nombrearchivo = $_POST['nombrearchivo'];
    $descripcion = $_POST['descripcion'];

    if (isset($_FILES['archivo']) && $_FILES['archivo']['size'] > 0) {
        // El archivo se ha enviado correctamente

        $target_path = '../Imagenes/Servicios/';
        $archivo = $_FILES['archivo']['name'];
        $target_path = $target_path . basename($_FILES['archivo']['name']);

        // Mover el archivo
        if (move_uploaded_file($_FILES['archivo']['tmp_name'], $target_path)) {
            // Actualizar el registro en la base de datos con el archivo
            $sql = "UPDATE at_servicios SET tipo='$tipo', preciooriginal='$preciooriginal', descuento='$descuento', imagen='$archivo', nombrearchivo='$nombrearchivo', descripcion='$descripcion', nombre='$nombre' WHERE id='$id'";
        } else {
            // No se pudo mover el archivo
            printf("No se  pudo subir archivo: %s a la ruta: %s", $nombre, $target_path);
            // Puedes realizar otras acciones en caso de error
        }
    } else {
        $sql = "UPDATE at_servicios SET tipo='$tipo', preciooriginal='$preciooriginal', descuento='$descuento', nombre='$nombre' WHERE id='$id'";

    }

    // Ejecutar la consulta de actualización
    mysqli_query($link, $sql) or die(mysqli_error($link));

    // Redireccionar a la página de menú
    header("Location: ../menu_admin.php");

    // Cerrar la conexión a la base de datos
    mysqli_close($link);
?>
