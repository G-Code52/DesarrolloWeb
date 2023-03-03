<html>
    <head>
        <body>
            <H2 align='center'>Ejemplo consulta Base de Datos</H2>
            <?php
                include("conex.php");
                $link = Conectarse();
                $result = mysqli_query($link, "Select * from usuario where dni = 1");      // php5
            ?>
            <table border = "1" cellspacing = "1" cellpadding = "1" align = "center">
                <tr>
                    <td>
                        ID
                    </td>
                    <td>
                        Nombre
                    </td>
                    <td>
                        Apellidos
                    </td>
                    <td>
                        DNI
                    </td>
                </tr>
                <?php
                    while($row = mysqli_fetch_array($result)) {
                        printf("<TR><TD>%d</td><td>%s</td><td>%s</td><td>%d</td></tr>",
                            $row["id"], $row["nombre"], $row["apellidos"], $row["dni"]);
                    }
                    mysqli_free_result($result);
                    mysqli_close($link);
                ?>

            </table>

        </body>
    </head> 

</html>