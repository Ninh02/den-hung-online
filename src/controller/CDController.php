<?php


namespace Src\Controller;


use Src\Model\CDModel;

class CDController
{
    public $model;

    public function __construct()
    {
        $this->model = new CDModel();
    }
    public function addUserCTL($name, $address, $money_id) {
        $this->model->addUser($name, $address, $money_id);
        echo "<script>
                alert('Đã công đức');
                window.history.back();
              </script>";
    }
    public function getAllUser() {
        $data = $this->model->getAll();
        include_once 'view/ds_cong_duc.php';
    }
}