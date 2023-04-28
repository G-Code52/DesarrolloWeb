<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="CSS/info_style.css">
	<link rel="stylesheet" type="text/css" href="CSS/fontawesome/css/all.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<title>Aternitas Servicios</title>
</head>
<body>
	

<div class="carousel-container">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="Imagenes/Servicios/SalaVelacion.jpg" class="d-block w-100" height="245hv">				
			</div>
			<?php
				include "PHP_Aeternitas/conex.php";
				$link = Conectarse();
				$result = mysqli_query($link, "Select * from at_servicios WHERE tipo='Velacion'");
				while ($row = mysqli_fetch_array($result)) {
					echo "<div id='carouselDiv' class='carousel-item'>
							<table class='table table-bordered' width='80%'>
							<tbody>
							<tr>
								<td rowspan='3'  align='center'><img src='Imagenes/Servicios/".$row['imagen']."' alt='servicio 1' class='img-fluid' width='300'></td>
								<td>".$row['tipo']."</td>
							</tr>
							<tr>
								<td>Nombre: ".$row['nombre']."</td>
							</tr>
							<tr>
								<td>Precio: $" .$row['preciooriginal']. "</td>
							</tr>
							</table>
						</div>
					";
				}
			?>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<div id="infoGeneral">
		Aquí va el contenido que deseas colocar debajo del carousel.
	</div>
</div>


</body>
</html>