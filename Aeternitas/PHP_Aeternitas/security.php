<?php
    session_start();
    if(!$_SESSION){
        header("Location: ../Formularios/form_inicio_sesion.php");
        exit();
    }
?>