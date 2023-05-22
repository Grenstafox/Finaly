<?php
    $conexion = new mysqli("localhost","id19576990_marco","17JMal@#","id19576990_fabrica");
    if($conexion){
        echo "la gestion fue exitosa !!"; 
       /*header("Location: index.php");*/
    }else{
        echo "Fallo la gestion";
    }

?>