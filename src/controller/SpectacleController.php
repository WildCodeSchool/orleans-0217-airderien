<?php
/**
 * Created by PhpStorm.
 * User: wilder8
 * Date: 05/04/17
 * Time: 17:39
 */

namespace air_de_rien\controller;

use air_de_rien\DB;
use air_de_rien\Form\SpectacleForm;
use air_de_rien\Form\SpectacleFilter;

/**
 * Class SpectacleControleur
 * @package aire_de_rien\controller
 */
class SpectacleController extends Controller
{
    /*
     * récuoération de tous les spectacles et affichage
     * @return string
     */
    public function listAll()
    {
        // connection à la bdd
        $db = new DB();
        // requette sql pour récupérer tous les élèves dans un tableau d'objet Spectacle
        $spectacles = $db -> findAll('spectace');
        // affichage de la vue HTML
        return $this ->render('spectacle\listAllSpectacle.php',['spectacles'=>$spectacles]);
    }

    public function show($id)
    {
        $db = new DB();
        $spectacle = $db -> findone('spectacle',$id);
        return $this->render('spectale/showSpectacle.php',['spectacle]'=>$spectacle]);
    }
    public function add()
    {
        $form = new SpectacleForm();

        if (isset($_POST['Valider'])) {
            $filter = new SpectacleFilter();
            $form->setInputFilter($filter);
            $form->setData($_POST);

            if ($form->isValid()) {
                echo 'Le Spectacle est validé';
            }
        }
        return $this->render('spectacle/addSpectacle.php',['form'=>$form]);
    }

}