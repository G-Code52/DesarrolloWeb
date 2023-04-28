<?php
		include("../PHP_Aeternitas/security.php")
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario Clientes</title>

	<style>
		label {
		  font-family: Verdana;
		  font-size: 24px;
		  color: white;
		}
		
		body {
			background-color: #21302E !important;
		}
		
		h1 {
			background-color: #21302E;
			font-family: Verdana, san-serif;
			color: white m !important;
		}
	</style>

	<script type="text/javascript">
		function valida_envia() {
			if(document.fvalida.nombre.value.length==0){
				alert("Tiene que escribir su nombre")
				document.fvalida.nombre.focus()
				return 0;
			}
			if(document.fvalida.apellido.value.length==0){
				alert("Tiene que escribir su apellido")
				document.fvalida.apellido.focus()
				return 0;
			}
			if(document.fvalida.fecha_nacimiento.value.length==0){
				alert("Tiene que elegir una fecha de nacimiento")
				document.fvalida.fecha_nacimiento.focus()
				return 0;
			}
			if(document.fvalida.correo.value.length==0){
				alert("Tiene que escribir su correo")
				document.fvalida.correo.focus()
				return 0;
			}
			if(document.fvalida.celular.value.length==0){
				alert("Tiene que escribir su número de celular")
				document.fvalida.celular.focus()
				return 0;
			}
			if(document.fvalida.direccion_calle.value.length==0){
				alert("Debe ingresar su direccion de calle")
				document.fvalida.direccion_calle.focus()
				return 0;
			}
			if(document.fvalida.direccion_colonia.value.length==0){
				alert("Debe ingresar su colonia")
				document.fvalida.direccion_colonia.focus()
				return 0;
			}
			if(document.fvalida.direccion_cp.value.length==0){
				alert("Debe ingresar su código postal")
				document.fvalida.direccion_cp.focus()
				return 0;
			}
			if(document.fvalida.direccion_municipio.value.length==0){
				alert("Debe ingresar su municipio")
				document.fvalida.direccion_municipio.focus()
				return 0;
			}
			if(document.fvalida.tipo.value.length==0){
				alert("Debe ingresar su tipo")
				document.fvalida.tipo.focus()
				return 0;
			}
			alert("Formulario enviado")
			document.fvalida.submit()
		}
	</script>
	<link rel="stylesheet" type="text/css" href="../CSS/forms_style.css">
	<link rel="stylesheet" href="../CSS/fontawesome/css/all.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>
<body>

	<div id="general">
		<div id="form_alta">
			<h1>Alta de Clientes:</h1>
			<form name="fvalida" method="POST" action="../PHP_Aeternitas/aeternitas_alta_clientes.php">
				<table id="tabla_forms">
				<tr>
				<td><label for="nombre"><font color="red" size="5" face="Verdana">*</font>Nombre:</label></td>
				<td><input type="text" name="nombre" class="form-control" required> </td>
				<td><label for="apellido"><font color="red" size="5" face="Verdana">*</font>Apellidos:</label></td>
				<td><input type="text" id="apellido" name="apellido" class="form-control" required></td>
			  </tr>
			  <tr>
				<td><label for="fecha_nacimiento"><font color="red" size="5" face="Verdana">*</font>Fecha de nacimiento:</label></td>
				<td><input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control" required></td>
				<td><label for="correo"><font color="red" size="5" face="Verdana">*</font>Correo electrónico:</label></td>
				<td><input type="email" id="correo" name="correo" class="form-control" required></td>
			  </tr>
			  <tr>
				<td><label for="celular"><font color="red" size="5" face="Verdana">*</font>Número de celular:</label></td>
				<td><input type="tel" id="celular" name="celular" class="form-control" required></td>
				<td valign="top"><font color="red" size="5" face="Verdana">*</font><label for="direccion_calle">Dirección:</label></td>
				<td>
				  <input type="text" id="direccion_calle" name="direccion_calle" class="form-control" placeholder="Calle y número exterior" required><br>
				  <input type="text" id="direccion_num_int" name="direccion_num_int" class="form-control" placeholder="Número interior (opcional)"><br>
				  <input type="text" id="direccion_colonia" name="direccion_colonia" class="form-control" placeholder="Colonia" required><br>
				  <input type="text" id="direccion_cp" name="direccion_cp" class="form-control" placeholder="Código postal" required><br>
				  <input type="text" id="direccion_municipio" name="direccion_municipio" class="form-control" placeholder="Municipio" required>
				</td>
			  </tr>
			  <tr>
				<td><label for="telefonocasa">Teléfono Casa:</label></td>
				<td><input type="text" id="telefonocasa" name="telefonocasa" class="form-control" required></td>
			</tr>
			<tr>
				<td><label for="telefonotrabajo">Teléfono Trabajo:</label></td>
				<td><input type="text" id="telefonotrabajo" name="telefonotrabajo" class="form-control" required></td>
				<td><label for="ine">INE:</label></td>
				<td><input type="text" id="ine" name="ine" class="form-control" required></td>
			</tr>
			<tr>
				<td><label for="rfc">RFC:</label></td>
				<td><input type="text" id="rfc" name="rfc" class="form-control" required></td>
				<td><label for="tipo"><font color="red" size="5" face="Verdana">*</font>Tipo:</label></td>
				<td><input type="text" id="tipo" name="tipo" class="form-control" required></td>
			</tr>
			<tr>
				<td><label for="parentesco">Parentesco:</label></td>
				<td><input type="text" id="parentesco" name="parentesco" class="form-control" required></td>
				<td><label for="at_cte_id"><font color="red" size="5" face="Verdana">*</font>ID Cliente Benefactor:</label></td>
				<td><input type="text" id="at_cte_id" name="at_cte_id" class="form-control" required></td>
			</tr>
			<tr>
				<tr>
					<td colspan="2"><a href="../aeternitas_menu_trabajador.php"><input id="submit" type="button" class="btn btn-primary" value="Atrás"></a></td>
					<td colspan="2">
						<input id="submit" type="submit" class="btn btn-primary" onclick="valida_e	nvia()" value="Enviar">
					</td>
				</table>
			</form>
		</div>
	</div>
</body>
</html>