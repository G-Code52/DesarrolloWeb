<?php
    session_start();
    if(!$_SESSION){
        header("Location: ../Formularios/aeternitas_form_inicio_sesion.php");
        exit();
    }
?>