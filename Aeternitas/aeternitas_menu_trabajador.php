<!DOCTYPE html>
<?php
	include("PHP_Aeternitas/security.php")
?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menu Trabajador</title>
	  	<style type="text/css">
			a:link {color:white; background-color: transparent;text-decoration:none}
			a:visited { color:white; background-color: transparent;text-decoration: none}
			a:hover { color:#E8E8E8; background-color: transparent;text-decoration: underline}
			a:active { color:white; background-color: transparent;text-decoration: none}

			body {
					background: linear-gradient(to bottom, #21302E, #304643);
				}
		</style>
</head>
<body>
	<table width="90%" height="400" border="1" align="center" valign="middle">
		<tr height="300">
			<td align="center">
				<img src="Imagenes/contrato.png" width="100" align="center">
			</td>
			<td align="center">
				<img src="Imagenes/cliente.png" width="100" align="center">
			</td>
			<td align="center">
				<img src="Imagenes/trabajadores.png" width="100" align="center">
			</td>
			<td align="center">
				<img src="Imagenes/proveedores.png" width="100" align="center">
			</td>
			<td align="center">
				<img src="Imagenes/servicios.png" width="100" align="center">
			</td>
			


		</tr>
		<tr>
			<td align="center" width="20%">
				<a href="Formularios/aeternitas_form_contrato.php"><input type="button" name="nuevo_contrato" value="Nuevo Contrato"></a>
			</td>
			<td align="center" width="20%">
				<a href="Formularios/aeternitas_form_alta_clientes.php"><input type="button" name="alta_cliente" value="Alta Cliente"></a>
			</td>
			<td align="center" width="20%">
				<a href="Formularios/aeternitas_form_alta_trabajadores.php"><input type="button" name="alta_trabajadores" value="Alta Trabajadores"></a>
			</td>
			<td align="center" width="20%">
				<a href="Formularios/aeternitas_form_proveedores.php"><input type="button" name="alta_trabajadores" value="Alta Proveedores"></a>
			</td>
			<td align="center" width="20%">
				<a href="Formularios/aeternitas_form_servicios.php"><input type="button" name="alta_trabajadores" value="Alta Servicios"></a>
			</td>
		</tr>
	</table>
	<br>
	<br>
	<p align="center"><a href='index.html' target="_parent">Cerrar Sesión</a></p>
</body>
</html>