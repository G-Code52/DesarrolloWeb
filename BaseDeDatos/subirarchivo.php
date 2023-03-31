<?php
    include ("conex.php");
    $link = Conectarse();
    $nombre=$_POST['nombre'];

    $target_path = 'imagenes/';
    $archivo = $_FILES['archivo']['name'];
    $target_path = $target_path.basename($_FILES['archivo']['name']);

    if(move_uploaded_file($_FILES['archivo']['tmp_name'], $target_path)){
        $sql="insert into articulo (titulo, archivo) values('$nombre', '$archivo')";
        mysqli_query($link, $sql) or die (mysqli_error());
    }
    else{
        //header (location: "archivo.php");
        printf("No se pudo subir articulo: $s a la ruta: $s", $nombre, $destino);
    }
?>