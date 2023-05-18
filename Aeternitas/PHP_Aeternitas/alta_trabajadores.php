    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Inicio de Comprobación</title>
    </head>
    <body>
        <?php

        include 'conex.php';
        $link = Conectarse();
        //Comprobar si la conexión fue exitosa
        if (!$link) {
            die('Error de conexión: ' . mysqli_connect_error());
        }

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $curp = $_POST['curp'];
        $calle = $_POST['calle'];
        $numexterior = $_POST['numexterior'];
        $numinterior = $_POST['numinterior'];
        $colonia = $_POST['colonia'];
        $codigopostal = $_POST['codigopostal'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $tituloacademico = $_POST['tituloacademico'];
        $area = $_POST['area'];
        $comision = $_POST['comision'];
        $fechacontratacion = $_POST['fechacontratacion'];
        $at_epo_id = $_POST['at_epo_id'];
        $password = $_POST['password'];
        $password = md5($password);



        $sql = "INSERT INTO at_empleados (nombre, apellido,
        curp, calle, 
        numexterior, numinterior, colonia, codigopostal, telefono, 
        correo, tituloacademico, area, comision, fechacontratacion, at_epo_id, 
        password) VALUES ('$nombre', '$apellido','$curp', '$calle'
        , '$numexterior', '$numinterior'
        , '$colonia', '$codigopostal', '$telefono', '$correo', '$tituloacademico'
        , '$area', '$comision', '$fechacontratacion', '$at_epo_id', '$password' )";
        mysqli_query($link, $sql) or die (mysqli_error($link));
        header ("Location: ../menu_admin.php");

        //Cerrar la conexión a la base de datos
        mysqli_close($link);








        ?>
    </body>
    </html>