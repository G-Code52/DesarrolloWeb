<?php
    include ("conex.php");
    $link = Conectarse();
    $servicio = $_POST['tiposervicio'];
    $preciooriginal = $_POST['preciooriginal'];
    $descuento = $_POST['descuento'];
    $nombre = $_POST['nombrearchivo'];
    $descripcion = $_POST['descripcion'];
    $nombreservicio = $_POST['nombre'];


    $target_path = '../Imagenes/Servicios/';
    $archivo = $_FILES['archivo']['name'];
    $target_path = $target_path.basename($_FILES['archivo']['name']);


    //Comprobar si la conexión fue exitosa
    if (!$link) {
        die('Error de conexión: ' . mysqli_connect_error());
    }

    //Ejecutar la consulta mysqli INSERT
    if(move_uploaded_file($_FILES['archivo']['tmp_name'], $target_path)){
            $sql = "INSERT INTO at_servicios (tipo, preciooriginal, descuento, imagen, nombrearchivo, descripcion, nombre) VALUES ('$servicio', '$preciooriginal', '$descuento', '$archivo', '$nombre', '$descripcion', '$nombreservicio')";
            mysqli_query($link, $sql) or die (mysqli_error($link));
            echo "Datos insertados correctamente.";
            header ("Location: ../aeternitas_menu_trabajador.php");
    }
    else{
        printf("No se pudo subir articulo: $s a la ruta: $s", $nombre, $destino);
    }


    //Cerrar la conexión a la base de datos
    mysqli_close($link);
?>