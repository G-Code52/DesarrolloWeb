<?php
    $u = $_POST['id_trabajador'];
    $p = $_POST['password_trabajador'];
    $p = md5($p);
    include 'conex.php';
    $link = Conectarse();

    if (!$link) {
        die('Error de conexión: ' . mysqli_connect_error());
    }

    $result = mysqli_query($link, "SELECT * FROM at_empleados WHERE id='$u' AND password='$p'");

    if (!$result) {
        die('Error de consulta: ' . mysqli_error($link));
    }

    $row = mysqli_fetch_assoc($result);
    $area = $row['area'];

    session_start();
    $_SESSION['autenticado']="SI";
    $_SESSION['id_trabajador']=$u;
    $_SESSION['password']=$p;

    if($area == 'Administrador'){
        header("Location: ../aeternitas_int_administrador.php");
    }
    else{
        header("Location: ../aeternitas_int_trabajador.php");
    }
?>
