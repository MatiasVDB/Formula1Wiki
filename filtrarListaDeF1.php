<?php
include_once ("baseDeDatos.php");
include_once("recursos/header.php");

?>

    <table class="striped centered">

        <thead>
        <tr>
            <th> Imagen </th>
            <th>Numero de Chasis</th>
            <th>Constructor</th>
            <th> Año </th>
            <?php  if(isset($_SESSION['login'])) {
                echo "<th> Acciones </th>";
            }
            ?>
        </tr>
        </thead>

        <tbody>

    <?php
    $datoF1 = $_POST["busqueda"];
    global $bd;


    $sql = "SELECT * FROM formulauno where id = '$datoF1' or constructor like '$datoF1'";

    $result = $bd->query($sql);

    if($result ->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {

            $arrayIdentificadores[] = $row["id"];

            foreach ($arrayIdentificadores as $var){

                $id = $var;
            }

            echo "<tr>" ."<td>" ."<img  src='recursos/img/".$row["archivo"]."' width='80px' height='70px'>" ."</td>"."<td>" . "<a href='wikiF1.php?busqueda=$id'> ".$row["id"]." </a>" . "</td>". "<td>".$row["constructor"]."</td>". "<td>".$row["año"]."</td>";

            if(isset($_SESSION['login'])) {
                echo "<td>" . "<a class='waves-effect waves-light btn-small  grey darken-1' href='modificarF1.php?editar=$id'> Editar </a>" . " " . "<a class='waves-effect waves-light btn-small red accent-2' href='eliminarF1.php?eliminar=$id'> Eliminar </a>" . "</td>" . "</tr>";
            }
        }

    }

    else if($datoF1 == "" ){

        $bd->close();

        header("Location: " ."listaDeMonoplazas.php");

        exit();
    }

    else{

        echo "Monoplaza no encontrado". "</br>" ."Volver a la <a href='listaDeMonoplazas.php'> busqueda </a>  ";


    }
    $bd->close();

    ?>

        </tbody>
    </table>

<div class="row">

    <div class="col s12">
        <div class="center-align">
    <a class='waves-effect waves-light btn-small red accent-2' href='listaDeMonoplazas.php'> Lista Completa</a>
        </div>
    </div>
</div>

<?php include_once ("recursos/footer.html")?>