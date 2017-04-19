<?php

namespace air_de_rien\controller;

use air_de_rien\model\DB;
use air_de_rien\form\SpectacleFilter;
use air_de_rien\form\SpectacleForm;
use air_de_rien\model\Spectacle;
use air_de_rien\model\SpectacleRequete;

class SpectacleController extends Controller
{

    public function listAll()
    {
        $db = new DB();
        $spectacles = $db -> findAll('spectacle');
        return $this->getTwig()
            ->render('admin/spectacleView.html.twig', ['spectacles'=>$spectacles]);
    }

    /**
     * récupération de viewSite correspondant à l'id $id et affichage des informations de ce viewSite uniquement
     * @param $id
     * @return string
     */
        public function index()
    {
        $form = new SpectacleForm();
        $filter = new SpectacleFilter();
        $form->setInputFilter($filter);

        $requete = new SpectacleRequete();


        $spectacles = $requete-> findAll('spectacle');
        $spectacle = new Spectacle();


        return $this->getTwig()
            ->render('admin/SpectacleView.html.twig',
                ['spectacles'=>$spectacles,
                    'spectacle'=>$spectacle,
                    'typeAction'=>'add',
                    'titreButton'=>'Ajouter',
                    'form'=>$form]);
    }

        public function addSpectacle()
    {
        $form = new SpectacleForm();
        $filter = new SpectacleFilter();
        $form->setInputFilter($filter);

        $requete = new SpectacleRequete();


//        if ($form->isValid()) {
        if (!empty($_POST)) {
            foreach ($_POST as $key => $val) {
                $postClean[$key] = htmlentities(trim($val));
            }
            $requete->addSpectacle($postClean);
            header('Location:admin.php?route=showSpectacle');
        }
//        }

        $spectacles = $requete->findAll('spectacle');
        $spectacle = new Spectacle();

        return $this->getTwig()
            ->render('admin/SpectacleView.html.twig',
                [   'spectacles'=>$spectacles,
                    'form'=>$form,
                    'spectacle'=>$spectacle,
                    'typeAction'=>'add',
                    'titreButton'=>'Ajouter'
                ]);
    }

        public function deleteSpectacle()
    {
        $del = new SpectacleRequete();
        $del->deleteSpectacle();
        header('Location:admin.php?route=showSpectacle');
    }

        public function updateSpectacle($id)
    {
        $form = new SpectacleForm();
        $filter = new SpectacleFilter();
        $form->setInputFilter($filter);

        $requete = new SpectacleRequete();


//        if ($form->isValid()) {
        if (!empty($_POST)) {
            foreach ($_POST as $key => $val) {
                $postClean[$key] = htmlentities(trim($val));
            }
            $requete->updateSpectacle($postClean);
            header('Location:admin.php?route=showSpectacle');
        }
//        }

        $spectacles = $requete->findAll('spectacle');
        $spectacle = $requete->findOne('spectacle', $id);

        return $this->getTwig()
            ->render('admin/SpectacleView.html.twig',
                [   'spectacle'=>$spectacle,
                    'form'=>$form,
                    'spectacles'=>$spectacles,
                    'typeAction'=>'update',
                    'titreButton'=>'Modifier'
                ]);
    }



    }