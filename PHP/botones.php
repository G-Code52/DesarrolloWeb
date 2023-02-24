<!DOCTYPE html>
<?php 
header('Content-Type: text/html; charset=UTF-8');
?>
<html>
	<head>
		<meta charset="UTF=8">
		<title>Botones</title>
	</head>

	<body>
		<FORM method="POST">
			<table border="1" width="500" align="center" height="60%">
			<tr>
				<th colspan="3">
					Alumnos
				</th>
			</tr>
			<tr>
				<td width="166">
					Nombre: 
				</td>
				<td colspan="2">
					<INPUT TYPE="Text" PLACEHOLDER="Prueba" SIZE="50%" MAXLENGTH="15" NAME="Campo_01">
				</td>
			</tr>
			<tr>
				<td>
					Password: 
				</td>
				<td colspan="2">
					<INPUT TYPE="Password" PLACEHOLDER="Prueba" SIZE="50%" MAXLENGTH="15" NAME="Campo_01">
				</td>
			</tr>
			<tr>
				<td colspan="3">
					Semestre: 
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<table width="90%">
					<tr>
						<td align="center">
							<INPUT TYPE="RADIO" NAME="tipo" VALUE="1" CHECKED>1
						</td>
						<td align="center">
							<INPUT TYPE="RADIO" NAME="tipo" VALUE="2" CHECKED>2
						</td>
						<td align="center">
							<INPUT TYPE="RADIO" NAME="tipo" VALUE="3" CHECKED>3
						</td>
					</tr>
					</table>
				</td>	
			</tr>
			<tr>
				<td colspan="3">
					Deporte: 
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<table width="90%">
					<tr>
						<td align="center">
							<INPUT TYPE="CHECKBOX" NAME="Deporte1" VALUE="Dep1" CHECKED>Box
						</td>
						<td align="center">
							<INPUT TYPE="CHECKBOX" NAME="Deporte1" VALUE="Dep2" CHECKED>Natación
						</td>
					</tr>
					</table>
				</td>
			</tr>
			<tr >
				<td colspan="3">
					<table width="90%">
					<tr>
						<td align="center">
							<INPUT TYPE="RESET" NAME="Reset" VALUE="Reset" CHECKED>
						</td>
						<td align="center">
							<INPUT TYPE="SUBMIT" NAME="Go" VALUE="Send" CHECKED>
						</td>
					</tr>
					</table>
				</td>
				
			</tr>

		</table> 
		</FORM>
	</body>

</html>