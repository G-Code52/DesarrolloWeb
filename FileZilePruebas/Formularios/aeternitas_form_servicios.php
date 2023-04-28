<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Alta de Servicios</title>
	<link rel="stylesheet" type="text/css" href="../CSS/forms_style.css">
	<link rel="stylesheet" href="../CSS/fontawesome/css/all.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


	<script type="text/javascript">
	function valida_envia() {
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
</head>
<body>
	<div id="general">
		<div id="form_alta">
			<h1>Alta de Servicio:</h1>
			<form name="fvalida" method="POST" action="../PHP_Aeternitas/aeternitas_alta_servicios.php" enctype="multipart/form-data">
				<table class="table table-striped" id="tabla_iniciosesion" >
					<tr>
						<td colspan="2"><label for="tiposervicio">Tipo de Servicio:</label></td>
						<td colspan="2"><input type="text" id="tiposervicio" name="tiposervicio" class="form-control" maxlength="20" required></td>
						</tr>
					<tr>
						<td><label for="preciooriginal">Precio Original:</label></td>
						<td><input type="text" id="preciooriginal" name="preciooriginal" class="form-control" maxlength="20" required></td>
						<td><label for="descuento">Descuento:</label></td>
						<td colspan="2"><input type="number" id="descuento" name="descuento" class="form-control"></td>
					</tr>
					<tr>
						<td><label for="nombrearchivo">Nombre Archivo:</label></td>
						<td ><input type="text" id="nombrearchivo" name="nombrearchivo" class="form-control"></td>
						<td><label for="archivo">Imagen:</label></td>
						<td ><input type="file" id="archivo" name="archivo" class="form-control" size="25" maxlength="70"></td>
					</tr>
					<tr>
						<td colspan="2"><a href="../aeternitas_menu_trabajador.php"><input id="submit" type="button" class="btn btn-primary" value="Atrás"></a></td>
						<td colspan="2"><input type="submit" class="btn btn-primary" onclick="valida_envia()" value="Enviar" id="submit"></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</body>
</html>
