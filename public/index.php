<?php

require '../config/connect.php';
require __DIR__ . '/../vendor/autoload.php';

$route = $_GET['route'] ?? 'Hub';
$render = '';
$renderFooter = '';
$renderHeader = '';

if ($route == 'listSpectacle') {
$spectacle = new \air_de_rien\controller\SpectacleController();
$render = $spectacle->listAll();

}

elseif ($route == 'Hub') {
    $hub = new \air_de_rien\controller\HubController();
    $render = $hub->hubRender();

}

elseif ($route == 'Spectacle') {
    $spectacle = new \air_de_rien\controller\ShowController();
    $footer = new \air_de_rien\controller\FooterController();
    $header = new \air_de_rien\controller\HeaderController();
    $render = $spectacle->showSpectacle($_GET['id']) ;
    $renderFooter = $footer->footerRender();
    $renderHeader = $header->headerRender();

}
elseif ($route == 'Compagnie') {
    $compagnie = new \air_de_rien\controller\CompagnieController();
    $footer = new \air_de_rien\controller\FooterController();
    $header = new \air_de_rien\controller\HeaderController();
    $render = $compagnie->pageCompagnie();
    $renderFooter = $footer->footerRender();
    $renderHeader = $header->headerRender();

}

echo $renderHeader;
echo $render;
echo $renderFooter;



