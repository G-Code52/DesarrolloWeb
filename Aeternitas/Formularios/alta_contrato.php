<?php
include("../PHP_Aeternitas/security.php")
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario Contratos</title>

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
            <form id="msform" name="fvalida" method="POST" action="../PHP_Aeternitas/alta_contrato.php">
                <h1>ALTA CONTRATO</h1>
                <!-- progressbar -->
                <ul id="progressbar">
                    <li class="active">CLIENTE/EMPLEADO</li>
                    <li>Servicios a Contratar</li>
                    <li>Detalles</li>
                </ul>
                <!-- fieldsets -->
                <fieldset>
                    <h2 class="fs-title">CLIENTE/EMPLEADO</h2>
                    <h3 class="fs-subtitle">Selecciona el cliente y el empleado</h3>
                    
                    <label>Nombre Cliente</label>
                    <select name="nombrecliente" class="form-control" id="cliente">
                    <?php
                    include "../PHP_Aeternitas/conex.php";
                    $link = Conectarse();

                    $result = mysqli_query($link, "SELECT * FROM at_clientes");
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<option value="'.$row['id'].'">'.$row['nombre']." ".$row['apellido'].'</option>';
                    }
                    ?>
                    </select><br><br>

                    <label>Nombre Empleado</label>
                    <select name="nombreempleado" class="form-control" id="empleado">
                        <?php
                        $result = mysqli_query($link, "SELECT * FROM at_empleados");
                        while ($row = mysqli_fetch_array($result)) {
                            echo '<option value="'.$row['id'].'">'.$row['nombre']." ".$row['apellido'].'</option>';
                        }
                        ?>
                    </select>

                    <input type="button" name="next" class="next action-button" value="Siguiente"/>

                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Servicios a Contratar</h2>
                    <h3 class="fs-subtitle">Selecciona los servicios a contratar, los proveedores no son Obligatorios</h3>
                    
                    <label>Servicio a Contratar</label>
                    <select name="servicios" class="form-control" id="servicios">
                        
                    <label>Servicios</label>
                    <?php
                    $suma = 0;
                    // Obtener los servicios y calcular la suma
                    $result = mysqli_query($link, "SELECT * FROM at_servicios");
                    while ($row = mysqli_fetch_array($result)) {
                        $precio = $row['preciooriginal'];
                        echo '<option value="'.$row['nombre'].'">'.$row['nombre']. " Precio: $".$precio.'</option>';
                    }                    
                    echo "
                    </select>
                    <label>Proveedores</label>
                    <select name='proveedores' class='form-control' id='proveedores'>
                    <option value=''></option>
                    ";
                    // Obtener los proveedores y calcular la suma
                    $result = mysqli_query($link, "SELECT * FROM at_proveedores");
                    while ($row = mysqli_fetch_array($result)) {
                        $precio = $row['precioservicio'];
                        echo '<option value="'.$row['tipoinsumo'].'">'.$row['tipoinsumo']. " Precio: $".$precio.'</option>';
                    }
                    ?>
                    </select><br>

                    <input type="button" name="previous" class="previous action-button-previous" value="Previo"/>
                    <input type="button" name="next" class="next action-button" value="Siguiente"/>
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Detalles </h2>
                    <h3 class="fs-subtitle">Detalles del contratados</h3>
                    <label>Fecha firma</label>
                    <input type="date" name="fechafirma"/>
                    <label>Tipo Pago</label>
                    <select name="tipopago">
                        <option value="Efectivo">Efectivo</option>
                        <option value="Tarjeta">Tarjeta</option>
                    </select><br><br>


                    <input type="button" name="previous" class="previous action-button-previous" value="Previo"/>
                    <input type="button" name="button" class="submit action-button" onclick="validaSeccion()" value="Enviar"/>
                </fieldset>
            </form>
            <div class="dme_link">
                <?php
                    if($_SESSION['area']=="Administrador"){
                        echo "<p><a href='../menu_admin.php'>Regresar</a></p>";
                    }
                    else{
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
    <script  src="../JS/scriptFormContratos.js"></script>
</body>
</html>
