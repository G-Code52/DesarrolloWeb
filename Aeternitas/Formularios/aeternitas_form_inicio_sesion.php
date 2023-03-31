<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Inicio de Sesión</title>

	 <script type="text/javascript">

      function valida_envia(){
        // valido el nombre
        if(document.form_inicioSesion.id_trabajador.value.length==0){
          alert("Tiene que escribir su ID de Trabajador")
          document.form_inicioSesion.id_trabajador.focus()
          return 0
        }

        if (document.form_inicioSesion.password_trabajador.value.length==0) {
          alert("Tiene que escribir su password")
          document.form_inicioSesion.password_trabajador.focus()
          return 0
        }

        //el formulario se envia
		// Obtener el objeto del frame por su nombre
		// var miFrame = window.frames["Menu_Principal"];

		// Cambiar la URL del frame
		// miFrame.location.href = "../aeternitas_menu_numtrabajador.html";
        alert("Muchas gracias por enviar el formulario")
        document.form_inicioSesion.submit()
      }

    </script>
	<link rel="stylesheet" type="text/css" href="../CSS/forms_style.css"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>

<div id="general"> 

	<div id="form_inicio">
		<div>
		<img id="logo" src="../Imagenes/Logo.jpg" alt="Logo">
		</div>
	  <table width="100%" align="center" height="100%" id="tabla_iniciosesion">
			<form ACTION="../PHP_Aeternitas/control.php" class="table table-striped" METHOD="POST" name="form_inicioSesion">
				<tr align="left">
					<td><font size="3" face="Verdana">ID Trabajador:</font></td>
					<td><select name="id_trabajador" class="form-control" required> 
					<?php
						include "../PHP_Aeternitas/conex.php";
						$link = Conectarse();
						$result = mysqli_query($link, "Select id from at_empleados ORDER BY id") or die(mysqli_error($link));
						while($row = mysqli_fetch_array($result))
							{echo '<option>'.$row['id'];}
					?>
				
					</td>
				</tr>
				<tr align="left">
					<td><font size="3" face="Verdana">Contraseña: </font></td>
					<td><input type="password" class="form-control" name="password_trabajador" required></td>
				</tr>
				<tr>
					<td colspan="2">
						<input id="enviar" type="button" value="Enviar" onclick="valida_envia()">
					</td>
				</tr>
			</form>
	  </table>
	</div>

</div>

</body>
</html>