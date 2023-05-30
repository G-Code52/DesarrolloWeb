<?php
function Conectarse()
    {
        if(! ($link = mysqli_connect("localhost", "proydweb_p2023", "Dweb_2@23", "proydweb_p2023")))
        {
            echo "Error conectando a la base de datos.";
            exit();
        }
        return $link;

    }

?>

