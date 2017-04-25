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

            if (isset($_FILES['lienMedia'])) {
                $errors = array();
                $file_name = $_FILES['lienMedia']['name'];
                $file_tmp = $_FILES['lienMedia']['tmp_name'];
                $path_parts = pathinfo($file_name);
                $file_ext = $path_parts['extension'];
                $newFileName = rand(0, 1000000) . '.' . $file_ext;

                $extensions = array("jpeg", "jpg", "png");

                if (in_array($file_ext, $extensions) === false) {
                    $errors[] = "extension not allowed, please choose a JPEG or PNG file.";

                }

                if (empty($errors)) {

                    move_uploaded_file($file_tmp, "images/photos/" . $newFileName);
                    $postClean['photoMedia'] = $newFileName;
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

                    if (isset($_FILES['lienMedia'])) {
                        $errors = array();
                        $file_name = $_FILES['lienMedia']['name'];
                        $file_tmp = $_FILES['lienMedia']['tmp_name'];
                        $path_parts = pathinfo($file_name);
                        $file_ext = $path_parts['extension'];
                        $newFileName = rand(0, 1000000) . '.' . $file_ext;

                        $extensions = array("jpeg", "jpg", "png");

                        if (in_array($file_ext, $extensions) === false) {
                            $errors[] = "extension not allowed, please choose a JPEG or PNG file.";

                        }

                        if (empty($errors)) {
                            if (file_exists('images/photos/' . $media->getPhotoMedia())) {
                                unlink('images/photos/' . $media->getPhotoMedia());
                            }
                            move_uploaded_file($file_tmp, "images/photos/" . $newFileName);
                            $postClean['photoMedia'] = $newFileName;
                            echo "Success";
                        } else {
                            print_r($errors);
                        }
                    }
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