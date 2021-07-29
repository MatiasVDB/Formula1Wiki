<?php

include_once ("baseDeDatos.php");

$id = $_GET["eliminar"];

global $bd;


$sql = " DELETE from formulauno where id = '$id'";

if($bd->query($sql) == true){

    echo "registro Eliminado";

    header("Location: " ."listaDeMonoplazas.php");
}

else{

    echo "error en el registro";
}

$bd->close();



exit();


