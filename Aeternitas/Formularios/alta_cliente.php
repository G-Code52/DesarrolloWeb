
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
            <form id="msform" name="fvalida" method="POST" action="../PHP_Aeternitas/alta_cliente.php">
				<h1>ALTA CLIENTE</h1>
                <!-- progressbar -->
                <ul id="progressbar">
                    <li class="active">Datos Personales</li>
                    <li>Dirección</li>
                    <li>Datos Generales</li>
                </ul>
                <!-- fieldsets -->
                <fieldset>
                    <h2 class="fs-title">Datos Personales</h2>
                    <h3 class="fs-subtitle">Todos los datos en este campo son obligatorios</h3>
                    <input type="text" name="nombre" placeholder="Nombre"/>
                    <input type="text" name="apellido" placeholder="Apellidos"/>
                    <label for="fechanacimiento">Fecha Nacimiento</label><br>
                    <input type="date" name="fecha_nacimiento" value="2001-09-10"/>
                    <input type="email" name="correo" placeholder="Correo Electrónico"/>
                    <input type="tel" name="telefono" placeholder="Telefono Celular"/>

                    <input type="button" name="next" class="next action-button" value="Siguiente"/>
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Dirección</h2>
                    <h3 class="fs-subtitle">Todos los campos son obligatorios, a menos que diga Opcional</h3>
                    <input type="text" name="calle" placeholder="Calle"/>
                    <input type="text" name="numexterior" placeholder="Numero Exterior"/>
                    <input type="text" name="numinterior" placeholder="Numero Interior (Opcional)"/>
                    <input type="text" name="colonia" placeholder="Colonia"/>
                    <input type="text" name="codigopostal" placeholder="Codigo Postal"/>
                    <input type="text" name="municipio" placeholder="Municipio"/>


                    <input type="button" name="previous" class="previous action-button-previous" value="Previo"/>
                    <input type="button" name="next" class="next action-button" value="Siguiente"/>
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Datos Generales</h2>
                    <h3 class="fs-subtitle">Todos los campos son obligatorios, a menos que diga (Opcional)</h3>
                    <input type="tel" name="telefonocasa" placeholder="Telefono Casa (Opcional)"/>
                    <input type="tel" name="telefonotrabajo" placeholder="Telefono Trabajo (Opcional)"/>
                    <input type="text" name="ine" placeholder="INE (Opcional)"/>
                    <input type="text" name="rfc" placeholder="RFC (Opcional)"/>
                    <label>Tipo de Cliente</label>
                    <select name="tipo">
                        <option value="Comprador">Comprador</option>
                        <option value="Benefactor">Benefactor</option>
                    </select><br>
                    <label>Parentesco</label>
                    <select name="parentesco">
                        <option value="Padre/Madre">Comprador</option>
                        <option value="Padre/Madre">Padre/Madre</option>
                        <option value="Hermano">Hermano</option>
                        <option value="Tio">Tío</option>
                        <option value="Sobrino">Sobrino</option>
                        <option value="Suegro">Suegro</option>
                        <option value="Amigo">Amigo</option>
                        <option value="Otro">otro</option>
                    </select>
                    <br><br><br>
                    <label>ID Cliente Benefactor (0 si no es benefactor)</label><br>
                    <input type="number" name="at_cte_id" placeholder="ID Cliente(Opcional)">


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
    <script  src="../JS/scriptFormCliente.js"></script>
</body>
</html>