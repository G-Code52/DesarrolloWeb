<?php
    session_start();

    $u = $_POST['email'];
    $p = $_POST['password'];
    $p = md5($p);
    include 'conex.php';
    $link = Conectarse();

    if (!$link) {
        die('Error de conexión: ' . mysqli_connect_error());
    }

    $query = "SELECT * FROM at_empleados WHERE id = '$u' AND password = '$p'";
    $result = mysqli_query($link, $query);

    if (!$result) {
        die('Error de consulta: ' . mysqli_error($link));
    }

    $row = mysqli_fetch_assoc($result);

    if ($row) {
        $area = $row['area'];
        $nombre = $row['nombre'];
        $apellido = $row['apellido'];

        $_SESSION['autenticado'] = true;
        $_SESSION['nombre'] = $nombre;
        $_SESSION['apellido'] = $apellido;
        $_SESSION['id_trabajador'] = $u;
        $_SESSION['password'] = $p;
        $_SESSION['area'] = $area;

        if ($area == 'Administrador') {
            header("Location: ../int_administrador.php");
        } else {
            header("Location: ../int_trabajador.php");
        }
        exit();
    } else {
        echo 'Error de inicio de sesión. Verifica tus credenciales.';
        header("Location: ../int_inicio_sesion.php");
    }
?>
