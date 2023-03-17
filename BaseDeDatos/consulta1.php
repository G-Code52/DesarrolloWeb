<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="consulta1.php" method="POST">
		Nombre<input type="text" name="nombre">
		Apellido<input type="text" name="apellido">
		dni<input type="text" name="dni">
		<br>
		<br>
		<input type="radio" name="opcion" value="1" checked> Nombre
		<input type="radio" name="opcion" value="2"> Apellido
		<input type="radio" name="opcion" value="3"> DNI
		<br>
		<br>
		<input type="submit" value ="Enviar">
	</form>
	<?php
	if ($_POST) {
		# code...
		include "conex.php";
		$link = Conectarse();
		$opcion = $_POST['opcion'];
		switch ($opcion) {
		 	case "1":
		 		$nombre = $_POST['nombre'];
		 		$result = mysqli_query($link, "select * from usuario where nombre='$nombre'");
		 		break;
		 	case "2":
		 		$apellido = $_POST['apellido'];
		 		$result = mysqli_query($link, "select * from usuario where apellido='$apellido'");
		 		break;
		 	case "3":
		 		$dni = $_POST['dni'];
		 		$result = mysqli_query($link, "select * from usuario where dni='$dni'");
		 		break;
		 } 
	}
	?>

	<TABLE cellspacing="1" border ="1">
		<TR>
			<TD>ID_Usuario</TD>
			<TD>Nombre</TD>
			<TD>Apellidos</TD>
			<TD>dni</TD>
		</TR>
			<?php
				while($row = mysqli_fetch_array($result)){
					printf("<TR><TD>%d</TD><TD>%s</TD>
						<TD>%s</TD><TD>%d</TD></TR>",
						$row["id"],$row["nombre"],$row["apellidos"],$row["dni"]);
				}
				mysqli_free_result($result);
				mysqli_close($link);
			?>
		
	</TABLE>
</body>
</html>

