<?php

require '../config/connect.php';
require __DIR__ . '/../vendor/autoload.php';


$route = $_GET['route'] ?? 'indexAdmin';

$render = '';

$footer = new \air_de_rien\controller\FooterController();
$header = new \air_de_rien\controller\HeaderController();
$renderFooter = $footer->footerRender();
$renderHeader = $header->headerRender($route);

if ($route == 'indexAdmin') {
    $index = new \air_de_rien\controller\IndexAdminController();
    $footer = new \air_de_rien\controller\FooterController();
    $header = new \air_de_rien\controller\HeaderController();
    $render = $index->pageIndexAdmin();
    $renderFooter = $footer->footerRender();
    $renderHeader = $header->headerRender($route);

}

elseif ($route == 'showPersonnage') {
    $personnage = new \air_de_rien\controller\PersonnageController();
    $render = $personnage->index();
}

elseif ($route == 'addPersonnage') {
    $personnage = new \air_de_rien\controller\PersonnageController();
    $render = $personnage->addPersonnage();

}
elseif ($route == 'updatePersonnage') {
    $personnage = new \air_de_rien\controller\PersonnageController();
    $render = $personnage->updatePersonnage($_GET['id']);
}
elseif ($route == 'deletePersonnage') {
    $personnage = new \air_de_rien\controller\PersonnageController();
    $render = $personnage->deletePersonnage();
}

elseif ($route == 'dateListe') {
    $date = new \air_de_rien\controller\CalendrierController();
    $render = $date->index();
}

elseif ($route == 'addDate') {
    $date = new \air_de_rien\controller\CalendrierController();
    $render = $date->addDate();

}
elseif ($route == 'updateDate') {
    $date = new \air_de_rien\controller\CalendrierController();
    $id = isset($_GET['id']) ? $_GET['id'] : $_POST['id'];
    $render = $date->updateDate($id);
}
elseif ($route == 'deleteDate') {
    $date = new \air_de_rien\controller\CalendrierController();
    $render = $date->deleteDate();
}

elseif ($route == 'compagnie') {
    $date = new \air_de_rien\controller\CompagnieController();
    $render = $date->index();
}
elseif ($route == 'updateCompagnie') {
    $compagnie = new \air_de_rien\controller\CompagnieController();
    $render = $compagnie->updateCompagnie($_GET['id']);
}


echo $renderHeader;
echo $render;
echo $renderFooter;
