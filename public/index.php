<?php

require '../config/connect.php';
require __DIR__ . '/../vendor/autoload.php';


$route = $_GET['route'] ?? 'hub';

$render = '';
$renderFooter = '';
$renderHeader = '';


if ($route == 'listSpectacle') {
$spectacle = new \air_de_rien\controller\SpectacleController();
$render = $spectacle->listAll();

}

elseif ($route == 'hub') {
    $hub = new \air_de_rien\controller\HubController();
    $render = $hub->hubRender();

}

elseif ($route == 'spectacle') {
    $spectacle = new \air_de_rien\controller\ShowController();
    $footer = new \air_de_rien\controller\FooterController();
    $header = new \air_de_rien\controller\HeaderController();
    $render = $spectacle->showSpectacle($_GET['id']);
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
elseif ($route == 'compagnie') {
    $compagnie = new \air_de_rien\controller\CompagnieController();
    $footer = new \air_de_rien\controller\FooterController();
    $header = new \air_de_rien\controller\HeaderController();
    $render = $compagnie->pageCompagnie();
    $renderFooter = $footer->footerRender();
    $renderHeader = $header->headerRender($route);

}

echo $renderHeader;
echo $render;
echo $renderFooter;



