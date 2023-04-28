<?php
	include("../PHP_Aeternitas/security.php")
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Modificar Servicios</title>

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
		if(document.fvalida.fechauso.value.length==0){
			alert("Tiene que escribir la fecha de uso")
			document.fvalida.fechauso.focus()
			return 0;
		}
		if(document.fvalida.folioactadefuncion.value.length==0){
			alert("Tiene que escribir el folio de acta de defunción")
			document.fvalida.folioactadefuncion.focus()
			return 0;
		}
		if(document.fvalida.foliocertificadomedico.value.length==0){
			alert("Tiene que escribir el certificado médico")
			document.fvalida.foliocertificadomedico.focus()
			return 0;
		}
		if(document.fvalida.at_svo_id.value.length==0){
			alert("Tiene que escribir el id del servicio")
			document.fvalida.at_svo_id.focus()
			return 0;
		}
		if(document.fvalida.at_cto_id.value.length==0){
			alert("Tiene que escribir el id del contrato")
			document.fvalida.at_cto_id.focus()
			return 0;
		}
		if(document.fvalida.at_cto_epo_id.value.length==0){
			alert("Tiene que escribir el ID de empleado de Contrato")
			document.fvalida.at_cto_epo_id.focus()
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
			<h1>Modificar Servicio:</h1>
			<FORM METHOD="GET" action="aeternitas_form_modificar_servicios.php">		
				<table id="tabla_forms">
				<tr>
								
					<td>
						<label for="nombre"><font color="red" size="5" face="Verdana">*</font>ID a modificar:</label>
					</td>
					<td>
						<select name="id" class="form-control">
						
							<?php
								include "../PHP_Aeternitas/conex.php";
								$link = Conectarse();

								$result = mysqli_query($link, "SELECT * FROM at_servicios");
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
				<form name="fvalida" method="POST" action="../PHP_Aeternitas/aeternitas_modificar_servicios.php">
						<?php
							if(!isset($_GET['id']))
								$var = 1;
							else
								$var = $_GET['id'];
							// echo $var; die();
							$result = mysqli_query($link, "Select * from at_servicios where id ='$var'");
							$row = mysqli_fetch_array($result);
							echo "
							<tr>
							  <td><label>Servicio:</label></td>
							  <td><input type='text' name='tiposervicio' class='form-control' value='" . $row['tipo'] . "'></td>

							  <td><label>Precio original:</label></td>
							  <td><input type='int' name='preciooriginal' class='form-control' value='" . $row['preciooriginal'] . "'></td>
							</tr>
							<tr>
							  <td><label>Descuento:</label></td>
							  <td><input type='int' name='descuento' class='form-control' value='" . $row['descuento'] . "'></td>

							  <td><label>Nombre del archivo:</label></td>
							  <td><input type='text' name='nombrearchivo' class='form-control' value='" . $row['nombrearchivo'] . "'></td>
							</tr>
							<tr>
							  <td><label>Nombre del servicio:</label></td>
							  <td><input type='int' name='descuento' class='form-control' value='" . $row['nombre'] . "'></td>

							  <td><label>Descripción:</label></td>
							  <td><input type='text' name='nombrearchivo' class='form-control' value='" . $row['descripcion'] . "'></td>
							</tr>
							<tr>
							  <td><label>Imagen:</label></td>
							  <td><input type='file' name='descuento' class='form-control' value='" . $row['nombre'] . "'></td>

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
