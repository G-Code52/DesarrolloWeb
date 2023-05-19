<?php
	include("../PHP_Aeternitas/security.php")
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Elimina Cliente</title>
    <script>
  function confirmarEliminacion() {
    var confirmacion = prompt("¿Estás seguro de que quieres eliminar a este cliente? Introduce la palabra 'ELIMINAR' para confirmar.");

    if (confirmacion == "ELIMINAR") {
      // El usuario ha confirmado la eliminación, enviar el formulario
      document.fvalida.submit();
    } else {
      // El usuario ha cancelado la eliminación
      alert("Eliminación cancelada.");
    }
  }
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
        <FORM METHOD="POST" action="elimina_cliente.php">	
		<label for="nombre"><font color="red" size="5" face="Verdana">*</font>ID a Eliminar:</label>
		<select name="id" class="form-control">
		<?php
			include "../PHP_Aeternitas/conex.php";
			$link = Conectarse();

			$result = mysqli_query($link, "SELECT * FROM at_clientes");
			while ($row = mysqli_fetch_array($result)) {
				echo '<option>'.$row['id'];
			}
		?>
		</select>
		<input type="submit" name="action" value="Mostrar" class="btn btn-primary">
		</form>

            <form id="msform" name="fvalida" method="POST" action="../PHP_Aeternitas/eliminar_cliente.php">
                <!-- progressbar -->
                <ul id="progressbar">
                    <li class="active">Datos Personales</li>
                </ul>
                <!-- fieldsets -->
				<?php
					if(!isset($_POST['id']))
						$var = 1;
					else
						$var = $_POST['id'];

					$result = mysqli_query($link, "Select * from at_clientes where id ='$var'");
					$row = mysqli_fetch_array($result);
					echo "
						<fieldset>
							<h2 class='fs-title'>Datos Personales</h2>
							<h3 class='fs-subtitle'>Todos los datos en este campo son obligatorios</h3>
							<br><br>
							<label> ID del Cliente a Eliminar </label>
							<input type='number' name='id' value='".$row['id']."' readonly/>
							<input type='text' name='nombre' value='". $row['nombre'] ."' readonly/>
							<input type='text' name='apellido'value='" . $row['apellido'] . "' readonly/>
							<label for='fecha_nacimiento'>Fecha Nacimiento</label><br>
							<input type='date' name='fecha_nacimiento' value='" . $row['fechanacimiento'] . "' readonly/>
							<input type='email' name='correo' value='" . $row['correo'] . "'/ readonly>
							<input type='tel' name='telefono' value='" . $row['telefono'] . "'/ readonly>

                            <input type='button' name='elimina'  value='Eliminar' onclick='confirmarEliminacion()' />
                            </fieldset>"
				?>
            </form>
            <div class='dme_link'>
                <?php
                    if($_SESSION['area']=='Administrador'){
                        echo "<p><a href='../menu_admin.php'>Regresar</a></p>";
                    } else {
                        echo "<p><a href='../menu_trabajador.php'>Regresar</a></p>";
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
    <script  src="../JS/scriptFormCliente.js"></script>
</body>
</html>