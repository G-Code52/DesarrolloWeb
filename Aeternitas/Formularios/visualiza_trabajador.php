<!DOCTYPE html>
<html>
<head>
<title>Búsqueda de Clientes</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<script>
var typingTimer; // Temporizador para retrasar la solicitud de búsqueda
var doneTypingInterval = 500; // Intervalo de tiempo en milisegundos

$(document).ready(function(){
  $("#search").keyup(function(){
    clearTimeout(typingTimer); // Reiniciar el temporizador al escribir

    typingTimer = setTimeout(function() {
      $("#searchForm").submit(); // Enviar el formulario después de esperar el intervalo de tiempo
    }, doneTypingInterval);
  });
});
</script>
</head>
<body>
<h1>Búsqueda en tiempo real</h1>
<form id="searchForm" name="searchForm" method="POST" action="visualiza_trabajador.php">
<label>Buscar por nombre:</label>
<input type="text" id="search" name="search" value="<?php echo isset($_POST['search']) ? $_POST['search'] : ''; ?>">
</form>
<div id="result">
<?php
// Incluir el archivo de conexión
include '../PHP_Aeternitas/conex.php';
$link = Conectarse();

// Obtener el término de búsqueda enviado desde el formulario
$searchTerm = isset($_POST['search']) ? $_POST['search'] : '';

// Consulta a la base de datos con búsqueda por nombre
$sql = "SELECT * FROM at_empleados WHERE nombre LIKE '%$searchTerm%'";
$result = $link->query($sql);  

if ($result->num_rows > 0) {
    echo "<table class='table table-striped'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Nombre</th>";
    echo "<th>Apellidos</th>";
    echo "<th>Telefono</th>";
    echo "<th>Correo</th>";
    echo "<th>Id Supervisor</th>";
    echo "</tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["id"]."</td>";  
        echo "<td>".$row["nombre"]."</td>";
        echo "<td>".$row["apellido"]."</td>";
        echo "<td>".$row["telefono"]."</td>";
        echo "<td>".$row["correo"]."</td>";
        echo "<td>".$row["at_epo_id"]."</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No se encontraron resultados.";
}

$link->close();  // Usar $link en lugar de $conn
echo "<script>
    $(document).ready(function() {
        $('#search').focus().val($('#search').val());
    });
</script>";
?>
</div>
<?php
    session_start();
                    if($_SESSION['area']=="Administrador"){
                        echo "<p><a href='../menu_admin.php'>Regresar</a></p>
                        ";
                    }
                    else{
                        echo "<p><a href='../menu_trabajador.php'>Regresar</a></p>
                        ";
                    }
                ?>
</body>
</html>
