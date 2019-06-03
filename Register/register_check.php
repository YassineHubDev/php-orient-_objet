<?php

require 'form_function.php';

// Vérification formulaire + inscription de l'utilisateur en BDD

if ($_SERVER ['REQUEST_METHOD'] === 'POST') {

    $errorMessageUserName = checkPostText('username', 255);
    $errorMessageEmail = checkPostText('email', 200);
    $errorMessagePassword = checkPostText('password', 128);

    if (empty($errorMessageUserName) &&
    empty($errorMessageEmail) &&
    empty($errorMessagePassword)
    ) {
        //Il n'y a pas d'erreur, on passe à l'inscription
        var_dump("On peut inscrire l'utilisateur");
    } else {
        var_dump("problème !");
    }
}
