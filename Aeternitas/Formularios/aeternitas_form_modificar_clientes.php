<?php
	include("../PHP_Aeternitas/security.php")
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Modificar Clientes</title>

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
		button {
			margin-top: 20px;
			padding: 10px;
			background-color: #007bff;
			color: white;
			border-radius: 5px;
			border: none;
			font-size: 18px;
			cursor: pointer;
		}

		button:hover {
			background-color: #0069d9;
		}

		button:active {
			transform: translateY(1px);
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
			<h1>Modificar Clientes:</h1>
			<table id="tabla_forms">
				<tr>
				<FORM METHOD="GET" action="aeternitas_form_modificar_clientes.php">						
					<td>
						<label for="nombre"><font color="red" size="5" face="Verdana">*</font>ID a modificar:</label>
					</td>
					<td>
						<select name="id" class="form-control">
						
							<?php
								include "../PHP_Aeternitas/conex.php";
								$link = Conectarse();

								$result = mysqli_query($link, "SELECT * FROM at_clientes");
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

			  	<form name="fvalida" method="POST" action="../PHP_Aeternitas/aeternitas_modificar_clientes.php">
						<?php
							if(!isset($_GET['id']))
								$var = 1;
							else
								$var = $_GET['id'];
							// echo $var; die();
							$result = mysqli_query($link, "Select * from at_clientes where id ='$var'");
							$row = mysqli_fetch_array($result);
							echo "
							<tr>
							  <td><label>Nombre:</label></td>							        
							  <td><input type='text' name='nombre' class='form-control' value='" . $row['nombre'] . "'><br></td>
							  
							  <td><label>Apellido:</label></td>							        
							  <td><input type='text' name='apellido' class='form-control' value='" . $row['apellido'] . "'></td>
							</tr>

							<tr>
							  <td><label>Fecha de Nacimiento:</label></td>							        
							  <td><input type='date' name='fecha_nacimiento' class='form-control' value='" . $row['fechanacimiento'] . "'></td>
							  
							  <td><label>Correo:</label></td>							        
							  <td><input type='text' name='correo' class='form-control' value='" . $row['correo'] . "'></td>
							</tr>

							<tr>
							  <td><label>Celular:</label></td>							        
							  <td><input type='text' name='celular' class='form-control' value='" . $row['telefono'] . "'></td>
							  
							  <td><label>Dirección:</label></td>
							  <td>
							    <input type='text' name='direccion_calle' class='form-control' value='" . $row['calle'] . "' placeholder='Calle'><br>
							    <input type='text' name='direccion_num_ext' class='form-control' value='" . $row['numexterior'] . "' placeholder='Número Interior'><br>
							    <input type='text' name='direccion_num_int' class='form-control' value='" . $row['numinterior'] . "' placeholder='Número Interior'><br>
							    <input type='text' name='direccion_colonia' class='form-control' value='" . $row['colonia'] . "' placeholder='Colonia'><br>
							    <input type='text' name='direccion_cp' class='form-control' value='" . $row['codigopostal'] . "' placeholder='Código Postal'><br>
							    <input type='text' name='direccion_municipio' class='form-control' value='" . $row['municipio'] . "' placeholder='Municipio'><br>
							  </td>
							</tr>

							<tr>
							  
							  <td><label>Teléfono de casa:</label></td>							        
							  <td><input type='text' name='telefonocasa' class='form-control' value='" . $row['telefonocasa'] . "'></td>
							</tr>

							<tr>
							  <td><label>Teléfono de trabajo:</label></td>							        
							  <td><input type='text' name='telefonotrabajo' class='form-control' value='" . $row['telefonotrabajo'] . "'></td>
							  
							  <td><label>INE:</label></td>							        
							  <td><input type='text' name='ine' class='form-control' value='" . $row['ine'] . "'></td>
							</tr>

							<tr>
							  <td><label>RFC:</label></td>							        
							  <td><input type='text' name='rfc' class='form-control' value='" . $row['rfc'] . "'></td>
							  
							  <td><label>Tipo:</label></td>							        
							  <td><input type='text' name='tipo' class='form-control' value='" . $row['tipo'] . "'></td>
							  
							<tr>
							    <td><label>Parentesco:</label></td>							        
							    <td><input type='text' name='parentesco' class='form-control' value='" . $row['parentesco'] . "'></td>
							    
							    <td><label>ID Contrato:</label></td>							        
							    <td><input type='text' name='at_cte_id' class='form-control' value='" . $row['at_cte_id'] . "'></td>
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
		</div>
	</div>
</body>
</html>