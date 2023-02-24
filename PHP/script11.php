<?php 		//script11.php
    header('Content-Type: text/html; charset=UTF-8');
    echo strlen("123456"),"<br>";
    $palabras = explode(" ", "Esto es una prueba");
    for($i = 0; $i < count($palabras); $i++)
        echo $palabras[$i], "<br>";
    echo substr("Devuelve una subcadena de otra", 9, 3), "<br><br>";
    if(chop("Cadena \n\n") == "Cadena")
        echo "Iguales<br><br>";
    echo strpos("Busca la palabra dentro de la frase", "palabra"),"<br><br>";
    echo str_replace("verde", "rojo", "Un pez de color verde, como verde es la hierba."), "<br>";
    
?>
