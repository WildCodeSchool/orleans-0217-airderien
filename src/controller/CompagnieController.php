<?php
/**
 * Created by PhpStorm.
 * User: biovor
 * Date: 06/04/17
 * Time: 16:37
 */

namespace air_de_rien\controller;

use air_de_rien\model\CompagnieRequete;
use air_de_rien\model\DB;
use air_de_rien\form\CompagnieFilter;
use air_de_rien\form\CompagnieForm;

class CompagnieController extends Controller
{
    /**
     * @return string
     */
    public function pageCompagnie () {
        $db = new DB();
        $compagnieRequete = new CompagnieRequete();

        $compagnie = $db->findOne('compagnie',1);
        $membres = $db->findAll('membre');
        $spectacles = $db->findAll('spectacle');
        $galerie = $compagnieRequete->findAllMediaCompagnie('media','photo');
        $revue = $compagnieRequete->findAllPresse('revueDePresse');
        $partenaires = $db->findAll('partenaire');


        return $this->getTwig()
                    ->render('viewSite/compagnieView.html.twig',
                             ['compagnie'=> $compagnie,
                              'membres' => $membres,
                              'medias'  => $galerie,
                              'revues'   =>$revue,
                              'partenaires' =>$partenaires,
                              'spectacles'=>$spectacles
                             ]);



    }

    public function index()
    {
        $form = new CompagnieForm();
        $filter = new CompagnieFilter();
        $form->setInputFilter($filter);

        $db = new DB();

        $compagnie = $db->findOne('compagnie',1);

        return $this->getTwig()
            ->render('admin/CompagnieView.html.twig',
                ['compagnie'=>$compagnie,
                    'form'=>$form]);
    }

    public function doUpdateCompagnie()
    {
        if (!empty($_POST)) {
            $requete = new CompagnieRequete();

            $compagnie = $requete->findOne('compagnie', $_POST['id']);

            foreach ($_POST as $key => $val) {
                $postClean[$key] = trim($val);
            }

            if (!empty($_FILES['lienPhotoCompagnie']['name'])) {

                $errors = array();
                $file_name = $_FILES['lienPhotoCompagnie']['name'];
                $file_tmp = $_FILES['lienPhotoCompagnie']['tmp_name'];
                $path_parts = pathinfo($file_name);
                $file_ext = $path_parts['extension'];

                $extensions = array("jpeg", "jpg", "png");

                if (in_array($file_ext, $extensions) === false) {
                    $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
                }

                if (empty($errors)) {
                    move_uploaded_file($file_tmp, "images/" . $compagnie->getLienPhotoCompagnie());
                    $postClean['lienPhotoCompagnie'] = $compagnie->getLienPhotoCompagnie();
                    echo "Success";
                } else {
                    print_r($errors);
                }
            }

            if ($_FILES['ficheTechnique']['name'] != 'name') {

                $errors = array();
                $file_name = $_FILES['ficheTechnique']['name'];
                $file_tmp = $_FILES['ficheTechnique']['tmp_name'];
                $path_parts = pathinfo($file_name);
                $file_ext = $path_parts['extension'];

                $extensions = array("txt", "pdf", "doc");

                if (in_array($file_ext, $extensions) === false) {
                    $errors[] = "extension not allowed, please choose a TXT or PDF or DOC file.";
                }

                if (empty($errors)) {
                    move_uploaded_file($file_tmp, "images/" . $compagnie->getFicheTechnique());
                    $postClean['ficheTechnique'] = $compagnie->getFicheTechnique();
                    echo "Success";
                } else {
                    print_r($errors);
                }
            }

            $requete->updateCompagnie($postClean);
            header('Location:admin.php?route=compagnie');
        }
    }

    public function updateCompagnie($id)
    {
        $form = new CompagnieForm();
        $filter = new CompagnieFilter();
        $form->setInputFilter($filter);

        $requete = new CompagnieRequete();

        if (!empty($_POST)) {
            foreach ($_POST as $key => $val) {
                $postClean[$key] = trim($val);
            }
            $requete->updateCompagnie($postClean);
            header('Location:admin.php?route=compagnie');
        }

        $compagnies = $requete->findAll('compagnie');
        $compagnie = $requete->findOne('compagnie', $id);

        return $this->getTwig()
            ->render('admin/CompagnieView.html.twig',
                ['compagnies'=>$compagnies,
                    'form'=>$form,
                    'compagnie'=>$compagnie,
                ]);
    }

}