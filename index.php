<?php
include_once("recursos/header.php")
?>


<!-- Page Layout here -->

<main>

    <div class="carousel carousel-slider center">

        <div class="carousel-item red white-text fondoSlider1" href="busquedaF1Admin.php" id="contenedorItemSlider">
            <h2>Visitá nuestra lista completa de F1</h2>

            <p class="white-text">Este sitio te permite encontrar toda la info de los monoplazas más rápidos del
                mundo</p>

            <div class="carousel-fixed-item center">
                <a class="btn waves-effect amber lighten-1 white-text darken-text-2" href="listaDeMonoplazas.php">IR</a>
            </div>

        </div>

        <div class="carousel-item amber white-text fondoSlider2" href="#!" id="contenedorItemSlider">

            <h2>Podes registrar el chasis que quieras!</h2>

            <p class="white-text">Cargá tu F1 historico, el que quieras, el que más ames</p>

            <div class="carousel-fixed-item center">
                <a class="btn waves-effect amber lighten-1 white-text darken-text-2"
                   href="registrarFormula1.php">Cargar</a>
            </div>


        </div>
        <div class="carousel-item green white-text fondoSlider3" href="#three!" id="contenedorItemSlider">
            <h2>Se parte de nuestra wiki</h2>

            <p class="white-text">Para poder cargar un monoplaza al sitio, necesitamos que te registres, si ya lo
                hiciste inicia sesion </p>

            <div class="carousel-fixed-item center">
                <a class="btn waves-effect amber lighten-1 white-text darken-text-2" href="registroUsuario.php">Registrate</a>

                <a class="btn waves-effect white grey-text darken-text-2" href="iniciarSesion.php">Inicia Sesion</a>
            </div>

        </div>
    </div>

    </div>

</main>


<style>

    .btn {

        border: solid 2px white;
    }


    .fondoSlider1 {

        background-image: url("recursos/img/fondoSlider1.png");
    }

    .fondoSlider2 {

        background-image: url("recursos/img/fondoSlider2.png");
    }

    .fondoSlider3 {

        background-image: url("recursos/img/fondoSlider4.png");
    }

    #contenedorItemSlider {

        background-repeat: no-repeat;
        background-size: contain;
        background-position: bottom;
        background-position-y: 40px;

    }

</style>

<?php

include_once("recursos/footer.html")

?>





