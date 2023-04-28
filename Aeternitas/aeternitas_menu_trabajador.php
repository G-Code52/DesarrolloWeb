<?php
	include("PHP_Aeternitas/security.php")
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

	  	<style type="text/css">
			a:link {color:white; background-color: transparent;text-decoration:none}
			a:visited { color:white; background-color: transparent;text-decoration: none}
			a:hover { color:#E8E8E8; background-color: transparent;text-decoration: underline}
			a:active { color:white; background-color: transparent;text-decoration: none}
		</style>
</head>
<body>
	<div id="menu">
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

		        <a href="Formularios/aeternitas_form_modificar_contrato.php"><input type="button" name="modificar_contrato" value="Modificar Contrato"></a>

		        <br><br>
		        <a href="Formularios/aeternitas_form_eliminar_contrato.php"><input type="button" name="eliminar_contrato" value="Eliminar Contrato"></a>			
		    </td>
		    <td align="center" width="20%">
		        <a href="Formularios/aeternitas_form_alta_clientes.php"><input type="button" name="alta_cliente" value="Alta Cliente"></a>

		        <a href="Formularios/aeternitas_form_modificar_clientes.php"><input type="button" name="modificar_cliente" value="Modificar Cliente"></a>
		        <br><br>
		        <a href="Formularios/aeternitas_form_eliminar_clientes.php"><input type="button" name="eliminar_cliente" value="Eliminar Cliente"></a>	
		    </td>
		    <td align="center" width="20%">
		        <a href="Formularios/aeternitas_form_alta_trabajadores.php"><input type="button" name="alta_trabajadores" value="Alta Trabajadores"></a>

		        <a href="Formularios/aeternitas_form_modificar_trabajadores.php"><input type="button" name="modificar_trabajador" value="Modificar Trabajador"></a>
		        <br><br>
		        <a href="Formularios/aeternitas_form_eliminar_trabajadores.php"><input type="button" name="eliminar_trabajador" value="Eliminar Trabajador"></a>	
		    </td>
		    <td align="center" width="20%">
		        <a href="Formularios/aeternitas_form_proveedores.php"><input type="button" name="alta_proveedores" value="Alta Proveedores"></a>

		        <a href="Formularios/aeternitas_form_modificar_proveedores.php"><input type="button" name="modificar_proveedor" value="Modificar Proveedor"></a>
		        <br><br>
		        <a href="Formularios/aeternitas_form_eliminar_proveedores.php"><input type="button" name="eliminar_proveedor" value="Eliminar Proveedor"></a>	
		    </td>
		    <td align="center" width="20%">
		        <a href="Formularios/aeternitas_form_servicios.php"><input type="button" name="alta_servicios" value="Alta Servicios"></a>

		        <a href="Formularios/aeternitas_form_modificar_servicios.php"><input type="button" name="modificar_servicio" value="Modificar Servicio"></a>
		        <br><br>
		        <a href="Formularios/aeternitas_form_eliminar_servicios.php"><input type="button" name="eliminar_servicio" value="Eliminar Servicio"></a>	
		    </td>
		</tr>

	</table>
	<br>
	<br>
	<p align="center"><a href='index.html' target="_parent">Cerrar Sesión</a></p>

	</div>
	</body>
</html>