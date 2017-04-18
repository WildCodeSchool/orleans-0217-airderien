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

echo $renderHeader;
echo $render;
echo $renderFooter;
