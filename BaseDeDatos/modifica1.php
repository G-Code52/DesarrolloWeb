<html>
<head>
	<title>Uso de lista desplegable</title>
</head>
<body BGCOLOR=lavender>
	<h1>Que registro desea modificar: </h1>
	<FORM METHOD="GET" action="modifica2.php">
		<?php
			if(!isset($_GET['id']))
				$var = 1;
			else
				$var = $_GET['id']
			$result = mysqli_query($link, "Select * from usuaio where id ='$var'");
			$row = mysqli_fetch_array($result);
			echo "
			Nombre:
			<input type = 'text' name='nombre' value='row[1]'><br>
			Apellido.
			<input type = 'text' name='apellido' value='row[2]'><br>
			DNI:
			<input type = 'text' name='dni' value='row[3]'><br>
			<input type = 'text' name='id' value='row[0]'><br>";
		?>	
		<center><input type="submit" name="accion" value="Modificar"></center>	
	</FORM>
</body>
</html>