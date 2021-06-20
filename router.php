<?php

use Src\Controller\CDController;
use Src\Controller\CongDuc;
use Src\Controller\DenGieng;
use Src\Controller\DenHa;
use Src\Controller\DenThuong;
use Src\Controller\DenTrung;
use Src\Controller\HomeController;
use Src\Controller\MoneyController;

$page = $_REQUEST['page'] ?? '';
$action = $_REQUEST['action'] ?? '';

switch ($page) {
    case 'den_ha':
        $denHa = new DenHa();
        $denHa->show();
        congDuc($action);
        break;
    case 'den_trung':
        $denTrung = new DenTrung();
        $denTrung->show();
        congDuc($action);
        break;
    case 'den_thuong':
        $denThuong = new DenThuong();
        $denThuong->show();
        congDuc($action);
        break;
    case 'den_gieng':
        $denGieng = new DenGieng();
        $denGieng->show();
        congDuc($action);
        break;
    case 'cong_duc':
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_REQUEST['userName'];
            $address = $_REQUEST['address'];
            $money_id = $_REQUEST['money'];
            $cDController = new CDController();
            $cDController->addUserCTL($name, $address, $money_id);
        }
        break;
    case 'ds_cong_duc':
        $cDController = new CDController();
        $data = $cDController->getAllUser();
        break;
    default:
        $homeController = new HomeController();
        $homeController->show();
        break;
}
function congDuc($action)
{
    switch ($action) {
        case 'cong_duc':
            $congDuc = new CongDuc();
            $congDuc->show();
            break;
    }
}

