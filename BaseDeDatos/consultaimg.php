<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Consulta imagenes</title>

</head>
<body>
    <?php
        include "conex.php";
        $link=Conectarse();
        $result=mysqli_query($link, "select * from articulo");
    ?>
    <TABLE BORDER="1" CELLSPACING="1" CELPADDING="1" ALIGN="center">
        <TR>
            <TD> Id Artículo</TD><TD>Nombre</TD><TD>Imagen</TD>
        </TR>
        <?php 
            while($row = mysqli_fetch_array($result)){
                $var = "<img src=imagenes/".$row['archivo']." width=80>";
                printf("<TR><TD>%d</TD><TD>%s</TD><TD>%s</TD></TR>",
                $row["IdArt"],$row["titulo"], $var);
            }
            mysqli_free_result($result);
            mysqli_close($link);
        ?>
    </TABLE>
</body>
</html>

