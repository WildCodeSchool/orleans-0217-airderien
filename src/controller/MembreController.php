<?php

namespace air_de_rien\controller;

use air_de_rien\model\DB;
use air_de_rien\form\MembreFilter;
use air_de_rien\form\MembreForm;
use air_de_rien\model\Membre;
use air_de_rien\model\MembreRequete;


class MembreController extends Controller
{

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

        return $this->getTwig()
            ->render('admin/MembreView.html.twig',
                ['membres'=>$membres,
                'membre'=>$membre,
                'spectacles'=>$spectacles,
                'typeAction'=>'add',
                'titreButton'=>'Ajouter',
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
                $postClean[$key] = trim($val);
            }

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

                    move_uploaded_file($file_tmp, "images/photos/" . $newFileName);
                    $postClean['photoMembre'] = $newFileName;
                    echo "Success";
                } else {
                    print_r($errors);
                }
            }

            $requete->addMembre($postClean);
            header('Location:admin.php?route=showMembre');
        }

        $membres = $requete->findAll('membre');
        $membre = new Membre();
        $spectacles = $db -> findAll('spectacle');

        return $this->getTwig()
            ->render('admin/MembreView.html.twig',
                ['membres'=>$membres,
                'form'=>$form,
                'membre'=>$membre,
                'spectacles'=>$spectacles,
                'titreButton'=>'Ajouter',
                'typeAction'=>'add'
            ]);
    }

    public function deleteMembre()
    {
        $del = new MembreRequete();
        $del->deleteMembre();
        header('Location:admin.php?route=showMembre');
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