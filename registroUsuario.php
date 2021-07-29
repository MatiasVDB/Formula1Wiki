<?php
include_once("recursos/header.php")
?>

<br>

<div class="row valign-wrapper">

    <form class="col s12 xl9" action="guardarDatosFormula1.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="input-field col s6 xl4">
                <input placeholder="Ingrese su nombre" name="name" id="first_name" type="text" class="validate">
                <label for="nombre">Nombre</label>
            </div>
            <div class="input-field col s6 xl4">
                <input placeholder="Ingrese su apellido" name="surname" id="surname" type="text" class="validate">
                <label for="surname">Apellido</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6 xl4">
                <input placeholder="Ingrese email" name="email" id="email" type="email" class="validate">
                <label for="email">Email</label>
            </div>

            <div class="input-field col s6 xl4">
                <input placeholder="Contraseña" name="password" id="password" type="password" class="validate">
                <label for="password">Contraseña</label>
            </div>
        </div>

        <div class="row">

        <div class="input-field col s6 xl4">

            <button class="btn waves-effect waves-light red accent-2" type="submit" name="action">Registrarse
                <i class="material-icons right">send</i>
            </button>

        </div>

        </div>
    </form>
</div>


<?php include_once ("recursos/footer.html") ?>
