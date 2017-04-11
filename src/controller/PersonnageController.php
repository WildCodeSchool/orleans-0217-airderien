<?php


namespace air_de_rien\controller;

use air_de_rien\model\DB;

class PersonnageController extends Controller
{
    /**
     * récupération de tous les personnages et affichage sur une page sous forme de vignettes
     * @return string
     */
    public function listAll()
    {
        // connection à la bdd
        $db = new DB();
        // requete sql pour récupérer tous les personnages dans un tableau d'objets Personnage
        $personnages = $db -> findAll('personnage');
        // affichage de la vue HTML
        return $this->render('personnage/personnageView.php', ['personnages'=>$personnages]);
    }
}