<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inicio de Comprobación</title>
</head>
<body bgcolor="#21302E">
<font color="FFFFFF" size="5" face="Verdana">

	<?php
    $trabajador = $_SESSION['id_trabajador'];
    echo "El trabajador es: $trabajador <br>";
    $password = $_SESSION['password'];
    echo "Tu contraseña es: $password <br>";
    echo "<a href='../aeternitas_int_trabajador.html' target='parent'>Avanzar</a>";
	?>

</font>
</body>
</html>