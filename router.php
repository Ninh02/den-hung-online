<?php

use Src\Controller\DenHa;
use Src\Controller\HomeController;

$page = $_REQUEST['page'] ?? '';
$action = $_REQUEST['action'] ?? '';

switch ($page) {
    case 'den_ha':
        $denHa = new DenHa();
        $denHa->show();
        break;
    default:
        $homeController = new HomeController();
        $homeController->show();
        break;
}
