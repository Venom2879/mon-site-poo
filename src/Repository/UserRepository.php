<?php

namespace App\Repository;

use App\Core\Database;

class UserRepository
{
    private Database $db;
    public function __construct()
    {
        $this->db = new Database();
    }



    public function findAll(): array
    {
        $query = $this->db->prepare("SELECT * FROM user");//requete
        $query->execute();//execute

        return $query->fetchAll();
    }
}
