<?php


namespace Src\Model;


class CDModel extends Model
{
    function addUser($name, $address, $money_id) {
        $sql = 'INSERT INTO `users` (name, address, money_id)
                VALUES (?, ?, ?)';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $address);
        $stmt->bindParam(3, $money_id);
        $stmt->execute();
    }
    function getAll() {
        $sql = 'SELECT users.id, name, address, denominations
                FROM users
                JOIN money ON users.money_id = money.id
                ORDER BY id;';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}