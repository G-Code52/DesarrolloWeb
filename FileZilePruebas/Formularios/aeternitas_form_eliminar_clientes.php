<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Eliminar Cliente</title>

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
			<h1>Eliminar Cliente:</h1>
			<form name="fvalida" method="POST" action="../PHP_Aeternitas/aeternitas_eliminar_clientes.php">
				<table id="tabla_forms">
				<tr>
				<td><label for="id"><font color="red" size="5" face="Verdana">*</font>ID a borrar:</label></td>
				<td><input type="text" id="id" name="id" class="form-control" required> </td>
			  	</tr>
				<tr>
				<td colspan="2"><input type="button" class="btn btn-primary" value="Enviar" onclick="valida_envia()"></td>
			  </tr>
			  </table>
			</form>
		</div>
	</div>

</body>
</html>
