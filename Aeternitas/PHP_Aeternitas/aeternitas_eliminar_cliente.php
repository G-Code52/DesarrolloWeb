<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio de Comprobación</title>
</head>
<body>
    <?php
    $idcliente = $_POST['at_cte_id'];

    //Comprobar si la conexión fue exitosa
    if (!$link) {
        die('Error de conexión: ' . mysqli_connect_error());
    }

    //Eliminar datos
    $sql = "DELETE FROM at_clientes WHERE idcliente='$idcliente'";

    mysqli_query($link, $sql) or die (mysqli_error($link));
    header ("Location: ../aeternitas_menu_trabajador.php");

    //Cerrar la conexión a la base de datos
    mysqli_close($link);



    ?>
</body>
</html>
