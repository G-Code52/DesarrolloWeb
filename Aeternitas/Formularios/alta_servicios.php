
<?php
		include("../PHP_Aeternitas/security.php")
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario Servicios</title>

	<script type="text/javascript">
        
	</script>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel="stylesheet" href="../CSS/styleform.css">
</head>
<body>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form id="msform" name="fvalida" method="POST" action="../PHP_Aeternitas/alta_servicios.php" enctype="multipart/form-data">
				<h1>ALTA SERVICIOS</h1>
                <!-- progressbar -->
                <ul id="progressbar">
                    <li class="active">Datos del Servicio</li>
                    <li>Archivos</li>
                </ul>
                <!-- fieldsets -->
                <fieldset>
                    <h2 class="fs-title">Datos del Servicio</h2>
                    <h3 class="fs-subtitle">Todos los datos en este campo son obligatorios</h3>
					<select name="tipo">
                        <option value="Velacion">Velación</option>
                        <option value="Nicho">Nicho</option>
						<option value="Cremacion">Cremacion</option>
                    </select><br><br>
                    <input type="number" name="preciooriginal" placeholder="Precio Servicio"/>
					<input type="number" name="descuento" placeholder="Descuento (Opcional)"/>
                    <input type="text" name="nombre" placeholder="Nombre del Servicio"/>
                    <input type="text" name="descripcion" placeholder="Descripcion"/>
                    <input type="button" name="next" class="next action-button" value="Siguiente"/>
                </fieldset>
                <fieldset>
					<input type="text" name="nombrearchivo" placeholder="Nombre de la Imagen"/>
					<label>Imagen: </label>
                    <input type="file" name="archivo">					

                    <input type="button" name="previous" class="previous action-button-previous" value="Previo"/>
                    <input type="button" name="button" class="submit action-button" onclick="validaSeccion()" value="Enviar"/>
                </fieldset>
            </form>
            <div class="dme_link">
                <?php
                    if($_SESSION['area']=="Administrador"){
                        echo "<p><a href='../menu_admin.php'>Regresar</a></p>
                        ";
                    }
                    else{
                        echo "<p><a href='../menu_trabajador.php'>Regresar</a></p>
                        ";
                    }
                ?>
            </div>
        </div>
    </div>

    <!-- /.MultiStep Form -->
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
    <script  src="../JS/scriptFormServicios.js"></script>
</body>
</html>