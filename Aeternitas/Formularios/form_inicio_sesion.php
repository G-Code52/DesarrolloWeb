
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

	<title>Inicio de Sesión</title>

	 <script type="text/javascript">

      function valida_envia(){
        // valido el nombre
        if(document.form_inicioSesion.email.value.length==0){
          alert("Tiene que escribir su ID de Trabajador")
          document.form_inicioSesion.id_trabajador.focus()
          return 0
        }

        if (document.form_inicioSesion.password.value.length==0) {
          alert("Tiene que escribir su password")
          document.form_inicioSesion.password.focus()
          return 0
        }

        //el formulario se envia
		// Obtener el objeto del frame por su nombre
		// var miFrame = window.frames["Menu_Principal"];

		// Cambiar la URL del frame
		// miFrame.location.href = "../aeternitas_menu_numtrabajador.html";
        document.form_inicioSesion.submit()
      }

    </script>
	<!--<link rel="stylesheet" type="text/css" href="../CSS/forms_style.css"/>-->
	<link rel="stylesheet" href="./style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
<!--
<div id="general"> 

	<div id="form_inicio">
		<div>
		<img id="logo" src="../Imagenes/Logo.jpg" alt="Logo">
		</div>
	  <table width="100%" align="center" height="100%" id="tabla_iniciosesion">
			<form ACTION="../PHP_Aeternitas/control.php" target="_blank" class="table table-striped" METHOD="POST" name="form_inicioSesion">
				<tr align="left">
					<td><font size="3" face="Verdana">ID Trabajador:</font></td>
					<td><select name="id_trabajador" class="form-control" required> 

				
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
-->
<!-- partial:index.partial.html -->
<div class="page">
  <div class="container">
    <div class="left">
      <div class="login"><img src="../Imagenes/Logo.jpg" width="100%" align="center"></div>
      <div class="eula"></div>
    </div>
    <div class="right">
      <svg viewBox="0 0 320 300">
        <defs>
          <linearGradient
                          inkscape:collect="always"
                          id="linearGradient"
                          x1="13"
                          y1="193.49992"
                          x2="307"
                          y2="193.49992"
                          gradientUnits="userSpaceOnUse">
            <stop
                  style="stop-color:#55A092;"
                  offset="0"
                  id="stop876" />
            <stop
                  style="stop-color:#55A092;"
                  offset="1"
                  id="stop878" />
          </linearGradient>
        </defs>
        <path d="m 40,120.00016 239.99984,-3.2e-4 c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35 h -239.99984 c 0,-0.0205 -25,4.01348 -25,38.5 0,34.48652 25,38.5 25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25 h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.57143" />
      </svg>
      <div class="form">
	  	<form ACTION="../PHP_Aeternitas/control.php" target="_parent" class="table table-striped" METHOD="POST" name="form_inicioSesion">
        <label for="email">Id Trabajador</label>
        <input type="email" id="email" name="email"><br>
		
        <label for="password">Password</label>
        <input type="password" id="password" name="password"><br><br><br>
        <input id="enviar" type="button" value="Enviar" onclick="valida_envia()">
		</form>
      </div>
    </div>
  </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.min.js'></script><script  src="./script.js"></script>


</body>
</html>