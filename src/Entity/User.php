<?php

class User

{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;

    /*
     * Initialisation des propriètés de l'utilisateur à la construcion de l'objet
     * @param string $username
     * @param $email
     * @param $password
     */

    public function __construct(string $name, string $email, string $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->setPassword($password);
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->name;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }


    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }


    /**
     * Ajoute et hash le mot de passe
     * @param string $password
     */

    public function setPassword(string $password): void
    {
        //Hashage
        $hash=password_hash($password, PASSWORD_BCRYPT);
        //stockage
        $this->password = $hash;
    }

    public function getStrParamSQL()
    {
        //On crée un tableau avec les 3 propriètés
        $tab = [
            $this->name, $this->email, $this->password];
        //On crée une chaîne de caractère séparés de virgule et les quotes simples
        $str = implode("','", $tab);
        // On a rajouté une quote simple auu début et une à la fin
        //On retourne l'ensemble
        return"'" . $str . "'";
    }


}















