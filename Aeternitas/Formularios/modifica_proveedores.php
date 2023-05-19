<?php
	include("../PHP_Aeternitas/security.php")
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario Clientes</title>

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
		<FORM METHOD="POST" action="modifica_proveedores.php">	
		<label for="nombre"><font color="red" size="5" face="Verdana">*</font>ID Servicio a Modificar:</label>
		<select name="id" class="form-control">
		<?php
			include "../PHP_Aeternitas/conex.php";
			$link = Conectarse();

			$result = mysqli_query($link, "SELECT * FROM at_proveedores");
			while ($row = mysqli_fetch_array($result)) {
				echo '<option>'.$row['id'];
			}
		?>
		</select>
		<input type="submit" name="action" value="Mostrar" class="btn btn-primary">
		</form>
		
            <form id="msform" name="fvalida" method="POST" action="../PHP_Aeternitas/modifica_proveedores.php">
                <h1>Modifica Proveedoes</h1>
				<!-- progressbar -->
                <ul id="progressbar">
					<li class="active">Datos del Proveedor</li>
                    <li>Datos de Servicio</li>
                </ul>
                <!-- fieldsets -->
				<?php
							if(!isset($_POST['id']))
								$var = 1;
							else
								$var = $_POST['id'];
							// echo $var; die();
							$result = mysqli_query($link, "Select * from at_proveedores where id ='$var'");
							$row = mysqli_fetch_array($result);
							echo "
							<fieldset>
                    <h2 class='fs-title'>Datos del Proveedor</h2>
                    <h3 class='fs-subtitle'>Todos los datos en este campo son obligatorios</h3>
					
					
					<label>Id Proveedor</label>
					<input type='number' name='id' value='".$row['id']."' readonly/>
                    <label>Tipo Insumo</label>
					<input type='text' name='tipoinsumo' value='".$row['tipoinsumo']."'/>
					<label>Nombre de la Empresa</label>
					<input type='text' name='nombreempresa' value='".$row['nombreempresa']."'/>
					<label>Telefono</label>
                    <input type='tel' name='telefono' value='".$row['telefono']."'/>
					<label>Direccion (No Obligatorio)</label>
                    <input type='text' name='direccion' value='".$row['direccion']."'/>
					<label>Nombre del Dueño (No Obligatirio)</label>
					<input type='text' name='nombredueno'value='".$row['nombredueno']."'/>

                    <input type='button' name='next' class='next action-button' value='Siguiente'/>
                </fieldset>
                <fieldset>
					<label>Precio del Servicio</label>
					<input type='number' name='precioservicio' value='".$row['precioservicio']."'/>
					<label>Descripcion</label>				
					<input type='text' name='descripcion' value='".$row['descripcion']."'/>				

                    <input type='button' name='previous' class='previous action-button-previous' value='Previo'/>
                    <input type='button' name='button' class='submit action-button' onclick='validaSeccion()' value='Enviar'/>
                </fieldset>"?>
            </form>
            <div class='dme_link'>
                <?php
                    if($_SESSION['area']=='Administrador'){
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
    <script  src="../JS/scriptFormProveedores.js"></script>
</body>
</html>