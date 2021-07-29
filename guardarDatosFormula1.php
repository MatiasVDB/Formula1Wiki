<?php

include_once ("baseDeDatos.php");

$numeroDeChasis = $_POST["numeroID"];
$constructor = $_POST["constructor"];
$año = $_POST["año"];
$descripcion = $_POST["descripcion"];

global $bd;



function devolverID($database){

    $sql = "SELECT id FROM formulauno";

    $result = $database->query($sql);

    if($result ->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

        $arrayId[] = $row["id"];

        return $arrayId;

    }
}

    else{

        echo "Resultado 0";

        return 0;
    }

    }


// Consulta para ver que la id ingresada, no este en la bd. Si existe esa id, se cierra la conexión con la bd.
    function buscarIdIngresadaEnLaBaseDeDatos()
    {

        global $bd, $numero;

        foreach (devolverID($bd) as $id) {

            $numeroId = $id;

            if ($numeroId == $numero) {

                echo "Este chasis ya existe, ingrese otro";

                $bd->close();

                return false;


            } else {

                return true;
            }

        }

    }



        function insertarRegistroEnLaBD(){

        global $bd, $numeroDeChasis, $constructor, $año, $descripcion;

        if(buscarIdIngresadaEnLaBaseDeDatos() == true){

            echo "Numero correcto";

                //Procesar y guardar imagenes.

            $dir_subida = './recursos/img/';
            $info = pathinfo($_FILES['imagen']['name']);
            $extension = $info["extension"];
            $nombreArchivo = "imagen".$numeroDeChasis;
            $fichero_subido = $dir_subida.$nombreArchivo.".".$extension;


            echo '<pre>';
            if (move_uploaded_file($_FILES['imagen']['tmp_name'], $fichero_subido)) {

                echo "El fichero es válido y se subió con éxito.\n";

            } else {
                echo "¡Posible ataque de subida de ficheros!\n";
            }

            echo 'Más información de depuración:';
            print_r($_FILES);

            print "</pre>";

            // Ingreso de datos en la BD.

            $sql = "INSERT INTO formulauno (id, constructor, año, descripcion, archivo)
            VALUES('$numeroDeChasis ','$constructor','$año', '$descripcion','$nombreArchivo.$extension') ";


            if($bd->query($sql) == true){

                echo "registro creado";
            }

            else{

                echo "error en el registro";

                $bd->close();
            }

            $bd->close();


            }
    }

    insertarRegistroEnLaBD();
?>

<h5> Ir a la administración de monoplazas </h5>

 <a href="listaDeMonoplazas.php"> GO </a>


