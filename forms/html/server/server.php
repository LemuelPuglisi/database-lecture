<?php

function doPasswordMatch($password, $confirmPassword) {
    return $password === $confirmPassword;
}

if (isset($_GET['email']) && (isset($_GET['password']))) {
    
    if (doPasswordMatch($_GET['password'], $_GET['confirm_password'])) {
        echo "Le password coincidono!";
        echo "Utente registrato tramite richiesta GET!<br>";
        echo "Email: " . $_GET['email'] . "<br>";

    } else {
        echo "Le password non coincidono!";
    }
}

if (isset($_POST['email']) && (isset($_POST['password']))) {
    if (doPasswordMatch($_POST['password'], $_POST['confirm_password'])) {
        echo "Le password coincidono!";
        echo "Utente registrato tramite richiesta GET!<br>";
        echo "Email: " . $_POST['email'] . "<br>";

    } else {
        echo "Le password non coincidono!";
    }
}