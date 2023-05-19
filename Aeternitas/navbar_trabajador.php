<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="CSS/menu_style.css"/>
	</head>
	<body>
		<div id="menu">
			<div class="row" style="width: 100%;">
			  <div class="col-2">
				<a href="info.php" target="Pantalla_principal">Aeternitas</a>
			  </div>
			  <div class="col-2">
				<a href="servicios.php" target="Pantalla_principal">Servicios</a>
			  </div>
			  <div class="col-3">
				<a href="nichos.php" target="Pantalla_principal">Nichos</a>
			  </div>
			  <div class="col-5 text-end">
			  <a href="PHP_Aeternitas/salir.php" target="_parent"> Cerrar Sesion
				
			  </a>

				<a href="menu_trabajador.php" target="Pantalla_principal">
					<?php
					session_start();
					echo '<span>Bienvenido, ' . $_SESSION['nombre'] . '</span>';
					?>
				</a>
			  </div>
			</div>
		</div>	  
	</body>
	</html>