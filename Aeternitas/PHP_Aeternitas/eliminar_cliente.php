<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio de Comprobación</title>
</head>
<body>
    <?php
    include "./conex.php";
    $link = Conectarse();
    $idcliente = $_POST['id'];

    //Comprobar si la conexión fue exitosa
    if (!$link) {
        die('Error de conexión: ' . mysqli_connect_error());
    }

    //Eliminar datos
    $sql = "DELETE FROM at_clientes WHERE id='$idcliente'";

    mysqli_query($link, $sql) or die (mysqli_error($link));
    header ("Location: ../menu_admin.php");

    //Cerrar la conexión a la base de datos
    mysqli_close($link);



    ?>
</body>
</html>
