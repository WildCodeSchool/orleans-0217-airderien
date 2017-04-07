<?php

require '../config/connect.php';
require __DIR__ . '/../vendor/autoload.php';

$route = $_GET['route'] ?? 'listSpectacle' ?? 'test';
$render = '';

if ($route == 'listSpectacle') {
$spectacle = new \air_de_rien\controller\SpectacleController();
$render = $spectacle->listAll();

}
elseif ($route == 'showSpectacle') {
$spectacle = new \air_de_rien\controller\ShowController();
$render = $spectacle->showSpectacle($_GET['id']) ;

}
elseif ($route == 'test') {
    $compagnie = new \air_de_rien\controller\CompagnieController();
    $render = $compagnie->listAll();

}




require '../src/view/headerV2.html';

require '../src/view/header.php';

echo $render;
require '../src/view/footerV2.html';




