<?php

require '../autoload.php';
require 'form_function.php';

// Vérification formulaire + inscription de l'utilisateur en BDD

if ($_SERVER ['REQUEST_METHOD'] === 'POST') {

    $errorMessageUserName = checkPostText('name', 255);
    $errorMessageEmail = checkPostText('email', 200);
    $errorMessagePassword = checkPostText('password', 128);

    if (empty($errorMessageUserName) &&
    empty($errorMessageEmail) &&
    empty($errorMessagePassword)
    ) {
        //Il n'y a pas d'erreur, on passe à l'inscription
        $database = new Database();
        $database->connect();

        //On crée un utilisateur en local
        $user= new User();
        $user->setUsername($_POST['name']);
        $user->setEmail($_POST['email']);
        $user->setPassword($_POST['password']);

        var_dump($user);

        die('debug user');

        $query = "INSERT INTO app_user (username, email, password) VALUES (".$user->getStrParamSql() . ")";
        $success = $database->exec($query);
    } else {
        var_dump("Problème");
    }
}
