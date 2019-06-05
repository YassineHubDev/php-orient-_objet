<?php
require dirname(__DIR__, 2) . '/autoload.php';
require dirname(__DIR__) . '/functions/FormValidator.php';


// Vérification formulaire + inscription de l'utilisateur en BDD

if ($_SERVER ['REQUEST_METHOD'] === 'POST') {

    $errorMessageUserName = FormValidator::checkPostText('name', 255);
    $errorMessageEmail = FormValidator::checkPostText('email', 200);
    $errorMessagePassword = FormValidator::checkPostText('password', 128);

    if (empty($errorMessageUserName) &&
    empty($errorMessageEmail) &&
    empty($errorMessagePassword)
    ) {
        //Il n'y a pas d'erreur, on passe à l'inscription
        $database = new Database();
        $database->connect();

        //On crée un utilisateur en local
        $user= new User($_POST['name'], $_POST['email'],$_POST['password']);
        $retour = $user->getStrParamSQL();


        $query = "INSERT INTO app_user (username, email, password) VALUES (".$user->getStrParamSql() . ")";
        $success = $database->exec($query);
    } else {
        var_dump("Problème");
    }
}














