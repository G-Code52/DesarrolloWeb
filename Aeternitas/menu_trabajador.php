<?php
	include("PHP_Aeternitas/security.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menu Trabajador</title>
	<link rel="stylesheet" href="CSS/menu_style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>
	<div id="heading">
		<h1>Interfaz Trabajador</h1>
	</div>
	<div id="menuAdmin">
	<table width="90%" height="400" border="1" align="center" valign="middle">
		<tr height="300">
			<td align="center">
				<img src="Imagenes/contrato.png" width="100" align="center">
			</td>
			<td align="center">
				<img src="Imagenes/cliente.png" width="100" align="center">
			</td>
		</tr>
		<tr>
		    <td align="center" width="20%">
		        <a href="Formularios/alta_contrato_trabajador.php"><input type="button" class="btn btn-primary" name="nuevo_contrato" value="Nuevo Contrato"></a>
				
		    </td>
		    <td align="center" width="20%">
		        <a href="Formularios/alta_cliente.php"><input type="button" class="btn btn-primary" name="alta_cliente" value="Alta Cliente"></a>
				<br><br>
		        <a href="Formularios/modifica_cliente.php"><input type="button" class="btn btn-primary" name="modificar_cliente" value="Modificar Cliente"></a>
		    </td>
		</tr>
		<tr>
			<td colspan="2" align="center">
			<a href="PHP_Aeternitas/salir.php" target="_parent"><input type="button" class="btn btn-primary" name="cerrarsesion" value="Cerrar Sesion"></a>
			</td>
		</tr>

	</table>
	</div>
	</body>
</html>