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
		<h1>Interfaz Administrador</h1>
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
		        <a href="Formularios/alta_contrato.php"><input type="button" class="btn btn-primary" name="nuevo_contrato" value="Nuevo Contrato"></a>
				<br><br>
		        <a href="Formularios/modifica_contrato.php"><input type="button" class="btn btn-primary" name="modificar_contrato" value="Modificar Contrato"></a>
		        <br><br>
		        <a href="Formularios/elimina_contrato.php"><input type="button" class="btn btn-primary" name="eliminar_contrato" value="Eliminar Contrato"></a>
				<br> <br>
				<a href="Formularios/visualiza_contrato.php"><input type="button" class="btn btn-primary" name="visualiza_contrato" value="Visualiza Contrato"></a>			
			
		    </td>
		    <td align="center" width="20%">
		        <a href="Formularios/alta_cliente.php"><input type="button" class="btn btn-primary" name="alta_cliente" value="Alta Cliente"></a>
				<br><br>
		        <a href="Formularios/modifica_cliente.php"><input type="button" class="btn btn-primary" name="modificar_cliente" value="Modificar Cliente"></a>
		        <br><br>
		        <a href="Formularios/aeternitas_form_eliminar_clientes.php"><input type="button" class="btn btn-primary" name="eliminar_cliente" value="Eliminar Cliente"></a>	
				<br> <br>
				<a href="Formularios/visualiza_cliente.php"><input type="button" class="btn btn-primary" name="visualiza_cliente" value="Visualiza Cliente"></a>			
			</td>
		    <td align="center" width="20%">
		        <a href="Formularios/aeternitas_form_alta_trabajadores.php"><input type="button" class="btn btn-primary" name="alta_trabajadores" value="Alta Trabajadores"></a>
				<br><br>
		        <a href="Formularios/aeternitas_form_modificar_trabajadores.php"><input type="button" class="btn btn-primary" name="modificar_trabajador" value="Modificar Trabajador"></a>
		        <br><br>
		        <a href="Formularios/aeternitas_form_eliminar_trabajadores.php"><input type="button" class="btn btn-primary" name="eliminar_trabajador" value="Eliminar Trabajador"></a>	
				<br> <br>
				<a href="Formularios/visualiza_trabajadores.php"><input type="button" class="btn btn-primary" name="visualiza_trabajadores" value="Visualiza Trabajadores"></a>			
			</td>
		    <td align="center" width="20%">
		        <a href="Formularios/aeternitas_form_proveedores.php"><input type="button" class="btn btn-primary" name="alta_proveedores" value="Alta Proveedores"></a>
				<br><br>
		        <a href="Formularios/aeternitas_form_modificar_proveedores.php"><input type="button" class="btn btn-primary" name="modificar_proveedor" value="Modificar Proveedor"></a>
		        <br><br>
		        <a href="Formularios/aeternitas_form_eliminar_proveedores.php"><input type="button" class="btn btn-primary" name="eliminar_proveedor" value="Eliminar Proveedor"></a>	
		    	<br><br>
				<a href="Formularios/visualiza_proveedor.php"><input type="button" class="btn btn-primary" name="visualiza_proveedor" value="Visualiza Proveedores"></a>			

			</td>
		    <td align="center" width="20%">
		        <a href="Formularios/aeternitas_form_servicios.php"><input type="button" class="btn btn-primary" name="alta_servicios" value="Alta Servicios"></a>
				<br><br>
		        <a href="Formularios/aeternitas_form_modificar_servicios.php"><input type="button" class="btn btn-primary" name="modificar_servicio" value="Modificar Servicio"></a>
		        <br><br>
		        <a href="Formularios/aeternitas_form_eliminar_servicios.php"><input type="button" class="btn btn-primary" name="eliminar_servicio" value="Eliminar Servicio"></a>	
				<br><br>
				<a href="Formularios/visualiza_servicios.php"><input type="button" class="btn btn-primary" name="visualiza_servicio" value="Visualiza Servicios"></a>			

			</td>
		</tr>
		<tr>
			<td colspan="5" align="center">
			<a href="PHP_Aeternitas/salir.php" target="_parent"><input type="button" class="btn btn-primary" name="cerrarsesion" value="Cerrar Sesion"></a>
			</td>
		</tr>

	</table>
	</div>
	</body>
</html>