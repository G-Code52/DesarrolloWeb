<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="consulta1.php" method="POST">
		Nombre Trabajador<input type="text" name="nombre">
		PASSWORD<input type="text" name="password">
		ID TRABAJADOR<input type="text" name="id">
		<br>
		<br>
		<input type="radio" name="opcion" value="1" checked> Nombre Trabajador
		<input type="radio" name="opcion" value="2"> PASSWORD
		<input type="radio" name="opcion" value="3"> ID TRABAJADOR
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
		 		$result = mysqli_query($link, "select * from at_empleados where nombre='$nombre'");
		 		break;
		 	case "2":
		 		$password = $_POST['password'];
		 		$result = mysqli_query($link, "select * from at_empleados where password='$password'");
		 		break;
		 	case "3":
		 		$id = $_POST['id'];
		 		$result = mysqli_query($link, "select * from at_empleados where id='$id'");
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

