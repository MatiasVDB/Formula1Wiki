<?php

session_start();

if(isset($_SESSION['login']) and isset($_COOKIE['name']) and isset($_COOKIE['surname'])){

    unset($_SESSION['login']);

    unset($_COOKIE['name']);

    setcookie('name', null, -1);

    unset($_COOKIE['surname']);

    setcookie('surname', null, -1);
}

else{

    echo "sin sesion";
}

header("Location: "."index.php");