<?php


namespace air_de_rien\controller;

use air_de_rien\DB;
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
        $personnages = $requete-> findAll('personnage');
        $personnage = new Personnage();
        return $this->render('admin/PersonnageView.php', ['personnages'=>$personnages,'personnage'=>$personnage,'typeAction'=>'add',
                                                              'form'=>$form]);
    }

    public function addPersonnage()
    {
        $form = new PersonnageForm();
        $filter = new PersonnageFilter();
        $form->setInputFilter($filter);

        $requete = new PersonnageRequete();

        if (!empty($_POST)) {
            foreach ($_POST as $key => $val) {
                $postClean[$key] = htmlentities(trim($val));
            }
            $requete->addPersonnage($postClean);
            header('Location:index.php?route=showPersonnage');
        }

        $personnages = $requete->findAll('personnage');
        $personnage = new Personnage();

        return $this->render('admin/PersonnageView.php', ['personnages'=>$personnages,
                                                          'form'=>$form,
                                                          'personnage'=>$personnage,
                                                          'typeAction'=>'add'
        ]);
    }

    public function deletePersonnage()
    {
        $del = new PersonnageRequete();
        $del->deletePersonnage();
        header('Location:index.php?route=showPersonnage');
    }

    public function updatePersonnage($id)
    {
            $form = new PersonnageForm();
            $filter = new PersonnageFilter();
            $form->setInputFilter($filter);

            $requete = new PersonnageRequete();
            if (!empty($_POST)) {
                foreach ($_POST as $key => $val) {
                    $postClean[$key] = htmlentities(trim($val));
                }
                $requete->updatePersonnage($postClean);
               header('Location:index.php?route=showPersonnage');
            }

            $personnages = $requete->findAll('personnage');
            $personnage = $requete->findOne('personnage', $id);

            return $this->render('admin/PersonnageView.php', ['personnages'=>$personnages,
                                                                  'form'=>$form,
                                                                  'personnage'=>$personnage,
                                                                'typeAction'=>'update'
                                                                    ]);
    }



}