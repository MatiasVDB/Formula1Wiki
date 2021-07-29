<?php

    $server = "localhost";
    $user = "root";
    $password = "4868";
    $dbname = "pokedexvanderbekenmatias";
    $port = 3306;

    $bd = new mysqli($server, $user, $password, $dbname, $port);


    if ($bd->connect_error){

        die("Fallo en la conexión con el servidor: " .$bd->connect_error);
    }

