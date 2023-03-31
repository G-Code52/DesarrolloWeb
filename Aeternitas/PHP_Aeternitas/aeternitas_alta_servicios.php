<?php
    include ("conex.php");
    $link = Conectarse();
    $servicio = $_POST['tiposervicio'];
    $preciooriginal = $_POST['preciooriginal'];
    $descuento = $_POST['descuento'];
    $nombre = $_POST['nombrearchivo'];
    $target_path = '../Imagenes/Servicios/';
    $archivo = $_FILES['archivo']['name'];
    $target_path = $target_path.basename($_FILES['archivo']['name']);


    //Comprobar si la conexión fue exitosa
    if (!$link) {
        die('Error de conexión: ' . mysqli_connect_error());
    }

    //Ejecutar la consulta mysqli INSERT
    if (mysqli_query($link, $sql)&&move_uploaded_file($_FILES['archivo']['tmp_name'], $target_path)) {
        $sql = "INSERT INTO at_servicios (tipo, preciooriginal, descuento, imagen, nombrearchivo) VALUES ('$servicio', '$preciooriginal', '$descuento', '$imagen', '$nombre)";
        mysqli_query($link, $sql) or die (mysqli_error());
        echo "Datos insertados correctamente.";

        header ("Location: ../aeternitas_menu_trabajador.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($link);
    }

    //Cerrar la conexión a la base de datos
    mysqli_close($link);
?>
