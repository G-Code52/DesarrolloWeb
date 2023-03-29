<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario Contrato</title>

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

	<link rel="stylesheet" href="CSS/fontawesome/css/all.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>
<body bgcolor="#21302E">
	<font color="FFFFFF" size="5" face="Verdana">
	<h3>Contrata un servicio:</h3>
	<h6>Todos los campos son obligatorios.</h6>
	</font>
	<form name="fvalida" method="POST" action="../PHP_Aeternitas/aeternitas_alta_contrato.php">
		<table class="table table-striped" style="background-color: #21302E; border-color: #21302E;">
			<tr>
				<td><label for="preciofinal">Precio Final:</label></td>
				<td><input type="number" id="preciofinal" name="preciofinal" class="form-control" required></td>
			</tr>
			<tr>
				<td><label for="tipopago">Tipo de Pago:</label></td>
				<td><input type="text" id="tipopago" name="tipopago" class="form-control" required></td>
			</tr>
			<tr>
				<td><label for="fechafirma">Fecha de Firma:</label></td>
				<td><input type="date" id="fechafirma" name="fechafirma" class="form-control" required></td>
			</tr>
			<tr>
				<td><label for="at_cte_id">Cliente ID:</label></td>
				<td>
					<select name="at_cte_id" class="form-control">
					<?php
						include "../PHP_Aeternitas/conex.php";
						$link=Conectarse();
						$result=mysqli_query($link,"Select id from at_clientes") or die(mysqli_error($link));
						while($row=mysqli_fetch_array($result))
							{echo '<option>'.$row['id'];}
					?>
				</td>
					
			</tr>
			<tr>
				<td><label for="at_epo_id">ID Empelado:</label></td>
				<td>
					<select name="at_epo_id" class="form-control">
					<?php
						$result=mysqli_query($link,"Select id from at_empleados") or die(mysqli_error($link));
						while($row=mysqli_fetch_array($result))
							{echo '<option>'.$row['id'];}
					?>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="right">
					<input type="submit" class="btn btn-primary" onclick="valida_envia()" value="Enviar">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>