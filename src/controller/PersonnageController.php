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
        return $this->render('admin/PersonnageView.php', ['personnages'=>$personnages,
                                                              'form'=>$form]);
    }

    public function add()
    {
        $add = new PersonnageRequete();
        $add->addOrUpdate();
        return $this->index();
    }
    public function deletePersonnage()
    {
        $del = new PersonnageRequete();
        $del->deletePersonnage();
        return $this->index();
    }
    public function updatePersonnage()
    {
        if (isset($_POST['id'])) {
            $form = new PersonnageForm();
            $filter = new PersonnageFilter();
            $form->setInputFilter($filter);

            $requete = new PersonnageRequete();

            $personnages = $requete->findAll('personnage');
            $value = $requete->findOne('personnage', $_POST['id']);

            return $this->render('admin/PersonnageView.php', ['personnages'=>$personnages,
                                                                  'form'=>$form,
                                                                  'value'=>$value,

                                                                    ]);
        }
    }

}