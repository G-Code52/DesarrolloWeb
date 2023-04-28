<?php
	include("../PHP_Aeternitas/security.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario Trabajadores</title>

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
			if(document.fvalida.curp.value.length==0){
				alert("Tiene que escribir su curp")
				document.fvalida.curp.focus()
				return 0;
			}
			if(document.fvalida.correo.value.length==0){
				alert("Tiene que escribir su correo")
				document.fvalida.correo.focus()
				return 0;
			}
			if(document.fvalida.telefono.value.length==0){
				alert("Tiene que escribir su número de celular")
				document.fvalida.telefono.focus()
				return 0;
			}
			if(document.fvalida.calle.value.length==0){
				alert("Debe ingresar su direccion de calle")
				document.fvalida.calle.focus()
				return 0;
			}
			if(document.fvalida.colonia.value.length==0){
				alert("Debe ingresar su colonia")
				document.fvalida.colonia.focus()
				return 0;
			}
			if(document.fvalida.codigopostal.value.length==0){
				alert("Debe ingresar su código postal")
				document.fvalida.codigopostal.focus()
				return 0;
			}
			if(document.fvalida.numexterior.value.length==0){
				alert("Debe ingresar su numero exterior")
				document.fvalida.numexterior.focus()
				return 0;
			}
			if(document.fvalida.area.value.length==0){
				alert("Debe ingresar su area")
				document.fvalida.area.focus()
				return 0;
			}
			if(document.fvalida.at_epo_id.value.length==0){
				alert("Debe ingresar el id del supervisor")
				document.fvalida.at_epo_id.focus()
				return 0;
			}
			if(document.fvalida.fechacontratacion.value.length==0){
				alert("Debe ingresar su fecha de contratación")
				document.fvalida.fechacontratacion.focus()
				return 0;
			}
			if(document.fvalida.password.value.length==0){
				alert("Debe ingresar su contraseña")
				document.fvalida.password.focus()
				return 0;
			} 
			document.fvalida.submit();
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
			<h1>Alta de Trabajadores:</h1>
		<form name="fvalida" method="POST" action="../PHP_Aeternitas/aeternitas_alta_trabajadores.php">
			<table id="tabla_forms">
				<tr>
					<td><label for="nombre"><font color="red" size="5" face="Verdana">*</font>Nombre:</label></td>
					<td><input type="text" id="nombre" name="nombre" class="form-control" required></td>

					<td><label for="apellido"><font color="red" size="5" face="Verdana">*</font>Apellidos:</label></td>
					<td><input type="text" id="apellido" name="apellido" class="form-control" required></td>
				</tr>
				<tr>
					<td><label for="curp"><font color="red" size="5" face="Verdana">*</font>CURP:</label></td>
					<td><input type="text" id="curp" name="curp" class="form-control" required></td>

					<td valign="top"><label for="direccion_calle"><font color="red" size="5" face="Verdana">*</font>Dirección:</label></td>
					<td>
						<input type="text" id="calle" name="calle" class="form-control" placeholder="Calle" required><br>
						<input type="text" id="numexterior" name="numexterior" class="form-control" placeholder="Número exterior (opcional)"><br>
						<input type="text" id="numinterior" name="numinterior" class="form-control" placeholder="Número interior (opcional)"><br>
						<input type="text" id="colonia" name="colonia" class="form-control" placeholder="Colonia" required><br>
						<input type="text" id="codigopostal" name="codigopostal" class="form-control" placeholder="Código postal" required>
					</td>
				</tr>
				<tr>
					<td><label for="telefono"><font color="red" size="5" face="Verdana">*</font>Teléfono:</label></td>
					<td><input type="tel" id="telefono" name="telefono" class="form-control" required></td>

					<td><label for="correo"><font color="red" size="5" face="Verdana">*</font>Correo electrónico:</label></td>
					<td><input type="email" id="correo" name="correo" class="form-control" required></td>
				</tr>
				<tr>
					<td><label for="tituloacademico">Título académico:</label></td>
					<td><input type="text" id="tituloacademico" name="tituloacademico" class="form-control" placeholder="Título académico (opcional)"></td>

					<td><label for="area"><font color="red" size="5" face="Verdana">*</font>Área:</label></td>
					<td><input type="text" id="area" name="area" class="form-control" required></td>
				</tr>
				<tr>
					<td><label for="comision">Comisión:</label></td>
					<td><input type="number" id="comision" name="comision" class="form-control" placeholder="Comisión (opcional)"></td>

					<td><label for="fechacontratacion"><font color="red" size="5" face="Verdana">*</font>Fecha de contratación:</label></td>
					<td><input type="date" id="fechacontratacion" name="fechacontratacion" class="form-control" placeholder="Fecha de contratación (opcional)"></td>
				</tr>
				<tr>
					<td><label for="at_epo_id">ID empleado Supervisor:</label></td>
					<td><select name="at_epo_id" class="form-control">
					<?php
						include "../PHP_Aeternitas/conex.php";
						$link=Conectarse();
						$result=mysqli_query($link,"Select id from at_empleados") or die(mysqli_error($link));
						while($row=mysqli_fetch_array($result))
							{echo '<option>'.$row['id'];}
					?>
					</td>

					<td><label for="password">Contraseña Trabajador:</label></td>
					<td><input type="text" id="password" name="password" class="form-control"></td>
				</tr>
				<tr>
					<td colspan="2"><a href="../aeternitas_menu_trabajador.php"><input id="atras" type="button" class="btn btn-primary" value="Atrás"></a></td>
					<td colspan="2">
						<input name="btnSubmit" type="button" class="btn btn-primary" onclick="valida_envia()" value="Enviar">
					</td>
				</table>
			</form>
		</div>
	</div>
</body>
</html>