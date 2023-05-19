<?php
	include("../PHP_Aeternitas/security.php")
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Elimina Proveedor</title>
    <script>
  function confirmarEliminacion() {
    var confirmacion = prompt("¿Estás seguro de que quieres eliminar a este Proveedor? Introduce la palabra 'ELIMINAR' para confirmar.");

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
        <FORM METHOD="POST" action="elimina_proveedor.php">	
		<label for="nombre"><font color="red" size="5" face="Verdana">*</font>ID a Eliminar:</label>
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

            <form id="msform" name="fvalida" method="POST" action="../PHP_Aeternitas/eliminar_proveedor.php">
                <H1>ELIMINAR PROVEEDOR</H1>
                <!-- progressbar -->
                <ul id="progressbar">
                    <li class="active">Datos Proveedor</li>
                </ul>
                <!-- fieldsets -->
				<?php
					if(!isset($_POST['id']))
						$var = 1;
					else
						$var = $_POST['id'];

					$result = mysqli_query($link, "Select * from at_proveedores where id ='$var'");
					$row = mysqli_fetch_array($result);
					echo "
						<fieldset>
							<h2 class='fs-title'>Datos Proveedor</h2>
							<h3 class='fs-subtitle'>Visualizacion de los datos del Proveedor</h3>
							<br><br>
							<label> ID del Proveedor a Eliminar </label>
							<input type='number' name='id' value='".$row['id']."' readonly/>
                            <label>Tipo insumo</label>
							<input type='text' name='tipoinsumo' value='". $row['tipoinsumo'] ."'/ readonly>
							<label>Nombre Empresa</label>
                            <input type='text' name='nombreempresa' value='" . $row['nombreempresa'] . "' readonly/>
                            <label>Telefono</label>
                            <input type='tel' name='telefono' value='" . $row['telefono'] . "' readonly/>
							<label>Direccion</label>
                            <input type='text' name='direccion' value='" . $row['direccion'] . "' readonly/>
							<label>Nombre Dueño</label>
                            <input type='text' name='nombredueno' value='" . $row['nombredueno'] . "' readonly/>
							<label>Descripcion</label>
                            <input type='text' name='descripcion' value='" . $row['descripcion'] . "' readonly/>
							<label>Precio Servicio: </label>
                            <input type='number' name='precioservicio' value='" . $row['precioservicio'] . "' readonly/>


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