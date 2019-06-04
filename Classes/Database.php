<?php

/**
 * Cette classe utilise PDO afin d'effectuer des opérations sur la BDD
 */
class Database
{
    /**
     * Instance de PDO
     * @var PDO
     */
    private $pdo;

    public function connect():void
     {

     // connexion à MySQL
     $this->pdo = new PDO (
        'mysql:host=localhost;dbname=mydb',
        'root',
        null,
         [
             PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4"
         ]
     );
    }
    /**
     * Execute la requete SQL fournie et retourne un éventuel tableau
     *
     */

    public function query(string $sql, string $classeName): ?array
    {
        //Execution de la requete
        $result = $this->pdo->query($sql);
        // Récupération des résultats
        return $result->fetchAll(PDO:: FETCH_CLASS, 'produit');
}


}