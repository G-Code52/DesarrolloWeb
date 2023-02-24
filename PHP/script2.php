<?php 		//script2.php
    $a = 'Beto';
    $b = &$a;
    $b = "Mi nombre es $b";
    echo "Resultado de a: $a","<br>";
    echo "Resultado de b: $b";
?>
