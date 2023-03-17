<html>
<head>
	<title>Uso de lista desplegable</title>
</head>
<body BGCOLOR=lavender>
	<h1>Que registro desea modificar: </h1>
	<FORM METHOD="GET" action="modifica1.php">
		<TABLE>
			<TR>
				<TD>
					ID: <select name="id">;

						<?php
							include "conex.php";
							$link = Conectarse();
							$result = mysqli_query($link, "Select id from usuario");
							while ($row = mysqli_fetch_array($result)) {
								echo '<option>'.$row['id'];
							}
						?>
					</select>
					<center><input type="submit" name="action" value="Mostrar"></center>
				</TD>
			</TR>
		</TABLE>
	</FORM>
</body>
</html>