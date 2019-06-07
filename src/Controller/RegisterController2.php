<?php

namespace src\Controller;


use src\Entity\User;
use src\Utilities\Database;
use src\Utilities\FormValidator;

class RegisterController2

{
    /**
     *Vérification formulaire + inscription de l'utilisateur en BDD
     * @return array
     */
    public function register(): array
    {

// Vérification formulaire + inscription de l'utilisateur en BDD
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $errorMessageUsername = FormValidator::checkPostText('name', 128);
            $errorMessageEmail = FormValidator::checkPostText('email', 255);
            $errorMessagePassword = FormValidator::checkPostText('password', 128);
            if (empty($errorMessageUsername) &&
                empty($errorMessageEmail) &&
                empty($errorMessagePassword)
            ) {
                // Il n'y a pas d'erreur, on passe à l'inscription
                $database = new Database();
                // $database->connect(); appelé directement dans le constructeur
                // On crée un utilisateur en local
                $user = new User($_POST['name'], $_POST['email'], $_POST['password']);
                $query = "INSERT INTO app_user (username, email, password) VALUES (" .
                    $user->getStrParamsSQL() .
                    ")";

                try {
                    //On essaye d'insérer en BDD
                    $success = $database->exec($query);
                } catch (\PDOException $e) {
                    //Une exception PDO est arrivée, on récupère son code
                    $code = $e->getCode();
                    //Le code 23000 = email unique
                    if ($code === '23000') {
                        //On affiche un message d'erreur
                        $errorMessageEmail = 'Email déjà utilisé';
                    } else {
                        //Si on ne sait pas comment gérer, on provoque une exeption
                        throw new \Exception('PDOException dans RegisterController2');
                    }
                }


            }
        }
        return compact('errorMessageUsername', 'errorMessageEmail', 'errorMessagePassword', 'success', 'user');

    }
}