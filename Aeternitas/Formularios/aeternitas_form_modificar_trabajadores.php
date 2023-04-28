<?php
	include("../PHP_Aeternitas/security.php")
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario Trabajadores</title>

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
			if(document.fvalida.id.value.length==0){
				alert("Tiene que escribir el id")
				document.fvalida.id.focus()
				return 0;
			}
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
			<h1>Modificar Trabajadores:</h1>
			<table id="tabla_forms">
				<tr>
				<FORM METHOD="GET" action="aeternitas_form_modificar_trabajadores.php">						
					<td>
						<label for="nombre"><font color="red" size="5" face="Verdana">*</font>ID a modificar:</label>
					</td>
					<td>
						<select name="id" class="form-control">
						
							<?php
								include "../PHP_Aeternitas/conex.php";
								$link = Conectarse();

								$result = mysqli_query($link, "SELECT * FROM at_empleados");
								while ($row = mysqli_fetch_array($result)) {
									echo '<option>'.$row['id'];
								}
							?>
						</select>
					</td>
					<td colspan="2">
						<center><input type="submit" name="action" value="Mostrar" class="btn btn-primary"></center>
					</td>
				</FORM>
			  	</tr>
			  	<tr><td><br></td></tr>

			  	<form name="fvalida" method="POST" action="../PHP_Aeternitas/aeternitas_modificar_trabajadores.php">
						<?php
							if(!isset($_GET['id']))
								$var = 1;
							else
								$var = $_GET['id'];
							// echo $var; die();
							$result = mysqli_query($link, "SELECT * from at_empleados where id ='$var'");
							$row = mysqli_fetch_array($result);
							echo "
							<tr>
							  <td><label>Nombre:</label></td>							        
							  <td><input type='text' name='nombre' class='form-control' value='" . $row['nombre'] . "'></td>

							  <td><label>Apellido:</label></td>							        
							  <td><input type='text' name='apellido' class='form-control' value='" . $row['apellido'] . "'></td>
							</tr>
							<tr>
							  <td><label>CURP:</label></td>							        
							  <td><input type='text' name='curp' class='form-control' value='" . $row['curp'] . "'></td>

							  <td><label>Calle:</label></td>							        
							  <td><input type='text' name='calle' class='form-control' value='" . $row['calle'] . "'></td>
							</tr>
							<tr>
							  <td><label>Número exterior:</label></td>							        
							  <td><input type='text' name='numexterior' class='form-control' value='" . $row['numeroexterior'] . "'></td>

							  <td><label>Número interior:</label></td>							        
							  <td><input type='text' name='numinterior' class='form-control' value='" . $row['numerointerior'] . "'></td>
							</tr>
							<tr>
							  <td><label>Colonia:</label></td>							        
							  <td><input type='text' name='colonia' class='form-control' value='" . $row['colonia'] . "'></td>

							  <td><label>Código Postal:</label></td>							        
							  <td><input type='text' name='codigopostal' class='form-control' value='" . $row['codigopostal'] . "'></td>
							</tr>
							<tr>
							  <td><label>Teléfono:</label></td>							        
							  <td><input type='text' name='telefono' class='form-control' value='" . $row['telefono'] . "'></td>

							  <td><label>Correo:</label></td>							        
							  <td><input type='email' name='correo' class='form-control' value='" . $row['correo'] . "'></td>
							</tr>
							<tr>
							  <td><label>Título académico:</label></td>							        
							  <td><input type='text' name='tituloacademico' class='form-control' value='" . $row['tituloacademico'] . "'></td>

							  <td><label>Área:</label></td>							        
							  <td><input type='text' name='area' class='form-control' value='" . $row['area'] . "'></td>
							</tr>
							<tr>
							  <td><label>Comisión:</label></td>							        
							  <td><input type='text' name='comision' class='form-control' value='" . $row['comision'] . "'></td>

							  <td><label>Fecha de contratación:</label></td>							        
							  <td><input type='date' name='fechacontratacion' class='form-control' value='" . $row['fechacontratacion'] . "'></td>
							</tr>
							<tr>
							  <td><label>ID del empleado supervisor:</label></td>							        
							  <td><input type='int' name='at_epo_id' class='form-control'
							</tr>	
							";
						?>
							<tr>
								<tr>
									<td colspan="2"><a href="../aeternitas_menu_trabajador.php"><input id="submit" type="button" class="btn btn-primary" value="Atrás"></a></td>
									<td colspan="2">
						<input id="submit" type="submit" class="btn btn-primary" onclick="valida_envia()" value="Enviar">
					</td>
				</table>
			</form>
</body>
</html>