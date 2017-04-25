<?php

require '../config/connect.php';
require __DIR__ . '/../vendor/autoload.php';


$route = $_GET['route'] ?? 'indexAdmin';

$render = '';

$header = new \air_de_rien\controller\HeaderController();
$renderHeader = $header->headerRenderAdmin($route);

if ($route == 'indexAdmin') {
    $index = new \air_de_rien\controller\IndexAdminController();
    $render = $index->pageIndexAdmin();

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
elseif ($route == 'doUpdatePersonnage') {
    $personnage = new \air_de_rien\controller\PersonnageController();
    $render = $personnage->doUpdatePersonnage();
}
elseif ($route == 'deletePersonnage') {
    $personnage = new \air_de_rien\controller\PersonnageController();
    $render = $personnage->deletePersonnage();
}

elseif ($route == 'showSpectacle') {
    $spectacle = new \air_de_rien\controller\SpectacleController;
    $render = $spectacle->index();
}
elseif ($route == 'choixSpectacle') {
    $spectacle = new \air_de_rien\controller\SpectacleController;
    $render = $spectacle->choixSpectacle($_GET['id']);
}
elseif ($route == 'addSpectacle') {
    $spectacle = new \air_de_rien\controller\SpectacleController();
    $render = $spectacle->addSpectacle();

}
elseif ($route == 'updateSpectacle') {
    $spectacle = new \air_de_rien\controller\SpectacleController();
    $render = $spectacle->updateSpectacle($_GET['id']);
}
elseif ($route == 'doUpdateSpectacle') {
    $spectacle = new \air_de_rien\controller\SpectacleController();
    $render = $spectacle->doUpdateSpectacle();
}
elseif ($route == 'deleteSpectacle') {
    $spectacle = new \air_de_rien\controller\SpectacleController();
    $render = $spectacle->deleteSpectacle();
}

elseif ($route == 'showMembre') {
    $membre = new \air_de_rien\controller\MembreController();
    $render = $membre->index();
}
elseif ($route == 'addMembre') {
    $membre = new \air_de_rien\controller\MembreController();
    $render = $membre->addMembre();
}
elseif ($route == 'doUpdateMembre') {
    $membre = new \air_de_rien\controller\MembreController();
    $render = $membre->doUpdateMembre();
}
elseif ($route == 'updateMembre') {
    $membre = new \air_de_rien\controller\MembreController();
    $render = $membre->updateMembre($_GET['id']);
}
elseif ($route == 'deleteMembre') {
    $membre = new \air_de_rien\controller\MembreController();
    $render = $membre->deleteMembre();
}

elseif ($route == 'showPartenaire') {
    $partenaire = new \air_de_rien\controller\PartenaireController();
    $render = $partenaire->index();
}

elseif ($route == 'addPartenaire') {
    $partenaire = new \air_de_rien\controller\PartenaireController();
    $render = $partenaire->addPartenaire();

}
elseif ($route == 'updatePartenaire') {
    $partenaire = new \air_de_rien\controller\PartenaireController();
    $render = $partenaire->updatePartenaire($_GET['id']);
}
elseif ($route == 'deletePartenaire') {
    $partenaire = new \air_de_rien\controller\PartenaireController();
    $render = $partenaire->deletePartenaire();

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

