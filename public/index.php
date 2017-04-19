<?php

require '../config/connect.php';
require __DIR__ . '/../vendor/autoload.php';


$route = $_GET['route'] ?? 'hub';

$render = '';
$renderFooter = '';
$renderHeader = '';


if ($route == 'hub') {
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

elseif ($route == 'compagnie') {
    $compagnie = new \air_de_rien\controller\CompagnieController();
    $footer = new \air_de_rien\controller\FooterController();
    $header = new \air_de_rien\controller\HeaderController();
    $render = $compagnie->pageCompagnie();
    $renderFooter = $footer->footerRender();
    $renderHeader = $header->headerRender($route);

}

elseif ($route == 'mentionsLegales') {
    $mentions = new \air_de_rien\controller\MentionsLegalesController();
    $footer = new \air_de_rien\controller\FooterController();
    $header = new \air_de_rien\controller\HeaderController();
    $render = $mentions->pageMentions();
    $renderFooter = $footer->footerRender();
    $renderHeader = $header->headerRender($route);
}

echo $renderHeader;
echo $render;
echo $renderFooter;



