<?php

namespace air_de_rien\controller;

use air_de_rien\model\DB;
use air_de_rien\form\MembreFilter;
use air_de_rien\form\MembreForm;
use air_de_rien\model\Membre;
use air_de_rien\model\MembreRequete;


class MembreController extends Controller
{
    /**
     * récupération de tous les membres
     * @return string
     */
    public function listAll()
    {
        $db = new DB();
        $membres = $db -> findAll('membre');
        return $this->render('admin/membreView.php', ['membres'=>$membres]);
    }


    public function index()
    {
        $form = new MembreForm();
        $filter = new MembreFilter();
        $form->setInputFilter($filter);

        $requete = new MembreRequete();
        $db = new DB();

        $membres = $requete-> findAll('membre');
        $membre = new Membre();
        $spectacles = $db -> findAll('spectacle');

        return $this->render('admin/MembreView.php',
            ['membres'=>$membres,
                'membre'=>$membre,
                'spectacles'=>$spectacles,
                'typeAction'=>'add',
                'form'=>$form]);
    }

    public function addMembre()
    {
        $form = new MembreForm();
        $filter = new MembreFilter();
        $form->setInputFilter($filter);

        $requete = new MembreRequete();
        $db = new DB();

        if (!empty($_POST)) {
            foreach ($_POST as $key => $val) {
                $postClean[$key] = htmlentities(trim($val));
            }
            $requete->addMembre($postClean);
            header('Location:index.php?route=showMembre');
        }

        $membres = $requete->findAll('membre');
        $membre = new Membre();
        $spectacles = $db -> findAll('spectacle');

        return $this->render('admin/MembreView.php',
            ['membres'=>$membres,
                'form'=>$form,
                'membre'=>$membre,
                'spectacles'=>$spectacles,
                'typeAction'=>'add'
            ]);
    }

    public function deleteMembre()
    {
        $del = new MembreRequete();
        $del->deleteMembre();
        header('Location:index.php?route=showMembre');
    }

    public function updateMembre($id)
    {
        $form = new MembreForm();
        $filter = new MembreFilter();
        $form->setInputFilter($filter);

        $requete = new MembreRequete();
        $db = new DB();

        if (!empty($_POST)) {
            foreach ($_POST as $key => $val) {
                $postClean[$key] = htmlentities(trim($val));
            }
            $requete->updateMembre($postClean);
            header('Location:index.php?route=showMembre');
        }

        $membres = $requete->findAll('membre');
        $membre = $requete->findOne('membre', $id);
        $spectacles = $db -> findAll('spectacle');

        return $this->render('admin/MembreView.php',
            ['membres'=>$membres,
                'form'=>$form,
                'membre'=>$membre,
                'spectacles'=>$spectacles,
                'typeAction'=>'update'
            ]);
    }


}