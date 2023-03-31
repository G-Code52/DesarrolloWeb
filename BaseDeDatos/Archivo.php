<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Formulario ara consulta de datos</title>

</head>
<body>
    <br><br>
    <form action="subirarchivo.php" Method="POST" enctype="multipart/form-data">
        <table width="40%" align="center">
            <tr>
                <td width="40%">Titulo:</td>
                <td width="30%"><input type="text" name="nombre" size="35" maxlength="70"></td>
            </tr>
            <tr>
                <td width="40%">Achivo:</td>
                <td width="30%"><input type="file" name="archivo" id="archivo" size="25" maxlength="70"></td>
            </tr>
            <tr>
                <td colspan="2"> <br><br> </td>
            </tr>
            <tr>
                <td align="center" colspan="3"> <input type="submit" name="accion" value="Enviar"></td>
            </tr>
        </table>
</body>
</html>

