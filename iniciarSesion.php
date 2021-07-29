<?php
include_once("recursos/header.php")
?>

    <div class="row valign-wrapper">

        <form class="col s8" action="validarLoguin.php" method="post">

            <div class="row">

                <div class="col s6">

                <h6 class="white-text"> Inicia sesión para empezar a registrar tus monoplazas </h6>

                </div>

            </div>

            <div class="row">


                <div class="input-field col s5">

                    <input placeholder="Ingrese email" name="email" id="email" type="email" class="validate">

                </div>


            </div>

            <div class="row">

            <div class="input-field col s5">

                <input placeholder="Contraseña" name="password" id="password" type="password"
                       class="validate">
                
                </div>

            </div>

            <div class="row">

                <div class="center-align col s5">

                    <button class="btn waves-effect waves-light red accent-2" type="submit" name="action">Iniciar
                        Sesion

                    </button>

                </div>
            </div>


        </form>

    </div>




<?php
include_once("recursos/footer.html")
?>










