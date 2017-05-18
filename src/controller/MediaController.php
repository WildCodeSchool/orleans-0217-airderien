<?php

namespace air_de_rien\controller;

use air_de_rien\model\DB;
use air_de_rien\form\MediaFilter;
use air_de_rien\form\MediaForm;
use air_de_rien\model\Media;
use air_de_rien\model\MediaRequete;

class MediaController extends Controller
{
    const COMPAGNIE_NAME = "Comme l'air 2 rien";

    public function index()
    {
        $form = new MediaForm();
        $filter = new MediaFilter();
        $form->setInputFilter($filter);

        $requete = new MediaRequete();
        $db = new DB();

        $medias = $requete-> findAll('media');

        $displayMedia = [];
        foreach ($medias as $media) {
            $spectacleId = $media->getSpectacleId();
            if ($spectacleId) {
                $spectacle = $db -> findOne('spectacle', $spectacleId);
                $mediaTypeName = $spectacle->getTitreSpect();
            } else {
                $mediaTypeName = self::COMPAGNIE_NAME;
            }

            $displayMedia[$mediaTypeName][] = $media;
        }

        $media = new Media();
        $spectacles = $db -> findAll('spectacle');

        return $this->getTwig()
            ->render('admin/MediaView.html.twig',
                [
                    'displayMedia'=>$displayMedia,
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

            if ($_FILES['lienPhoto']['name'] != '') {
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
                    $postClean['genre'] = 'photo';
                    $postClean['lienVideo'] = '';
                }
            }else {

                $postClean['lienPhoto'] = '';
                $postClean['genre'] = 'video';
            }

            if ($_POST['spectacleId'] == 'compagnie'){
                $postClean['affectation'] = 1;
                $postClean['spectacleId'] = null;
            }

            if (!empty($_POST['lienPhoto']) && !empty($_POST['lienVideo'])){
                $postClean['lienVideo'] = '';
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

            foreach ($_POST as $key => $val) {
                $postClean[$key] = trim($val);
            }

            $media = $requete->findOne('media', $postClean['id']);


            if ($_FILES['lienPhoto']['name'] != '') {
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
                    move_uploaded_file($file_tmp, "images/photos/" . $file_name);
                    $postClean['lienPhoto'] = $file_name;
                    $postClean['genre'] = 'photo';
                    $postClean['lienVideo'] = '';
                }
            }else {
                $image = $media->getLienPhoto();
                $postClean['lienPhoto'] = $image;
                $postClean['genre'] = 'photo';
            }

            if (!empty($_POST['lienVideo'])){
                $postClean['genre'] = 'video';
            }


            if ($_POST['spectacleId'] == 'compagnie'){
                $postClean['affectation'] = 1;
                $postClean['spectacleId'] = null;
            }

            if (!empty($_POST['lienPhoto']) && !empty($_POST['lienVideo'])){
                $postClean['lienVideo'] = '';
            }

            $requete->updateMedia($postClean);
            header('Location:admin.php?route=showMedia');
        }
    }

    public function updateMedia($id)
    {
        $form = new MediaForm();
        $filter = new MediaFilter();
        $form->setInputFilter($filter);

        $requete = new MediaRequete();
        $db = new DB();


        $medias = $requete->findAll('media');
        $media = $requete->findOne('media', $id);
        $spectacles = $db -> findAll('spectacle');


        return $this->getTwig()
            ->render('admin/MediaView.html.twig',
                ['medias'=>$medias,
                    'form'=>$form,
                    'media'=>$media,
                    'spectacles'=>$spectacles,
                    'titreButton'=>'Modifier',
                    'typeAction'=>'doUpdate'
                ]);
    }

}