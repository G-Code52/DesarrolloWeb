<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<style>
		label {
		  font-family: Verdana;
		  font-size: 24px;
		  color: white;
		}
		
		body {
			background-color: #21302E !important;
		}
		
		h1 {
			background-color: #21302E;
			font-family: Verdana, san-serif;
			color: white m !important;
		}
	</style>

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
        alert("Muchas gracias por enviar el formulario")
        document.form_inicioSesion.submit()
      }

    </script>
	<link rel="stylesheet" href="CSS/fontawesome/css/all.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body bgcolor="#21302E">
	<table width="100%" align="center" height="100%">
		<tr>
			<table width="100%">
				<tr>
					<th width="60%" align="right">
						<font color="FFFFFF" size="7" face="Verdana" > INICIO DE SESIÓN </font>
					</th>
					<td align="right">
						<img type="image" name="aeternitas_logo" src="../Imagenes/aeternitas_logo.png" width="150" valign="center">
					</td>
				</tr>
			</table>
		</tr>
		<tr>
			<table width="100%">
				<tr>
					<td width="50%">
						<p align="center"><img type="image" name="aeternitas_memorial" src="../Imagenes/aeternitas_memorial.jpg" width="70%"></p>
					</td>
					<td>
						<table>
							<tr >
								<td colspan="2">
								<font color="FFFFFF" size="3" face="Verdana">
								<p align="right">
								<h1>Ingresa tus Credenciale de Inicio</h1><BR>
								</p>
								</font>
								</td>
							</tr>
							<form ACTION="../PHP_Aeternitas/control.php" class="table table-striped" METHOD="POST" name="form_inicioSesion">
							<tr>
								<td width="20%"><font color="FFFFFF" size="3" face="Verdana">ID Trabajador:</font></td>
								<td><select name="id_trabajador" class="form-control"> 
								<?php
									include "../PHP_Aeternitas/conex.php";
									$link = Conectarse();
									$result = mysqli_query($link, "Select id from at_empleados") or die(mysqli_error($link));
									while($row = mysqli_fetch_array($result))
	  									{echo '<option>'.$row['id'];}
								?>
							
								</td>
							</tr>
							<tr align="left">
								<td><font color="FFFFFF" size="3" face="Verdana">Contraseña: </font></td>
								<td><input type="password" name="password_trabajador"></td>
							</tr>
							<tr>
								<td colspan="2">
									<input type="button" value="Enviar" onclick="valida_envia()">
								</td>
							</tr>

						</table>
					</td>
				</tr>
			</table>
		</tr>

	</table>
	
</body>
</html>