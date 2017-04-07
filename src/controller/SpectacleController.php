<?php

namespace air_de_rien\controller;

use air_de_rien\DB;

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
        $spectacles = $db -> findAll('spectacle');
        // affichage de la vue HTML
        return $this->render('spectacle/spectacleView.php', ['spectacles'=>$spectacles]);
    }

    /**
     * récupération de spectacle correspondant à l'id $id et affichage des informations de ce spectacle uniquement
     * @param $id
     * @return string
     */
    public function show($id)
    {
        $db = new DB();
        $spectacle = $db -> findOne('spectacle', $id);
        return $this->render('spectacle/spectacleView.php', ['spectacle'=>$spectacle]);

    }
}