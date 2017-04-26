<?php

namespace air_de_rien\controller;

use air_de_rien\model\DB;
use air_de_rien\form\MediaFilter;
use air_de_rien\form\MediaForm;
use air_de_rien\model\Media;
use air_de_rien\model\MediaRequete;

class MediaController extends Controller
{
    public function index()
    {
        $form = new MediaForm();
        $filter = new MediaFilter();
        $form->setInputFilter($filter);

        $requete = new MediaRequete();
        $db = new DB();

        $medias = $requete-> findAll('media');
        $media = new Media();
        $spectacles = $db -> findAll('spectacle');

        return $this->getTwig()
            ->render('admin/MediaView.html.twig',
                ['medias'=>$medias,
                    'media'=>$media,
                    'spectacles'=>$spectacles,
                    'typeAction'=>'add',
                    'titreButton'=>'Ajouter',
                    'form'=>$form]);
    }

    public function addMedia()
    {
        $form = new MediaForm();
        $filter = new MediaFilter();
        $form->setInputFilter($filter);

        $requete = new MediaRequete();
        $db = new DB();

        if (!empty($_POST)) {
            foreach ($_POST as $key => $val) {
                $postClean[$key] = trim($val);
            }

            if (!empty($_FILES['lienPhoto'])) {
                $errors = array();
                $file_name = $_FILES['lienPhoto']['name'];
                $file_tmp = $_FILES['lienPhoto']['tmp_name'];
                $path_parts = pathinfo($file_name);
                $file_ext = $path_parts['extension'];
                $newFileName = rand(0, 1000000) . '.' . $file_ext;

                $extensions = array("jpeg", "jpg", "png");

                if (in_array($file_ext, $extensions) === false) {
                    $errors[] = "extension not allowed, please choose a JPEG or PNG file.";

                }

                if (empty($errors)) {

                    move_uploaded_file($file_tmp, "images/photos/" . $newFileName);
                    $postClean['lienPhoto'] = $newFileName;
                    echo "Success";
                } else {
                    print_r($errors);
                }
            }

            $requete->addMedia($postClean);
            header('Location:admin.php?route=showMedia');
        }

        $medias = $requete->findAll('media');
        $media = new Media();
        $spectacles = $db -> findAll('spectacle');

        return $this->getTwig()
            ->render('admin/MediaView.html.twig',
                ['medias'=>$medias,
                    'form'=>$form,
                    'media'=>$media,
                    'spectacles'=>$spectacles,
                    'titreButton'=>'Ajouter',
                    'typeAction'=>'add'
                ]);
    }

    public function deleteMedia()
    {
        $del = new MediaRequete();
        $del->deleteMedia();
        header('Location:admin.php?route=showMedia');
    }

    public function doUpdateMedia()
    {
        if (!empty($_POST)) {
            $requete = new MediaRequete();

            $media = $requete->findOne('media', $_POST['id']);
            foreach ($_POST as $key => $val) {
                $postClean[$key] = htmlentities(trim($val));
            }


            if (!empty($_POST)) {
                foreach ($_POST as $key => $val) {
                    $postClean[$key] = trim($val);

                    if (isset($_FILES['lienPhoto'])) {
                        $errors = array();
                        $file_name = $_FILES['lienPhoto']['name'];
                        $file_tmp = $_FILES['lienPhoto']['tmp_name'];
                        $path_parts = pathinfo($file_name);
                        $file_ext = $path_parts['extension'];

                        $extensions = array("jpeg", "jpg", "png");

                        if (in_array($file_ext, $extensions) === false) {
                            $errors[] = "extension not allowed, please choose a JPEG or PNG file.";

                        }

                        if (empty($errors)) {
                            move_uploaded_file($file_tmp, "images/photos/" . $media->getLienPhoto());
                            $postClean['lienPhoto'] = $media->getLienPhoto();
                            echo "Success";
                        } else {
                            print_r($errors);
                        }
                    }
                    if (!isset($postClean['afficher'])) $postClean['afficher'] = 0;
                    if (!isset($postClean['affectation'])) $postClean['afficher'] = 0;
                    $requete->updateMedia($postClean);
                    header('Location:admin.php?route=showMedia');
                }
            }
        }
    }

    public function updateMedia($id)
    {
        $form = new MediaForm();
        $filter = new MediaFilter();
        $form->setInputFilter($filter);

        $requete = new MediaRequete();
        $db = new DB();

        if (!empty($_POST)) {
            foreach ($_POST as $key => $val) {
                $postClean[$key] = trim($val);
            }
            $requete->updateMedia($postClean);
            header('Location:admin.php?route=showMedia');
        }

        $medias = $requete->findAll('media');
        $media = $requete->findOne('media', $id);
        $spectacles = $db -> findAll('spectacle');

        if ($_GET['afficher'] == '1'){
            $check ='checked="checked"';
        }

        if ($_GET['affectation'] == '1'){
            $checkComp ='checked="checked"';
        }

        return $this->getTwig()
            ->render('admin/MediaView.html.twig',
                ['medias'=>$medias,
                    'form'=>$form,
                    'media'=>$media,
                    'spectacles'=>$spectacles,
                    'checked'=>$check,
                    'checkedComp'=>$checkComp,
                    'titreButton'=>'Modifier',
                    'typeAction'=>'doUpdate'
                ]);
    }

}