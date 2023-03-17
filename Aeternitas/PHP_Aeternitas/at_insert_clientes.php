<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Insert Clientes</title>
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>
<body class="p-3 mb-2 bg-secondary text-white">
<font color="FFFFFF" size="5" face="Verdana">
    <?php
        if ($_POST) {
            include "conex.php";
            $link = Conectarse();
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $fecha_nacimiento = $_POST['fecha_nacimiento'];
            $correo = $_POST['correo'];
            $celular = $_POST['celular'];
            $calle = $_POST['direccion_calle'];
            $num_int = $_POST['direccion_num_int'];
            $colonia = $_POST['direccion_colonia'];
            $CP = $_POST['direccion_cp'];
            $municipio = $_POST['direccion_municipio'];
            $ocupacion = $_POST['ocupacion'];

            mysqli_query($link, "insert into cliente 
                at_clientes values ('$id','$nombre', '$apellido', 
                '$fecha_nacimiento', '$correo')")



        }
    ?>




	<?php

    $nombre = $_POST['nombre'];
    echo "<font color='#FFFFFF'>El nombre del cliente es: $nombre</font> <br>";
    $apellido = $_GET['apellido'];
    echo "<font color='#FFFFFF'>Los apellidos del cliente son: $apellido </font><br>";
    $fecha_nacimiento = $_GET['fecha_nacimiento'];
    echo "<font color='#FFFFFF'>La fecha de nacimiento del cliente es: $fecha_nacimiento</font><br>";
    $correo = $_GET['correo'];
    echo "<font color='#FFFFFF'>El correo del cliente es: $correo</font><br>";
    $celular = $_GET['celular'];
    echo "<font color='#FFFFFF'>El numero telefónico del cliente es: $celular</font><br>";
    $calle = $_GET['direccion_calle'];
    $num_int = $_GET['direccion_num_int'];
    $colonia = $_GET['direccion_colonia'];
    $CP = $_GET['direccion_cp'];
    $municipio = $_GET['direccion_municipio'];
    echo "<font color='#FFFFFF'>La direccion del cliente es: <br> 
    		Calle: $calle , Numero Interior: $num_int <br>
    		Colonia: #colonia , Codigo Postal: $CP <br>
    		Municipio: $municipio </font><br>";
    $ocupacion = $_GET['ocupacion'];
    echo "<font color='#FFFFFF'>La ocupación del cliente es: $ocupacion </font><br>";


    echo "<a href='../aeternitas_menu_trabajador.html' target='Pantalla_principal'>Regresar</a>"

	?>
</font>
</body>
</html>