<?php

include_once ("baseDeDatos.php");

include_once("recursos/header.php");

?>


    <div class="row">
        <form class="col s12 xl6" action="filtrarListaDeF1.php" method="post">
            <div class="row">
                <div class="input-field col s6">

                    <input placeholder="Filtrar por chasis o constructor" name="busqueda" id="busqueda" type="text" class="validate">

                </div>

                <div class="input-field col s6">

                </div>

                <button class="waves-effect waves-light btn-small red accent-2" type="submit"><i class="material-icons right">search</i>filtrar</button>


            </div>
        </form>
    </div>

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

global $bd;


    $sql = "SELECT * FROM formulauno";

    $result = $bd->query($sql);

if($result ->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

        $arrayIdentificadores[] = $row["id"];

        foreach ($arrayIdentificadores as $var){

            $id = $var;
        }

      echo "<tr>" ."<td>" ."<img  src='recursos/img/".$row["archivo"]."' width='80px' height='70px'>" ."</td>"."<td>" . "<a href='wikiF1.php?busqueda=$id'> ".$row["id"]." </a>" . "</td>". "<td>".$row["constructor"]."</td>". "<td>".$row["año"]."</td>";


          if(isset($_SESSION['login'])) {


             echo "<td>" . "<a class='waves-effect waves-light btn-small  grey darken-1' href='modificarF1.php?editar=$id'> Editar </a>" . " " .  "<a class='waves-effect waves-light btn-small red accent-2' href='eliminarF1.php?eliminar=$id'> Eliminar </a>" . "</td>" . "</tr>";

          }

    }


}

else{
echo "Resultado: 0";

}
$bd->close();

?>

    </tbody>
</table>

<?php include_once ("recursos/footer.html");