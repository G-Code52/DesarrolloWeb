<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calculadora</title>

	 <script type="text/javascript">

      function valida_enviar(){
        // valido el dato 1
        if(document.form_calculadora.dato_1.value.length==0){
          alert("Tiene que escribir  el dato 1")
          document.form_calculadora.dato_1.focus()
          return 0
        }
      // valido el dato 2
        if (document.form_calculadora.dato_2.value.length==0) {
          alert("Tiene que escribir el dato 2")
          document.form_calculadora.dato_2.focus()
          return 0
        }

        // valido no divida entre 0
        if (document.form_calculadora.dato_2.value==0 && document.form_calculadora.opc.value==3){
          alert("No se puede dividir entre 0")
          document.form_calculadora.dato_2.focus()
          return 0
        }


       // valido opcion  
        if (document.form_calculadora.opc.value.length==0) {
          alert("Tiene que seleccionar una opcion")
          document.form_calculadora.opc.focus()
          return 0
        }
       // se envia el formulario
        //el formulario se envia
        alert("Muchas gracias por enviar el formulario")
        document.form_calculadora.submit()
      }

    </script>
</head>
<body bgcolor="Olive">
	<?php
		echo date("M d Y H:i");

	?>
	<table width="70%" align="center" height="200" border="1">
		<form ACTION="calculadoraV2.php" METHOD="GET" name="form_calculadora">
		<tr>
			<td colspan="2" width="50%">
				Dato 1: <input type="text" name="dato_1" size="10">
			</td>
			<td colspan="2">
				Dato 2: <input type="text" name="dato_2" size="10">
			</td>
		</tr>
		<tr>
			<td>
				<input type="radio" name="opc" value="1"> Suma
			</td>
			<td>
				<input type="radio" name="opc" value="2"> Resta
			</td>
			<td>
				<input type="radio" name="opc" value="3"> División
			</td>
			<td>
				<input type="radio" name="opc" value="4"> Multiplicación
			</td>
		</tr>
		<tr>
			<td colspan="4" align="left">
				<input type="button" value="Enviar" onclick="valida_enviar()">
			</td>
		</tr>
	    </form>
	</table>
	<br>
	<hr>
</body>
</html>

<?php 			// Vaciar información de la calculadora

	if($_GET){
		$dato1 = $_GET['dato_1'];
		$dato2 = $_GET['dato_2'];
		$opc = $_GET['opc'];

		switch ($opc) {
			case 1:
				// Suma los datos
				$r = $dato1 + $dato2;
				echo "Usted escogio Sumar $dato1 + $dato2";
				break;

			case 2:
				// Resta los datos
				$r = $dato1 - $dato2;
				echo "Usted escogio Restar $dato1 - $dato2";
				break;

			case 3:
				// Divide los datos
				$r = $dato1 / $dato2;
				echo "Usted escogio Dividir $dato1 / $dato2";
				break;

			case 4:
				// Miltiplica los datos
				$r = $dato1 * $dato2;
				echo "Usted escogio Multiplicar $dato1 x $dato2";
				break;
			
			default:
				// Error
				echo "Error, no escgió la operacion";
				break;
		}
		echo "<br><p>El resultado es $r</p>";
		echo "<br><br>";
	}
?>