<?php 		//script10.php
header('Content-Type: text/html; charset=UTF-8');
    $a = "texto";
    $b = 3;
    
    printf("Puede fácilmente intercalar <b>%s</b> con números <b>%d</b> <br>", $a, $b);
    printf("<table border = 1 cellpadding = 7 align='center'>");
    for($i = 0; $i < 10; $i++){
        printf("<tr><td> %d </td></tr>", $i);
    }
    printf("</table>");
    
?>
