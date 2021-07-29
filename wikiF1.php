<?php

include_once ("baseDeDatos.php");

include_once ("recursos/header.php");

$datoF1 = $_GET["busqueda"];

global $bd;

$sql = "SELECT * FROM formulauno where id = '$datoF1' or constructor like '$datoF1'";

$result = $bd->query($sql);

if($result ->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

        $numerodeChasis = $row["id"];
        $constructor = $row["constructor"];
        $descripcion = $row["descripcion"];
        $archivo = $row["archivo"];

        $arrayIdentificadores[] = $row["id"];

    }
}

else{
    echo "Resultado: 0";

    header("Location: " ."listaDeMonoplazas.php");

    exit();

}
$bd->close();

?>

<br>

<div class="row">

    <div class="row col s12">

       <div class="row">

        <div class="col s6">
            <?php echo "<img class='responsive-img' src=recursos/img/$archivo width='600px' height='450px'>" ?>
        </div>

        <div class="col s6">

        <h1> <?php echo $constructor. " " .$numerodeChasis ?> </h1>

            <p> <?php echo $descripcion ?> </p>

        </div>

       </div>

    </div>

</div>




<?php include_once ("recursos/footer.html")?>