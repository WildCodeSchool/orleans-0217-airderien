<?php

require '../config/connect.php';
require __DIR__ . '/../vendor/autoload.php';


$route = $_GET['route'] ?? 'compagnie';
$title ='';
$render = '';

switch ($route) {

    case 'compagnie':
        $date = new \air_de_rien\controller\CompagnieController();
        $render = $date->index();
        $title = 'La Compagnie';
        break;

    case 'updateCompagnie':
        $compagnie = new \air_de_rien\controller\CompagnieController();
        $render = $compagnie->updateCompagnie($_GET['id']);
        $title = 'La Compagnie';
        break;

    case 'doUpdateCompagnie':
        $compagnie = new \air_de_rien\controller\CompagnieController();
        $render = $compagnie->doUpdateCompagnie();
        $title = 'La Compagnie';
        break;

    case 'showSpectacle':
        $spectacle = new \air_de_rien\controller\SpectacleController;
        $render = $spectacle->index();
        $title = ' Les Spectacles';
        break;

    case 'addSpectacle':
        $spectacle = new \air_de_rien\controller\SpectacleController();
        $render = $spectacle->addSpectacle();
        $title = ' Les Spectacles';
        break;

    case 'updateSpectacle':
        $spectacle = new \air_de_rien\controller\SpectacleController();
        $render = $spectacle->updateSpectacle($_GET['id']);
        $title = ' Les Spectacles';
        break;

    case 'doUpdateSpectacle':
        $spectacle = new \air_de_rien\controller\SpectacleController();
        $render = $spectacle->doUpdateSpectacle();
        $title = ' Les Spectacles';
        break;

    case 'deleteSpectacle':
        $spectacle = new \air_de_rien\controller\SpectacleController();
        $render = $spectacle->deleteSpectacle();
        $title = ' Les Spectacles';
        break;

    case 'showMembre':
        $membre = new \air_de_rien\controller\MembreController();
        $render = $membre->index();
        $title = ' Les Membres';
        break;

    case 'addMembre':
        $membre = new \air_de_rien\controller\MembreController();
        $render = $membre->addMembre();
        $title = ' Les Membres';
        break;

    case 'doUpdateMembre':
        $membre = new \air_de_rien\controller\MembreController();
        $render = $membre->doUpdateMembre();
        $title = ' Les Membres';
        break;

    case 'updateMembre':
        $membre = new \air_de_rien\controller\MembreController();
        $render = $membre->updateMembre($_GET['id']);
        $title = ' Les Membres';
        break;

    case 'deleteMembre':
        $membre = new \air_de_rien\controller\MembreController();
        $render = $membre->deleteMembre();
        $title = ' Les Membres';
        break;

    case 'showPersonnage':
        $personnage = new \air_de_rien\controller\PersonnageController();
        $render = $personnage->index();
        $title = 'Les Personnages';
        break;

    case 'addPersonnage':
        $personnage = new \air_de_rien\controller\PersonnageController();
        $render = $personnage->addPersonnage();
        $title = 'Les Personnages';
        break;

    case 'updatePersonnage':
        $personnage = new \air_de_rien\controller\PersonnageController();
        $render = $personnage->updatePersonnage($_GET['id']);
        $title = 'Les Personnages';
        break;

    case 'doUpdatePersonnage':
        $personnage = new \air_de_rien\controller\PersonnageController();
        $render = $personnage->doUpdatePersonnage();
        $title = 'Les Personnages';
        break;

    case 'deletePersonnage':
        $personnage = new \air_de_rien\controller\PersonnageController();
        $render = $personnage->deletePersonnage();
        $title = 'Les Personnages';
        break;

    case 'showMedia':
        $media = new \air_de_rien\controller\MediaController();
        $render = $media->index();
        $title = 'Les Médias';
        break;

    case 'addMedia':
        $media = new \air_de_rien\controller\MediaController();
        $render = $media->addMedia();
        $title = 'Les Médias';
        break;

    case 'doUpdateMedia':
        $media = new \air_de_rien\controller\MediaController();
        $render = $media->doUpdateMedia();
        $title = 'Les Médias';
        break;

    case 'updateMedia':
        $media = new \air_de_rien\controller\MediaController();
        $render = $media->updateMedia($_GET['id']);
        $title = 'Les Médias';
        break;

    case 'deleteMedia':
        $media = new \air_de_rien\controller\MediaController();
        $render = $media->deleteMedia();
        $title = 'Les Médias';
        break;

    case 'showPresse' :
        $presse = new \air_de_rien\controller\RevueDePresseController();
        $render = $presse->index();
        $title = 'La Presse';
        break;

    case 'addPresse':
        $presse = new \air_de_rien\controller\RevueDePresseController();
        $render = $presse->addPresse();
        $title = 'La Presse';
        break;

    case 'doUpdatePresse':
        $presse = new \air_de_rien\controller\RevueDePresseController();
        $render = $presse->doUpdatePresse();
        $title = 'La Presse';
        break;

    case 'updatePresse':
        $presse = new \air_de_rien\controller\RevueDePresseController();
        $render = $presse->updatePresse($_GET['id']);
        $title = 'La Presse';
        break;

    case 'deletePresse':
        $presse = new \air_de_rien\controller\RevueDePresseController();
        $render = $presse->deletePresse();
        $title = 'La Presse';
        break;

    case 'dateListe':
        $date = new \air_de_rien\controller\CalendrierController();
        $render = $date->index();
        $title = 'Le Calendrier';
        break;

    case 'addDate':
        $date = new \air_de_rien\controller\CalendrierController();
        $render = $date->addDate();
        $title = 'Le Calendrier';
        break;

    case 'updateDate':
        $date = new \air_de_rien\controller\CalendrierController();
        $id = isset($_GET['id']) ? $_GET['id'] : $_POST['id'];
        $render = $date->updateDate($id);
        $title = 'Le Calendrier';
        break;

    case 'deleteDate':
        $date = new \air_de_rien\controller\CalendrierController();
        $render = $date->deleteDate();
        $title = 'Le Calendrier';
        break;

    case 'showPartenaire':
        $partenaire = new \air_de_rien\controller\PartenaireController();
        $render = $partenaire->index();
        $title = 'Les Partenaires';
        break;

    case 'addPartenaire':
        $partenaire = new \air_de_rien\controller\PartenaireController();
        $render = $partenaire->addPartenaire();
        $title = 'Les Partenaires';
        break;

    case 'doUpdatePartenaire':
        $membre = new \air_de_rien\controller\PartenaireController();
        $render = $membre->doUpdatePartenaire();
        $title = 'Les Partenaires';
        break;

    case 'updatePartenaire':
        $partenaire = new \air_de_rien\controller\PartenaireController();
        $render = $partenaire->updatePartenaire($_GET['id']);
        $title = 'Les Partenaires';
        break;

    case 'deletePartenaire':
        $partenaire = new \air_de_rien\controller\PartenaireController();
        $render = $partenaire->deletePartenaire();
        $title = 'Les Partenaires';
        break;
}




$header = new \air_de_rien\controller\HeaderController();
$renderHeader = $header->headerRenderAdmin($title);


echo $renderHeader;
echo $render;

