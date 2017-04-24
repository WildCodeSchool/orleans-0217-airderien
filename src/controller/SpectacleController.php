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


        if (!empty($_POST)) {
            if ($_POST['active'] == '1'){
                $requete->choixSpectacle();
            }

            else ($_POST['active'] = '0');

            foreach ($_POST as $key => $val) {
                $postClean[$key] = trim($val);
            }
            $requete->addSpectacle($postClean);
            header('Location:admin.php?route=showSpectacle');
        }

        $spectacles = $requete->findAll('spectacle');
        $spectacle = new Spectacle();

        return $this->getTwig()
            ->render('admin/SpectacleView.html.twig',
                [   'spectacles'=>$spectacles,
                    'form'=>$form,
                    'spectacle'=>$spectacle,
                    'typeAction'=>'add',
                    'dump'=>$_POST,
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
        $check='';
        $checkhidden='';
        $requete = new SpectacleRequete();
        if ($_GET['active'] == '1'){
            $check ='checked="checked"';
        }

        if ($_GET['active'] == '1'){
            $checkhidden ='checked="checked"';
        }

        if (isset($_POST['active']) == '1'){
            $requete->choixSpectacle();
        }


        if (!empty($_POST)) {
            foreach ($_POST as $key => $val) {
                $postClean[$key] = trim($val);
            }
            $requete->updateSpectacle($postClean);
            header('Location:admin.php?route=showSpectacle');
        }


        $spectacles = $requete->findAll('spectacle');
        $spectacle = $requete->findOne('spectacle', $id);

        return $this->getTwig()
            ->render('admin/SpectacleView.html.twig',
                [   'spectacle'=>$spectacle,
                    'form'=>$form,
                    'spectacles'=>$spectacles,
                    'typeAction'=>'update',
                    'checked'=>$check,
                    'checkhidden'=>$checkhidden,
                    'titreButton'=>'Modifier'
                ]);
    }

    public function doUpdateMembre()
    {
        if (!empty($_POST)) {
            $requete = new MembreRequete();

            $membre = $requete->findOne('membre', $_POST['id']);
            foreach ($_POST as $key => $val) {
                $postClean[$key] = htmlentities(trim($val));
            }


            if (!empty($_POST)) {
                foreach ($_POST as $key => $val) {
                    $postClean[$key] = trim($val);

                    if (isset($_FILES['photoMembre'])) {
                        $errors = array();
                        $file_name = $_FILES['photoMembre']['name'];
                        $file_tmp = $_FILES['photoMembre']['tmp_name'];
                        $path_parts = pathinfo($file_name);
                        $file_ext = $path_parts['extension'];
                        $newFileName = rand(0, 1000000) . '.' . $file_ext;

                        $extensions = array("jpeg", "jpg", "png");

                        if (in_array($file_ext, $extensions) === false) {
                            $errors[] = "extension not allowed, please choose a JPEG or PNG file.";

                        }

                        if (empty($errors)) {
                            if (file_exists('images/photos/' . $membre->getPhotoMembre())) {
                                unlink('images/photos/' . $membre->getPhotoMembre());
                            }
                            move_uploaded_file($file_tmp, "images/photos/" . $newFileName);
                            $postClean['photoMembre'] = $newFileName;
                            echo "Success";
                        } else {
                            print_r($errors);
                        }
                    }
                    $requete->updateMembre($postClean);
                    header('Location:admin.php?route=showMembre');
                }
            }
        }
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
                $postClean[$key] = trim($val);
            }
            $requete->updateMembre($postClean);
            header('Location:admin.php?route=showMembre');
        }

        $membres = $requete->findAll('membre');
        $membre = $requete->findOne('membre', $id);
        $spectacles = $db -> findAll('spectacle');

        return $this->getTwig()
            ->render('admin/MembreView.html.twig',
                ['membres'=>$membres,
                    'form'=>$form,
                    'membre'=>$membre,
                    'spectacles'=>$spectacles,
                    'titreButton'=>'Modifier',
                    'typeAction'=>'doUpdate'
                ]);
    }

    }