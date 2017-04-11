<?php

namespace air_de_rien\controller;

use air_de_rien\model\DB;

class SpectacleController extends Controller
{
    /**
     * récupération de tous les spectacles et affichage sur une page sous forme de vignettes
     * @return string
     */
    public function listAll()
    {
        // connection à la bdd
        $db = new DB();
        // requete sql pour récupérer tous les spectacles dans un tableau d'objets Spectacle
        $spectacles = $db -> findAll('viewSite');
        // affichage de la vue HTML
        return $this->render('viewSite/spectacleView.html.twig', ['spectacles'=>$spectacles]);
    }

    /**
     * récupération de viewSite correspondant à l'id $id et affichage des informations de ce viewSite uniquement
     * @param $id
     * @return string
     */
    public function show($id)
    {
        $db = new DB();
        $spectacle = $db -> findOne('viewSite', $id);
        return $this->render('viewSite/spectacleView.html.twig', ['viewSite'=>$spectacle]);

    }
}