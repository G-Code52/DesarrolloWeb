<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Alta de Proveedores</title>
	
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

	<link rel="stylesheet" type="text/css" href="../CSS/forms_style.css">
	<link rel="stylesheet" href="../CSS/fontawesome/css/all.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


	<script type="text/javascript">
		function valida_envia() {
			if(document.fvalida.tipoinsumo.value.length==0){
				alert("Debe seleccionar un tipo de insumo")
				document.fvalida.tipoinsumo.focus()
				return false;
			}
			if(document.fvalida.nombreempresa.value.length==0){
				alert("Debe ingresar el nombre de la empresa")
				document.fvalida.nombreempresa.focus()
				return false;
			}
			if(document.fvalida.telefono.value.length==0){
				alert("Debe ingresar el teléfono de la empresa")
				document.fvalida.telefono.focus()
				return false;
			}

			alert("Formulario enviado");
			document.fvalida.submit();
		}
	</script>
</head>

<body>
	<div id="general">
		<div id="form_alta">
			<h1>Alta de Proveedor:</h1>
			<form name="fvalida" method="POST" action="../PHP_Aeternitas/aeternitas_alta_proveedores.php">
				<table id="tabla_forms">
				<tr>
					<td><label for="tipoinsumo"><font color="red" size="5" face="Verdana">*</font>Tipo de Insumo:</label></td>
					<td><input type="text" id="tipoinsumo" name="tipoinsumo" class="form-control" maxlength="20" required></td>

					<td><label for="nombreempresa"><font color="red" size="5" face="Verdana">*</font>Nombre de Empresa:</label></td>
					<td><input type="text" id="nombreempresa" name="nombreempresa" class="form-control" maxlength="40" required></td>
				</tr>
				<tr>
					<td><label for="telefono"><font color="red" size="5" face="Verdana">*</font>Teléfono:</label></td>
					<td><input type="text" id="telefono" name="telefono" class="form-control" maxlength="10" required></td>

					<td><label for="direccion">Dirección:</label></td>
					<td><input type="text" id="direccion" name="direccion" class="form-control" maxlength="40"></td>
				</tr>
				<tr>
					<td><label for="nombredueno">Nombre del Dueño:</label></td>
					<td><input type="text" id="nombredueno" name="nombredueno" class="form-control" maxlength="30"></td>
				</tr>
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
