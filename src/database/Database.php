<?php

namespace Src\Database;

use PDO;
use PDOException;

class database
{
    protected $dsn;
    protected $username;
    protected $password;

    public function __construct()
    {
        $this->dsn = 'mysql:host=localhost;dbname=den_hung_online';
        $this->username = 'root';
        $this->password = 'mAymaydau';
    }

    public function connect()
    {
        try {
            return new PDO($this->dsn, $this->username, $this->password);
        } catch (PDOException $PDOException) {
            echo 'Ket noi CSDL bi loi';
            die();
        }
    }
}