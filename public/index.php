<?php

require '../config/connect.php';
require __DIR__ . '/../vendor/autoload.php';

$route = $_GET['route'] ?? 'test';
$render = '';



if ($route == 'test') {
    $compagnie = new \air_de_rien\controller\CompagnieController();
    $render = $compagnie->listAll();

}
//} elseif ($route == 'showEleve') {
//$eleve = new \air_de_rien\controller\EleveController();
//$render = $eleve->show($_GET['id']);
//
//} elseif ($route == 'addEleve') {
//$eleve = new \air_de_rien\controller\EleveController();
//$render = $eleve->add();
//}


require '../src/view/headerV2.html';
echo $render;
require '../src/view/footerV2.html';




