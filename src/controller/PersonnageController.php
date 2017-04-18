<?php


namespace air_de_rien\controller;


use air_de_rien\model\DB;
use air_de_rien\form\PersonnageFilter;
use air_de_rien\form\PersonnageForm;
use air_de_rien\model\Personnage;
use air_de_rien\model\PersonnageRequete;


class PersonnageController extends Controller
{
    /**
     * récupération de tous les personnages
     * @return string
     */
    public function listAll()
    {
        $db = new DB();
        $personnages = $db -> findAll('personnage');
        return $this->render('admin/personnageView.php', ['personnages'=>$personnages]);
    }


    public function index()
    {
        $form = new PersonnageForm();
        $filter = new PersonnageFilter();
        $form->setInputFilter($filter);

        $requete = new PersonnageRequete();
        $db = new DB();

        $personnages = $requete-> findAll('personnage');
        $personnage = new Personnage();
        $spectacles = $db -> findAll('spectacle');
        $membres = $db -> findAll('membre');

        return $this->render('admin/PersonnageView.php',
            ['personnages'=>$personnages,
            'personnage'=>$personnage,
            'spectacles'=>$spectacles,
            'membres'=>$membres,
            'typeAction'=>'add',
            'form'=>$form]);
    }

    public function addPersonnage()
    {
        $form = new PersonnageForm();
        $filter = new PersonnageFilter();
        $form->setInputFilter($filter);

        $requete = new PersonnageRequete();
        $db = new DB();

//        if ($form->isValid()) {
            if (!empty($_POST)) {
                foreach ($_POST as $key => $val) {
                    $postClean[$key] = htmlentities(trim($val));
                }
                $requete->addPersonnage($postClean);
                header('Location:admin.php?route=showPersonnage');
            }
//        }

        $personnages = $requete->findAll('personnage');
        $personnage = new Personnage();
        $spectacles = $db -> findAll('spectacle');
        $membres = $db -> findAll('membre');

        return $this->render('admin/PersonnageView.php',
            ['personnages'=>$personnages,
            'form'=>$form,
            'personnage'=>$personnage,
            'spectacles'=>$spectacles,
            'membres'=>$membres,
            'typeAction'=>'add'
        ]);
    }

    public function deletePersonnage()
    {
        $del = new PersonnageRequete();
        $del->deletePersonnage();
        header('Location:admin.php?route=showPersonnage');
    }

    public function updatePersonnage($id)
    {
        $form = new PersonnageForm();
        $filter = new PersonnageFilter();
        $form->setInputFilter($filter);

        $requete = new PersonnageRequete();
        $db = new DB();

//        if ($form->isValid()) {
            if (!empty($_POST)) {
                foreach ($_POST as $key => $val) {
                    $postClean[$key] = htmlentities(trim($val));
                }
                $requete->updatePersonnage($postClean);
                header('Location:admin.php?route=showPersonnage');
            }
//        }

        $personnages = $requete->findAll('personnage');
        $personnage = $requete->findOne('personnage', $id);
        $spectacles = $db -> findAll('spectacle');
        $membres = $db -> findAll('membre');

        return $this->render('admin/PersonnageView.php',
            ['personnages'=>$personnages,
            'form'=>$form,
            'personnage'=>$personnage,
            'spectacles'=>$spectacles,
            'membres'=>$membres,
            'typeAction'=>'update'
            ]);
    }



}