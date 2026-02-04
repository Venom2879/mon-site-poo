<?php

namespace App\Core;

use PDO;
use PDOException;

class Database extends PDO
{

    public function __construct()
    {
        $user = 'vnm';
        $password = 'venom';
        $dbName = 'php_poo';
        $host = '127.0.0.1'; //localhost
        $port = 3306;

        $dsn = "mysql:host=$host;port=$port;dbname=$dbName";

        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Affiche les erreurs correctement
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // fetch() renvoie un tableau associatif
            PDO::ATTR_EMULATE_PREPARES => false, // plus sécurisé
        ];

        try {
            // Appelle le constructeur de PDO (donc connexion)
            parent::__construct($dsn, $user, $password, $options);
        } catch (PDOException $error) {
            // Si la connexion échoue, on affiche un message propre
            // (En production on évite d’afficher l’erreur exacte)
            die("Erreur de connexion à la base de données : " . $error->getMessage());

        }
    }

}
