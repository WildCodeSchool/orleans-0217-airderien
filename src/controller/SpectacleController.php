<?php

namespace air_de_rien\controller;

use air_de_rien\model\DB;
use air_de_rien\form\SpectacleFilter;
use air_de_rien\form\SpectacleForm;
use air_de_rien\model\Spectacle;
use air_de_rien\model\SpectacleRequete;

class SpectacleController extends Controller
{
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
        $db = new DB();

        $spectacles = $requete-> findAll('spectacle');
        $spectacle = new Spectacle();
        $spectacles = $db -> findAll('spectacle');

        return $this->getTwig()
            ->render('admin/SpectacleView.html.twig',
                ['spectacles'=>$spectacles,
                    'spectacle'=>$spectacle,
                    'typeAction'=>'add',
                    'form'=>$form]);
    }

        public function addSpectacle()
    {
        $form = new SpectacleForm();
        $filter = new SpectacleFilter();
        $form->setInputFilter($filter);

        $requete = new SpectacleRequete();
        $db = new DB();

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
        $spectacles = $db -> findAll('spectacle');

        return $this->getTwig()
            ->render('admin/SpectacleView.html.twig',
                [   'form'=>$form,
                    'spectacles'=>$spectacles,
                    'typeAction'=>'add'
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
        $db = new DB();

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
        $spectacles = $db -> findAll('spectacle');

        return $this->getTwig()
            ->render('admin/SpectacleView.html.twig',
                [   'form'=>$form,
                    'spectacles'=>$spectacles,
                    'typeAction'=>'update'
                ]);
    }



    }