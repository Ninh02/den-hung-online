<?php


namespace Src\Model;


class MoneyModel extends Model
{
    function getAll() {
        $sql = 'SELECT id, denominations
                FROM money;';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}