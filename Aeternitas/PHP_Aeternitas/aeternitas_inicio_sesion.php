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
          document.formulario.id_trabajador.focus()
          return 0
        }

        if (document.form_inicioSesion.contraseña_trabajador.value.length==0) {
          alert("Tiene que escribir su contraseña")
          document.form_inicioSesion.contraseña_trabajador.focus()
          return 0
        }

        //el formulario se envia
        alert("Muchas gracias por enviar el formulario")
        document.formulario.submit()

      }

    </script>
</head>
<body bgcolor="#21302E">
	<?php 		//script11.php
    header('Content-Type: text/html; charset=UTF-8');
    
    echo "<table width='100%' align='center' height='100%'>
    	<tr> <table width='100%' <tr> <th width='60%' align='right'>
    	<font color='FFFFFF' size='7' face='Verdana' > INICIO DE SESIÓN </font>
    	</th>
					<td align='right'>
						<img type='image' name='aeternitas_logo' src='../Imagenes/aeternitas_logo.png' width='150' valign='center'>
					</td>
				</tr>
			</table>
		</tr>
		<tr>
			<table width='100%'>
				<tr>
					<td width='50%'>
						<p align='center'><img type='image' name='aeternitas_memorial' src='../Imagenes/aeternitas_memorial.jpg' width='70%'></p>
					</td>
					<td>
						<table>
							<tr >
								<td colspan='2'>
								<font color='FFFFFF' size='3' face='Verdana'>
								<p align='right'>
								<h1>Ingresa tus Credenciale de Inicio</h1><BR>
								</p>
								</font>
								</td>
							</tr>
							<form name='form_inicioSesion'>
							<tr>
								<td width='20%'><font color='FFFFFF' size='3' face='Verdana'>ID Trabajador: </font></td>
								<td><input type='text' name='id_trabajador'></td>
							</tr>
							<tr align='left'>
								<td><font color='FFFFFF' size='3' face='Verdana'>Contraseña: </font></td>
								<td><input type='password' name='contraseña_trabajador'></td>
							</tr>
							<tr>
								<td colspan='2'>
									<input type='button' value='Enviar' onclick='valida_envia()'>
								</td>
							</tr>

						</table>
					</td>
				</tr>
			</table>
		</tr>
		</table>";
    
	?>
</body>
</html>