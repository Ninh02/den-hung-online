<?php


namespace Src\Controller;


use Src\Model\MoneyModel;

class MoneyController
{
    public $moneyModel;
    public function __construct()
    {
        $this->moneyModel = new MoneyModel();
    }

    public function getAllMoney() {
        return $this->moneyModel->getAll();
    }
}