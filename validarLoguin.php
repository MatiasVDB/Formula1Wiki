<?php
include_once("baseDeDatos.php");

$email = $_POST["email"];
$contraseña = $_POST["password"];

global $bd;

function validarDatos($database)
{

    global $email, $contraseña;

    $md5hpw = md5($contraseña);

    $contraseñaValida = false;

    $sql = "SELECT * FROM usuario where email = '$email'";

    $result = $database->query($sql);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {

            $arrayContraseña[] = $row["contraseña"];
            $arrayNombres[] = $row["nombre"];
            $arrayApellidos[] = $row["apellido"];

            foreach ($arrayNombres as $nombres) {


            }

            foreach ($arrayApellidos as $apellidos) {


            }

            foreach ($arrayContraseña as $contraseñas) {

                if ($contraseñas == $md5hpw) {

                    $contraseñaValida = true;

                    setcookie('name', $nombres, time() + 3600);
                    setcookie('surname', $apellidos, time() + 3600);

                } else {

                    $contraseñaValida = false;

                    echo "Contraseña erronea";

                }

            }

        }

        return $contraseñaValida;
    } else {

        echo "Email no registrado";

        return false;

    }

}

if (validarDatos($bd) == true) {

    session_start();

    $_SESSION['login'] = 'administrador';

    header("Location: " . "index.php");
} else {

    echo "error";
}




