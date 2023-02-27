<?php 			// Vaciar información de la calculadora

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

	echo "<br>El resultado es $r";
	echo "<br><br>";
	echo "<a href='calculadora.html'>Regresar</a>"


?>