<?php

$nombre = $_POST["nombre"];

// var_dump( empty($_POST["nombre"]));

// die();

/* if( isset($nombre) && !empty($nombre)){
    echo "¡Hola $nombre!";
} else {
    echo "No mandaste nada :(";
} */

if ( isset($_POST["form"])){
    echo "Todo el formulario fue mandado";
} else {
    echo "No se mando ningun formulario";
}