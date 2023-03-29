<?php
    $u = $_POST['id_trabajador'];
    $p = $_POST['password_trabajador'];
    include 'conex.php';
    $link = Conectarse();

    if (!$link) {
        die('Error de conexión: ' . mysqli_connect_error());
    }

    $result = mysqli_query($link, "SELECT COUNT(*) as count FROM at_empleados WHERE id='$u' AND password='$p'");

    if (!$result) {
        die('Error de consulta: ' . mysqli_error($link));
    }

    $row = mysqli_fetch_assoc($result);
    $count = $row['count'];

    echo "count = $count<br>";

    if($count == 1){
        session_start();
        $_SESSION['autenticado']="SI";
        $_SESSION['id_trabajador']=$u;
        $_SESSION['password']=$p;
        header("Location: aeternitas_inicio_sesion.php");

    }
    else{
        header("Location: ../Formularios/aeternitas_form_inicio_sesion.php");
    }
?>
