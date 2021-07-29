<?php

include_once ("baseDeDatos.php");

$idActual = $_GET["editar"];

include_once ("recursos/header.php");

?>

<br>

<div class="row valign-wrapper">

    <form class="col s12 xl9" action="editarDatosForrmula1.php" method="post" enctype="multipart/form-data">

        <?php echo "<input type='hidden' name='idActual' value='$idActual'>" ?> <br>

        <div class="row">
            <div class="input-field col s6 xl4">
                <h6 class="red-text accent-2 right"> El número de chasis, no puede ser modificado. </h6>
            </div>
            <div class="input-field col s6 xl4">
                <input placeholder="" id="constructor" name="constructor" type="text" class="validate">
                <label for="constructor">Constructor</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6 xl4">
                <input placeholder="" id="año" type="number" name="año" min="1950" max="2020" step="1" value="2020" class="validate">
                <label for="año">Año</label>
            </div>

            <div class="file-field input-field col s6 xl4">
                <div class="btn-small red grey darken-1">
                    <span>Imagen</span>
                    <input type="file" name="imagen">

                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Subir imagen">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 xl8">
                <textarea placeholder="" id="textarea1" class="materialize-textarea" name="descripcion" data-length="120"></textarea>
                <label for="textarea1">Descripción</label>
            </div>
        </div>

        <div class="input-field col s12 xl8">

            <button class="btn waves-effect waves-light red accent-2 right" type="submit" name="action">Editar

            </button>

        </div>
    </form>
</div>




<?php

include_once ("recursos/footer.html");


?>



