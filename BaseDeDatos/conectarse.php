
<?php
    function Conectarse()
    {
        if(!($link = mysqli_connect("localhost", "gallegos", "mysql", "mau")))
        {
            echo "Error conectando a la base de datos.";
            exit();
        }
        return $link;
    }

    $link = Conectarse();
    echo "Conexión con la Base de Datos Conseguida <br>";
    // Cierra la conexión
    mysqli_close($link);            
    
?>