<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Consulta Bootstrap</title>
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>
<body>
	<form action="TablasBootStrap.php" method="POST">
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
		<center><font><i class="fa-solid fa-dungeon"></font></i>&nbsp<input type="submit" class="btn btn-primary" name="action" value ="Enviar"></center>
	</form> <br><br><br>

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
	
	?>

    <div class="table-responsive">
	<TABLE class="table table-striped table-hover" cellspacing="1" border ="1" >
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
    </div>
    <?php } ?>
</body>
</html>

