<?php

namespace App\Repository;

use App\Core\Database;

class ProductRepository
{
    private Database $db;

    public function __construct()
    {
        $this->db = new Database();

    }
}
