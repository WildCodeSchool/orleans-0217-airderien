<?php

require '../config/connect.php';
require __DIR__ . '/../vendor/autoload.php';

$route = $_GET['route'] ?? 'listEleve';
$render = '';

if ($route == 'listEleve') {
$eleve = new \air_de_rien\controller\EleveController();
$render = $eleve->listAll();

} elseif ($route == 'showEleve') {
$eleve = new \air_de_rien\controller\EleveController();
$render = $eleve->show($_GET['id']);

} elseif ($route == 'addEleve') {
$eleve = new \air_de_rien\controller\EleveController();
$render = $eleve->add();
}



echo $render;
require '../src/view/footer.php';
