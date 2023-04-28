<?php
	include("../PHP_Aeternitas/security.php")
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario Contrato</title>

	<script type="text/javascript">
		function valida_envia() {
			if(document.fvalida.id.value.length==0){
				alert("Tiene que escribir el id")
				document.fvalida.id.focus()
				return 0;
			}
			if(document.fvalida.preciofinal.value.length==0){
				alert("Tiene que escribir el precio final")
				document.fvalida.preciofinal.focus()
				return 0;
			}
			if(document.fvalida.tipopago.value.length==0){
				alert("Tiene que escribir el tipo de pago")
				document.fvalida.tipopago.focus()
				return 0;
			}
			if(document.fvalida.fechafirma.value.length==0){
				alert("Tiene que escribir el tipo de pago")
				document.fvalida.fechafirma.focus()
				return 0;
			}
			if(document.fvalida.at_cte_id.value.length==0){
				alert("Tiene que escribir el ID del cliente")
				document.fvalida.at_cte_id.focus()
				return 0;
			}
			if(document.fvalida.at_epo_id.value.length==0){
				alert("Tiene que escribir el ID del empleado")
				document.fvalida.at_epo_id.focus()
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
			<h1>Contrata un servicio:</h1>
			<h3>Todos los campos son obligatorios.</h3><br>
			<table id="tabla_forms">
				<tr>
				<FORM METHOD="GET" action="aeternitas_form_modificar_contrato.php">						
					<td>
						<label for="nombre"><font color="red" size="5" face="Verdana">*</font>ID a modificar:</label>
					</td>
					<td>
						<select name="id" class="form-control">
						
							<?php
								include "../PHP_Aeternitas/conex.php";
								$link = Conectarse();

								$result = mysqli_query($link, "SELECT * FROM at_contratos");
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
							
								  	<form name="fvalida" method="POST" action="../PHP_Aeternitas/aeternitas_modificar_contratos.php">
						<?php
							if(!isset($_GET['id']))
								$var = 1;
							else
								$var = $_GET['id'];
							// echo $var; die();
							$result = mysqli_query($link, "Select * from at_contratos where id ='$var'");
							$row = mysqli_fetch_array($result);
							echo "
							<tr>
							  <td><label>Precio Final:</label></td>							        
							  <td><input type='int' name='preciofinal' class='form-control' value='" . $row['preciofinal'] . "'></td>
							  
							  <td><label>Tipo de Pago:</label></td>							        
							  <td><input type='text' name='tipopago' class='form-control' value='" . $row['tipopago'] . "'></td>
							</tr>
							<tr>
							  <td><label>Fecha de Firma:</label></td>							        
							  <td><input type='date' name='fechafirma' class='form-control' value='" . $row['fechafirma'] . "'></td>
							  
							  <td><label>ID Cliente:</label></td>							        
							  <td><input type='int' name='at_cte_id' class='form-control' value='" . $row['at_cte_id'] . "'></td>
							</tr>
							<tr>
							  <td><label>ID Empleado:</label></td>							        
							  <td><input type='int' name='at_epo_id' class='form-control' value='" . $row['at_epo_id'] . "'></td>
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