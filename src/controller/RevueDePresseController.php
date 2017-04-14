<?php


namespace air_de_rien\controller;


use air_de_rien\form\RevueDePresseForm;
use air_de_rien\form\RevurDePresseFilter;
use air_de_rien\model\RevueDePresse;
use air_de_rien\model\RevueDePresseRequete;

class RevueDePresseController
{
    /**
     * récupération de tous les articles
     * @return string
     */
    public function listAll()
    {
        $db = new DB();
        $articles = $db -> findAll('revueDePresse');
        return $this->render('admin/RevueDePresseView.php', ['articles'=>$articles]);
    }


    public function index()
    {
        $form = new RevueDePresseForm();
        $filter = new RevurDePresseFilter();
        $form->setInputFilter($filter);

        $requete = new RevueDePresseRequete();
        $db = new DB();

        $articles = $requete-> findAll('revueDePresse');
        $article = new RevueDePresse();
        $spectacles = $db -> findAll('spectacle');

        return $this->render('admin/RevueDePresseView.php',
            ['articles'=>$articles,
                'article'=>$article,
                'spectacles'=>$spectacles,
                'typeAction'=>'add',
                'form'=>$form]);
    }

    public function addPersonnage()
    {
        $form = new RevueDePresseForm();
        $filter = new RevurDePresseFilter();
        $form->setInputFilter($filter);

        $requete = new RevueDePresseRequete();
        $db = new DB();

//        if ($form->isValid()) {
        if (!empty($_POST)) {
            foreach ($_POST as $key => $val) {
                $postClean[$key] = htmlentities(trim($val));
            }
            $requete->addArticle($postClean);
            header('Location:index.php?route=showPresse');
        }
//        }

        $articles = $requete->findAll('revueDePresse');
        $article = new RevueDePresse();
        $spectacles = $db -> findAll('spectacle');

        return $this->render('admin/RevueDePresseView.php',
            ['articles'=>$articles,
                'form'=>$form,
                'article'=>$article,
                'spectacles'=>$spectacles,
                'typeAction'=>'add'
            ]);
    }

    public function deletePresse()
    {
        $del = new RevueDePresseRequete();
        $del->deletePresse();
        header('Location:index.php?route=showPresse');
    }

    public function updatePresse($id)
    {
        $form = new RevueDePresseForm();
        $filter = new RevurDePresseFilter();
        $form->setInputFilter($filter);

        $requete = new RevueDePresseRequete();
        $db = new DB();

//        if ($form->isValid()) {
        if (!empty($_POST)) {
            foreach ($_POST as $key => $val) {
                $postClean[$key] = htmlentities(trim($val));
            }
            $requete->updatePresse($postClean);
            header('Location:index.php?route=showPresse');
        }
//        }

        $articles = $requete->findAll('revueDePresse');
        $article = $requete->findOne('revueDePresse', $id);
        $spectacles = $db -> findAll('spectacle');

        return $this->render('admin/RevueDePresseView.php',
            ['articles'=>$articles,
                'form'=>$form,
                'article'=>$article,
                'spectacles'=>$spectacles,
                'typeAction'=>'update'
            ]);
    }
}