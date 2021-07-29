<?php
include_once("baseDeDatos.php");

  $nombre = $_POST["name"];
  $apellido = $_POST["surname"];
  $email =  $_POST["email"];
  $password = $_POST["password"];
  $md5Password = md5($password);

  global $bd;

function consultarEmailRegistradoEnLaBaseDeDatos($database){

    global $bd, $email;

    $estaRegistrado = false;

    $sql = "SELECT email FROM usuario where email = '$email'";

    $result = $database->query($sql);

    if($result ->num_rows > 0) {

            $estaRegistrado = true;

            echo "Este email ya está registrado" ." " ."<a href='registroUsuario.php'> Volver al registro </a>";
        }

    else{

        $estaRegistrado = false;
    }

    return $estaRegistrado;

}

function insertarRegistroEnLaBD()
{

    global $bd, $email, $md5Password , $nombre, $apellido;

    if (consultarEmailRegistradoEnLaBaseDeDatos($bd) == false and $email != "") {

        // Ingreso de datos en la BD.

        $sql = "INSERT INTO usuario(email, contraseña, nombre, apellido)
        VALUE ('$email','$md5Password','$nombre','$apellido')";

        if ($bd->query($sql) == true) {

            echo "registro creado" ."<a href='iniciarSesion.php'> Iniciar Sesion </a>";

        }

        else {

            echo "error en el registro";
        }

    }

    elseif ($email == ""){

        echo "Ingrese un email";
    }

    $bd->close();

}

insertarRegistroEnLaBD();


