<?php

namespace Src\Model;

use Src\Database\database;

class model
{
    protected $pdo;

    public function __construct()
    {
        $db = new database();
        $this->pdo = $db->connect();
    }
}