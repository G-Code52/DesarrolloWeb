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
		<FORM METHOD="POST" action="modifica_trabajadores.php">	
		<label for="nombre"><font color="red" size="5" face="Verdana">*</font>ID a modificar:</label>
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
		<input type="submit" name="action" value="Mostrar" class="btn btn-primary">
		</form>
		
            <form id="msform" name="fvalida" method="POST" action="../PHP_Aeternitas/modifica_trabajadores.php">
            <h1>MODIFICA TRABAJADORES</h1>    
			<!-- progressbar -->
                <ul id="progressbar">
                    <li class="active">Datos Personales</li>
                    <li>Dirección</li>
                    <li>Datos Generales</li>
                </ul>
                <!-- fieldsets -->
				<?php
							if(!isset($_POST['id']))
								$var = 1;
							else
								$var = $_POST['id'];
							// echo $var; die();
							$result = mysqli_query($link, "Select * from at_empleados where id ='$var'");
							$row = mysqli_fetch_array($result);
							echo "
                <fieldset>
                    <h2 class='fs-title'>Datos Personales</h2>
                    <h3 class='fs-subtitle'>Los siguientes campos no se pueden modificar</h3>
                    <br><br>
                    <label> ID del Empleado a Modificar </label>
                    <input type='number' name='id' value='".$row['id']."' readonly/>
                    <input type='text' name='nombre' value='". $row['nombre'] ."' readonly/>
					<input type='text' name='apellido' value='". $row['apellido'] ."' readonly/>

                    <input type='text' name='curp' value='" . $row['curp'] . "' readonly/>
					
                    <input type='button' name='next' class='next action-button' value='Siguiente'/>
                </fieldset>
                <fieldset>
                    <h2 class='fs-title'>Dirección</h2>
                    <h3 class='fs-subtitle'>Todos los campos son obligatorios, a menos que diga Opcional</h3>
                    <input type='text' name='calle' value='" . $row['calle'] . "'/>
                    <input type='text' name='numexterior' value='" . $row['numexterior'] . "'/>
                    <input type='text' name='numinterior' placeholder='Numero Interior (Opcional)'  value='" . $row['numinterior'] . "'/>
                    <input type='text' name='colonia' value='" . $row['colonia'] . "'/>
                    <input type='text' name='codigopostal' value='" . $row['codigopostal'] . "'/>

                    <input type='button' name='previous' class='previous action-button-previous' value='Previo'/>
                    <input type='button' name='next' class='next action-button' value='Siguiente'/>
                </fieldset>
                <fieldset>
                    <h2 class='fs-title'>Datos Generales</h2>
                    <h3 class='fs-subtitle'>Todos los campos son obligatorios, a menos que diga (Opcional)</h3>
                    <label>Telefono</label>
					<input type='tel' name='telefono' placeholder='Telefono' value='" . $row['telefono'] . "'/>
                    <label>Correo</label>
					<input type='email' name='correo' placeholder='Correo' value='" . $row['correo'] . "'/>
                    <label>Titulo Academico</label>
					<input type='text' name='tituloacademico' placeholder='Titulo Academico (Opcional)' value='" . $row['tituloacademico'] . "'/>
                    <label>Area del Empleado</label>
                    <select name='area'>
                        <option value='Ventas'>Ventas</option>
                        <option value='Administrador'>Administrador</option>
                    </select><br>
					<label>Comision</label>
                    <input type='number' name='comision' placeholder='Comision' value='" . $row['comision'] . "'/>
					<label>ID Empleado Supervisor</label>
					<input type='number' name='at_epo_id' placeholder='Id Empleado Supervisor' value='" . $row['at_epo_id'] . "'/>

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
    <script  src="../JS/scriptFormTrabajadores.js"></script>
</body>
</html>