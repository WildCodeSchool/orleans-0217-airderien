<?php


namespace air_de_rien\controller;


use air_de_rien\model\DB;
use air_de_rien\form\PartenaireFilter;
use air_de_rien\form\PartenaireForm;
use air_de_rien\model\Partenaire;
use air_de_rien\model\PartenaireRequete;


class PartenaireController extends Controller
{
    /**
     * récupération de tous les spectacles
     * @return string
     */
    public function listAll()
    {
        $db = new DB();
        $partenaires = $db -> findAll('partenaire');
        return $this->getTwig()
            ->render('admin/partenaireView.html.twig', ['partenaires'=>$partenaires]);
    }


    public function index()
    {
        $form = new PartenaireForm();
        $filter = new PartenaireFilter();
        $form->setInputFilter($filter);

        $requete = new PartenaireRequete();


        $partenaires = $requete-> findAll('partenaire');
        $partenaire = new Partenaire();


        return $this->getTwig()
            ->render('admin/PartenaireView.html.twig',
            ['partenaires'=>$partenaires,
            'partenaire'=>$partenaire,
            'typeAction'=>'add',
            'titreButton'=>'Ajouter',
            'form'=>$form]);
    }

    public function addPartenaire()
    {
        $form = new PartenaireForm();
        $filter = new PartenaireFilter();
        $form->setInputFilter($filter);

        $requete = new PartenaireRequete();


//        if ($form->isValid()) {
            if (!empty($_POST)) {
                foreach ($_POST as $key => $val) {
                    $postClean[$key] = htmlentities(trim($val));
                }
                $requete->addPartenaire($postClean);
                header('Location:admin.php?route=showPartenaire');
            }
//        }

        $partenaires = $requete->findAll('partenaire');
        $partenaire = new Partenaire();


        return $this->getTwig()
        ->render('admin/PartenaireView.html.twig',
            ['partenaires'=>$partenaires,
            'form'=>$form,
            'partenaire'=>$partenaire,
            'titreButton'=>'Ajouter',
            'typeAction'=>'add'
        ]);
    }

    public function deletePartenaire()
    {
        $del = new PartenaireRequete();
        $del->deletePartenaire();
        header('Location:admin.php?route=showPartenaire');
    }

    public function updatePartenaire($id)
    {
        $form = new PartenaireForm();
        $filter = new PartenaireFilter();
        $form->setInputFilter($filter);

        $requete = new PartenaireRequete();


//        if ($form->isValid()) {
            if (!empty($_POST)) {
                foreach ($_POST as $key => $val) {
                    $postClean[$key] = htmlentities(trim($val));
                }
                $requete->updatePartenaire($postClean);
                header('Location:admin.php?route=showPartenaire');
            }
//        }

        $partenaires = $requete->findAll('partenaire');
        $partenaire = $requete->findOne('partenaire', $id);


        return $this->getTwig()
        ->render('admin/PartenaireView.html.twig',
            ['partenaires'=>$partenaires,
            'form'=>$form,
            'partenaire'=>$partenaire,
            'titreButton'=>'Modifier',
            'typeAction'=>'update'
            ]);
    }



}