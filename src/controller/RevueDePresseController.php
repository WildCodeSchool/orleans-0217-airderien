<?php


namespace air_de_rien\controller;

use air_de_rien\model\DB;
use air_de_rien\form\RevueDePresseFilter;
use air_de_rien\form\RevueDePresseForm;
use air_de_rien\model\RevueDePresse;
use air_de_rien\model\RevueDePresseRequete;

class RevueDePresseController extends Controller
{
    public function index()
    {
        $form = new RevueDePresseForm();
        $filter = new RevueDePresseFilter();
        $form->setInputFilter($filter);

        $requete = new RevueDePresseRequete();
        $db = new DB();

        $presses = $requete->findAll('revueDePresse');
        $presse = new RevueDePresse();
        $spectacles = $db->findAll('spectacle');

        return $this->getTwig()
            ->render('admin/RevueDePresseView.html.twig',
                ['presses' => $presses,
                    'presse' => $presse,
                    'spectacles' => $spectacles,
                    'typeAction' => 'add',
                    'titreButton' => 'Ajouter',
                    'form' => $form]);
    }

    public function addPresse()
    {
        $form = new RevueDePresseForm();
        $filter = new RevueDePresseFilter();
        $form->setInputFilter($filter);

        $requete = new RevueDePresseRequete();
        $db = new DB();


        if (!empty($_POST)) {
            foreach ($_POST as $key => $val) {
                $postClean[$key] = trim($val);
            }

            $requete->addPresse($postClean);
            header('Location:admin.php?route=showPresse');
        }

        $presses = $requete->findAll('revueDePresse');
        $presse = new RevueDePresse();
        $spectacles = $db->findAll('spectacle');

        return $this->getTwig()
            ->render('admin/RevueDePresseView.html.twig',
                ['presses' => $presses,
                    'form' => $form,
                    'presse' => $presse,
                    'spectacles' => $spectacles,
                    'titreButton' => 'Ajouter',
                    'typeAction' => 'add'
                ]);
    }

    public function deletePresse()
    {
        $del = new RevueDePresseRequete();
        $del->deletePresse();
        header('Location:admin.php?route=showPresse');
    }

    public function doUpdatePresse()
    {
        $requete = new RevueDePresseRequete();
        if (!empty($_POST)) {
            foreach ($_POST as $key => $val) {
                $postClean[$key] = trim($val);
            }
            if (!isset($postClean['afficher'])) $postClean['afficher'] = 0;
            $requete->updatePresse($postClean);
            header('Location:admin.php?route=showPresse');
        }
    }


    public function updatePresse($id)
    {
        $form = new RevueDePresseForm();
        $filter = new RevueDePresseFilter();
        $form->setInputFilter($filter);

        $requete = new RevueDePresseRequete();
        $db = new DB();

        $check='';
        $presses = $requete->findAll('revueDePresse');
        $presse = $requete->findOne('revueDePresse', $id);
        $spectacles = $db->findAll('spectacle');
        $membres = $db->findAll('membre');

        if ($_GET['afficher'] == '1'){
            $check ='checked="checked"';
        }


        return $this->getTwig()
            ->render('admin/RevueDePresseView.html.twig',
                ['presses' => $presses,
                    'form' => $form,
                    'presse' => $presse,
                    'spectacles' => $spectacles,
                    'checked'=>$check,
                    'membres' => $membres,
                    'titreButton' => 'Modifier',
                    'typeAction' => 'doUpdate'
                ]);
    }

}