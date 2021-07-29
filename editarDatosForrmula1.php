<?php
include_once ("baseDeDatos.php");

if(!isset($_SESSION['login'])){

    header("Location: " . "iniciarSesion.php");
}

global $bd;

$constructor = $_POST["constructor"];
$año = $_POST["año"];
$descripcion = $_POST["descripcion"];
$idActual = $_POST["idActual"];


//Procesar y guardar imagenes.

$dir_subida = './recursos/img/';
$info = pathinfo($_FILES['imagen']['name']);
$extension = $info["extension"];
$nombreArchivo = "imagen".$idActual;
$fichero_subido = $dir_subida. $nombreArchivo. ".".$extension;



function editarRegistro($registro, $dato){

    global  $bd,  $idActual, $fichero_subido;

    if($dato!= null or $dato!=0) {

        $sql = "UPDATE formulauno set $registro = '$dato' where id = '$idActual'";


        if ($bd->query($sql) == true) {


            echo '<pre>';
            if (move_uploaded_file($_FILES['imagen']['tmp_name'], $fichero_subido)) {

                echo "El fichero es válido y se subió con éxito.\n";

            } else {
                echo "¡Posible ataque de subida de ficheros!\n";
            }

            echo 'Más información de depuración:';
            print_r($_FILES);

            print "</pre>";

            return "registro editado";

        }

    }

    else{

        return "error en el registro";
    }

}

editarRegistro("constructor", $constructor);
editarRegistro("año", $año);
editarRegistro("descripcion", $descripcion);
if($extension != ""){
editarRegistro("archivo","$nombreArchivo.$extension");
}

$bd->close();

?>


<h5> Ir a la administración de monoplazas </h5>

<a href="listaDeMonoplazas.php"> GO </a>
