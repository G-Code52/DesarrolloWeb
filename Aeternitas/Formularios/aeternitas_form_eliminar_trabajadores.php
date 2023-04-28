<?php
	include("../PHP_Aeternitas/security.php")
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Eliminar Trabajador</title>

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
	<script type="text/javascript">

		function confirmDelete() {
		  var confirmDelete = confirm("Estás seguro que quieres borrar el id: " +document.fvalida.id.value);
		  if (confirmDelete) {
		    document.fvalida.submit();
		  }
		}
	</script>

</head>
<body>

	<div id="general">
		<div id="form_alta">
			<h1>Eliminar Trabajador:</h1>
			<form name="fvalida" method="POST" action="../PHP_Aeternitas/aeternitas_eliminar_trabajadores.php">
				<table id="tabla_forms">
				<tr>
				<td colspan="2"><label for="id"><font color="red" size="5" face="Verdana">*</font>ID a borrar:</label></td>
			</tr>
				<tr>
					<td colspan="2">
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
				</tr>
			  	<tr>
			  		<td><a href="../aeternitas_menu_trabajador.php"><input id="submit" type="button" class="btn btn-primary" value="Atrás"></a></td>
				<td><input type="submit" class="btn btn-primary" value="Enviar" onclick="confirmDelete()" id="submit"></td>
			  </tr>
			  </table>
			</form>
		</div>
	</div>

</body>
</html>
